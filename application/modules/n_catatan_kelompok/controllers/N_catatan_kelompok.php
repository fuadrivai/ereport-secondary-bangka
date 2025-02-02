<?php
defined('BASEPATH') or exit('No direct script access allowed');

class N_catatan_kelompok extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->sespre = $this->config->item('session_name_prefix');

        $this->d['admlevel'] = $this->session->userdata($this->sespre . 'level');
        $this->d['admkonid'] = $this->session->userdata($this->sespre . 'konid');
        $this->d['url'] = "n_catatan_kelompok";
        $this->d['nama_form'] = "f_setmapel";
        $get_tasm = $this->db->query("SELECT tahun FROM tahun WHERE aktif = 'Y'")->row_array();
        $this->d['tasm'] = $get_tasm['tahun'];
        $this->d['ta'] = substr($this->d['tasm'], 0, 4);

        $wali = $this->session->userdata($this->sespre . "walikelas");
        $this->kolom_xl = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        $this->d['id_kelas'] = $wali['id_walikelas'];
        $this->d['nama_kelas'] = $wali['nama_walikelas'];
    }



    public function simpan($id)
    {
        $p = $this->input->post();

        $mode_form = $p['mode_form'];

        for ($i = 1; $i < $p['jumlah']; $i++) {
            $tasm = $this->d['tasm'];
            $id_siswa = $p['id_siswa_' . $i];
            
            $catatan_final = $p['catatan_final_' . $i] == "" ? "-" : htmlentities($p['catatan_final_' . $i]);

            if ($mode_form == "add") {
                $strq = "INSERT INTO t_catatan_projek (id_siswa,ta,id_kelompok,catatan_final) VALUES ('$id_siswa','$tasm','$id','$catatan_final')";
            } else if ($mode_form == "edit") {
                // Check if the student already has a record in t_catatan_projek
                $existingRecord = $this->db->query("SELECT id FROM t_catatan_projek WHERE ta = '" . $tasm . "' AND id_siswa = '" . $id_siswa . "' AND id_kelompok = '" . $id . "'")->row();

                if (!$existingRecord) {
                    // The student doesn't have a record in t_catatan_projek, so insert a new record
                    $strq = 'INSERT INTO t_catatan_projek (id_siswa, ta, id_kelompok, catatan_final) VALUES ("' . $id_siswa . '", "' . $tasm . '", "' . $id . '", "' . $catatan_final . '")';
                } else {
                    // The student already has a record in t_catatan_projek, so update the existing record
                    $strq = 'UPDATE t_catatan_projek SET catatan_final = "' . $catatan_final . '" WHERE ta = "' . $tasm . '" AND id_siswa = "' . $id_siswa . '" AND id_kelompok = "' . $id . '"';
                }
            }

            //  echo $strq;
            $this->db->query($strq);
        }

        $d['status'] = "ok";
        $d['data'] = "Data berhasil disimpan..";

        j($d);
    }

    public function index($id)
    {

        $this->d['siswa_kelas'] = $this->db->query("SELECT 
        a.id_siswa, b.nama, IFNULL(c.catatan_mid, '') as catatan_mid, IFNULL(c.catatan_final, '') as catatan_final
        FROM t_kelas_siswa a
        INNER JOIN m_siswa b ON a.id_siswa = b.id
        LEFT JOIN t_catatan_projek c ON a.id_siswa = c.id_siswa AND c.ta = '" . $this->d['tasm'] . "' AND c.id_kelompok = '" . $id . "'
        WHERE a.id_kelas = '" . $this->d['id_kelas'] . "' AND a.ta = '" . $this->d['ta'] . "'"
        )->result_array();
        $this->d['nama_projek'] = $this->db->query("SELECT nama
        FROM m_projek a
        WHERE a.p_singkat = '" . $id . "'"
        )->result_array();
        $this->d['mode_form'] = "edit";
        $this->d['id_kelompok'] = $id;
        // echo $this->db->last_query();
        // exit;

        $this->d['p'] = "list";
        $this->load->view("template_utama", $this->d);
    }

    public function import($bawa,$id_kelompok)
    {
        $this->load->library('excel');

        $objPHPExcel = new PHPExcel();

        // Set properties of the Excel file
        $objPHPExcel->getProperties()->setCreator("Your Name")
            ->setLastModifiedBy("Your Name")
            ->setTitle("Title of the Excel File")
            ->setSubject("Subject of the Excel File")
            ->setDescription("Description of the Excel File")
            ->setKeywords("keywords")
            ->setCategory("Category");

        // Add some data to the Excel file
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Hanya isi pada cell dengan background HIJAU');
        $objPHPExcel->getActiveSheet()->setCellValue('A2', 'Cukup isikan di isian text tanpa rumus');

        $objPHPExcel->getActiveSheet()->getRowDimension('7')->setRowHeight(30);
        $objPHPExcel->getActiveSheet()->getStyle('A1:A2')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('A1:A2')->getFont()->setSize(16);
        $objPHPExcel->getActiveSheet()->getStyle('A1:A2')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);
        $detil_guru = $this->db->query("SELECT *
        FROM m_guru
        WHERE id = " . $this->d['admkonid'] . "")->row_array();

        $q_nilai_ta = $this->db->query("SELECT 
        d.nama nmsiswa, a.id_siswa, a.catatan_mid, a.catatan_final
        FROM t_catatan_projek a
        LEFT JOIN t_kelas_siswa c ON CONCAT(a.id_siswa,LEFT(a.ta,4)) = CONCAT(c.id_siswa,c.ta)
        LEFT JOIN m_siswa d ON c.id_siswa = d.id
        WHERE c.id_kelas = " . $bawa . "
        AND a.ta = '" . $this->d['tasm'] . "'
        AND a.id_kelompok = '" . $id_kelompok . "'
        ORDER BY d.id
        ")->result_array();
        $d_nilai = array();
        if (!empty($q_nilai_ta)) {
            foreach ($q_nilai_ta as $e) {
                $idx1 = $e['id_siswa'];
                $d_nilai[$idx1]['nama'] = $e['nmsiswa'];
                $d_nilai[$idx1]['uts'] = $e['catatan_mid'];
                $d_nilai[$idx1]['uas'] = $e['catatan_final'];

            }
        }
        $objPHPExcel->getActiveSheet()->setCellValue('A5', 'ID Guru');
        $objPHPExcel->getActiveSheet()->setCellValue('B5', $this->d['admkonid']);
        $objPHPExcel->getActiveSheet()->setCellValue('C5', $detil_guru['nama']);
        $objPHPExcel->getActiveSheet()->setCellValue('C6', ": " . $this->d['nama_kelas']);
        $objPHPExcel->getActiveSheet()->setCellValue('A6', 'ID Kelas');
        $objPHPExcel->getActiveSheet()->setCellValue('B6', $bawa);

        $objPHPExcel->getActiveSheet()->getStyle('C4:C6')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('B4:B6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('B4:B6')->getFont()->setBold(true);

        $objPHPExcel->getActiveSheet()->getStyle('B4:B6')->getFont()->getColor()->setARGB('ffffff');

        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
        $objPHPExcel->getActiveSheet()->getStyle('7')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('7')->getFont()->setSize(11);

        $objPHPExcel->getActiveSheet()->setCellValue('A7', 'No');
        $objPHPExcel->getActiveSheet()->setCellValue('B7', 'Nama');
        $kolom_awal = 2;
        $kolom = $kolom_awal;

        $kolom_akhir_kd = ($kolom - 1);
        $kolom_uts = $kolom;
        $kolom_uas = ($kolom + 1);
        $objPHPExcel->getActiveSheet()->setCellValue($this->kolom_xl[$kolom] . '7', 'Teachers Note');
        $kolom++;
        $objPHPExcel->getActiveSheet()->getColumnDimension($this->kolom_xl[$kolom])->setVisible(FALSE);
        $kolom++;
        $bds = 8;
        if (!empty($d_nilai)) {
            $no = 1;
            foreach ($d_nilai as $ke => $dn) {
                $objPHPExcel->getActiveSheet()->setCellValue('A' . $bds, $no);
                $objPHPExcel->getActiveSheet()->setCellValue('B' . $bds, $dn['nama']);

                $klm = $kolom_awal;
                $n_uts = empty($dn["uts"]) ? '' : $dn["uts"];
                $n_uas = empty($dn["uas"]) ? '' : $dn["uas"];
                $objPHPExcel->getActiveSheet()->setCellValue($this->kolom_xl[$klm] . $bds, $n_uas);
                $objPHPExcel->getActiveSheet()->getColumnDimension($this->kolom_xl[$klm])->setWidth(100);
                $klm++;
                $objPHPExcel->getActiveSheet()->setCellValue($this->kolom_xl[$klm] . $bds, $ke);
                $klm++;
                $objPHPExcel->getActiveSheet()->setCellValue($this->kolom_xl[$klm] . $bds, "");
                $bds++;
                $no++;

            }

        } else {
            exit("Klik Simpan terlebih dahulu...!");
        }
        $koordinat_akhir = $this->kolom_xl[(($kolom - 2) - 0)] . ($bds - 1);
        $objPHPExcel->getActiveSheet()->getStyle('C8:' . $koordinat_akhir)->applyFromArray(
            array(
                'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color' => array('argb' => '01ff80')
                )
            )
        );

        // Rename the worksheet
        $objPHPExcel->getActiveSheet()->setTitle('Worksheet');

        // Save the Excel file
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $nama_file = 'NP_.xlsx';
        // Redirect output to a client’s web browser (Excel2007)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $nama_file . '"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0


        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
        die();
    }

    public function upload($bawa,$id_kelompok)
    {
        $pc_bawa = explode("-", $bawa);

        $detil_guru = $this->db->query("SELECT *
        FROM m_guru
        WHERE id = " . $this->d['admkonid'] . "")->row_array();


        $this->d['bawa'] = $detil_guru;
        $this->d['id_kelas'] = $bawa;
        $this->d['id_kelompok'] = $id_kelompok;
        $this->d['p'] = "form";
        $this->load->view("template_utama", $this->d);
    }
    public function import_nilai($id_kelompok)
    {
        //queri init
        $id_guru_mapel = $this->input->post('id_guru_mapel');
        $id_kelas = $this->input->post('id_kelas');



        $q_siswa_kelas = $this->db->query("SELECT a.id_siswa FROM t_kelas_siswa a WHERE a.id_kelas = '" . $id_kelas . "' AND a.ta = '" . $this->d['ta'] . "'");
        $d_list_siswa = $q_siswa_kelas->result_array();
        $j_list_siswa = $q_siswa_kelas->num_rows();



        $idx_kolom_mulai = 2;
        $idx_kolom_selesai = ($idx_kolom_mulai + ((2 * 2) + 2)) - 1;
        $idx_baris_mulai = 8;
        $idx_baris_selesai = $idx_baris_mulai + $j_list_siswa;

        $idx_kolom_hide = $idx_kolom_mulai + 2;
        //echo $idx_kolom_hide;


        $target_file = './upload/temp/';
        move_uploaded_file($_FILES["import_excel"]["tmp_name"], $target_file . $_FILES['import_excel']['name']);

        $file = explode('.', $_FILES['import_excel']['name']);
        $length = count($file);

        if ($file[$length - 1] == 'xlsx' || $file[$length - 1] == 'xls') {
            //jagain barangkali uploadnya selain file excel
            $tmp = './upload/temp/' . $_FILES['import_excel']['name'];
            //Baca dari tmp folder jadi file ga perlu jadi sampah di server :-p

            $this->load->library('excel'); //Load library excelnya
            $read = PHPExcel_IOFactory::createReaderForFile($tmp);
            $read->setReadDataOnly(true);
            $excel = $read->load($tmp);

            //echo $tmp;

            $_sheet = $excel->setActiveSheetIndexByName('Worksheet'); //Kunci sheetnye biar kagak lepas :-p


            $x_id_guru = $_sheet->getCell('B5')->getCalculatedValue();
            $x_id_kelas = $_sheet->getCell('B6')->getCalculatedValue();

            //echo $x_id_mapel."/".$detil_mp['id_mapel']."-".$x_id_guru."/".$detil_mp['id_guru']."-".$x_id_kelas."/".$detil_mp['id_kelas'];

            if ($x_id_guru != $id_guru_mapel) {

                echo "File Excel SALAH";
                exit;
            }

            $data = array();

            //ambil id_siwa mumet

            //var tetap
            $tasm = $this->d['tasm'];
            $id_guru_mapel = $id_guru_mapel;

            for ($b = $idx_baris_mulai; $b < $idx_baris_selesai; $b++) {
                $idx_klm = 2 + 1;

                $va_xy_id_siswa = $_sheet->getCell($this->kolom_xl[$idx_klm] . $b)->getCalculatedValue();
                $id_siswa = $va_xy_id_siswa;

                //ngitung mulai sik uas
                $idx_mulai_uts = $idx_kolom_mulai;

                $xy_nilai_uas = $_sheet->getCell($this->kolom_xl[($idx_mulai_uts)] . $b)->getCalculatedValue();
                $xy_nilai_catatan = $_sheet->getCell($this->kolom_xl[($idx_mulai_uts + 1)] . $b)->getCalculatedValue();


                //nilai kd
                $tmb = 2 + 1;

                for ($k = $idx_kolom_mulai; $k < ($idx_kolom_hide); $k++) {
                    $nilai = $_sheet->getCell($this->kolom_xl[$k] . $b)->getCalculatedValue();
                    $hide = $_sheet->getCell($this->kolom_xl[($k + $tmb)] . $b)->getCalculatedValue();

                    $pc_hide = explode("-", $hide);
                    $id_mapel_kd = !empty($pc_hide[1]) ? $pc_hide[1] : 0;

                    //echo $pc_hide[1];
                    /*
                    echo "Id_Siswa : ".$id_siswa.", ";
                    echo "NIlai : ".$nilai.", ";
                    echo "Hide : ".$id_mapel_kd;
                    */

                    $data[] = array("id_siswa" => $id_siswa, "ta" => $tasm, "catatan_final" => $xy_nilai_uas);

                    //echo "/";
                }

                //echo "<br>";
            }

            //exit;


            $arr_perdata = array();
            foreach ($data as $d) {
                 $data1 = array(
                    'catatan_final' => $d['catatan_final']
                );
                $this->db->where('ta', $d['ta']); 
                 $this->db->where('id_kelompok', $id_kelompok);
                $this->db->where('id_siswa', $d['id_siswa']);// Replace 'id' with your actual unique identifier for the record to update
                $this->db->update('t_catatan_projek', $data1);
            }

            //j($arr_perdata);
            //exit;

            //echo $strq;
            //exit;



            //echo $strq;
            //exit;

            @unlink('./upload/temp/' . $tmp);

            $this->session->set_flashdata('k', '<div class="alert alert-success">Nilai berhasil diupload..</div>');
            redirect('n_catatan_kelompok/index/' . $id_kelompok);

        } else {
            exit('Buka File Excel...'); //pesan error tipe file tidak tepat
        }
        redirect('n_catatan_kelompok/index/');
    }
}