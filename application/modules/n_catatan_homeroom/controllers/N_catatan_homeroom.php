<?php
defined('BASEPATH') or exit('No direct script access allowed');

class N_catatan_homeroom extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->sespre = $this->config->item('session_name_prefix');

        $this->d['admlevel'] = $this->session->userdata($this->sespre . 'level');
        $this->d['admkonid'] = $this->session->userdata($this->sespre . 'konid');
        $this->d['url'] = "n_catatan_homeroom";

        $get_tasm = $this->db->query("SELECT tahun FROM tahun WHERE aktif = 'Y'")->row_array();
        $this->d['tasm'] = $get_tasm['tahun'];
        $this->d['ta'] = substr($this->d['tasm'], 0, 4);

        $wali = $this->session->userdata($this->sespre . "walikelas");

        $this->d['id_kelas'] = $wali['id_walikelas'];
        $this->d['nama_kelas'] = $wali['nama_walikelas'];
    }



    public function simpan()
    {
        $p = $this->input->post();

        $mode_form = $p['mode_form'];

        for ($i = 1; $i < $p['jumlah']; $i++) {
            $tasm = $this->d['tasm'];
            $id_siswa = $p['id_siswa_' . $i];
            $catatan = $p['catatan_mid_' . $i] == "" ? "-" : $p['catatan_mid_' . $i];
            $catatan_final = $p['catatan_final_' . $i] == "" ? "-" : $p['catatan_final_' . $i];

            if ($mode_form == "add") {
                $strq = "INSERT INTO t_catatan_homeroom (id_siswa,ta,catatan_mid,catatan_final) VALUES ('$id_siswa','$tasm','$catatan','$catatan_final')";
            } else if ($mode_form == "edit") {
                $existingRecord = $this->db->query("SELECT id FROM t_catatan_homeroom WHERE ta = '" . $tasm . "' AND id_siswa = '" . $id_siswa . "'")->row();

                if (!$existingRecord) {
                    $data = array(
                        'id_siswa' => $id_siswa,
                        'ta' => $tasm,
                        'catatan_mid' => $catatan,
                        'catatan_final' => $catatan_final
                    );
                    $this->db->insert('t_catatan_homeroom', $data);
                    // The student doesn't have a record in t_catatan_homeroom, so insert a new record

                } else {
                    $data = array(
                        'catatan_mid' => $catatan,
                        'catatan_final' => $catatan_final
                    );
                    $this->db->where('ta', $tasm);
                    $this->db->where('id_siswa', $id_siswa);
                    $this->db->update('t_catatan_homeroom', $data);
                }
            }
        }

        $d['status'] = "ok";
        $d['data'] = "Data berhasil disimpan..";

        j($d);
    }

    public function index()
    {
        $this->d['siswa_kelas'] = $this->db->query(
            "SELECT 
        a.id_siswa, b.nama, IFNULL(c.catatan_mid, '') as catatan_mid, IFNULL(c.catatan_final, '') as catatan_final
        FROM t_kelas_siswa a
        INNER JOIN m_siswa b ON a.id_siswa = b.id
        LEFT JOIN t_catatan_homeroom c ON a.id_siswa = c.id_siswa AND c.ta = '" . $this->d['tasm'] . "'
        WHERE a.id_kelas = '" . $this->d['id_kelas'] . "' AND a.ta = '" . $this->d['ta'] . "' ORDER BY b.nama ASC"
        )->result_array();

        $this->d['mode_form'] = "edit";




        if (empty($this->d['siswa_kelas'])) {
            $this->d['siswa_kelas'] = $this->db->query("SELECT 
                                                    a.id_siswa, b.nama, '' catatan_mid, '' catatan_final
                                                    FROM t_kelas_siswa a
                                                    INNER JOIN m_siswa b ON a.id_siswa = b.id
                                                    WHERE a.id_kelas = '" . $this->d['id_kelas'] . "' AND a.ta = '" . $this->d['ta'] . "'")->result_array();
            $this->d['mode_form'] = "add";
        }

        // echo $this->db->last_query();
        // exit;

        $this->d['p'] = "list";
        $this->load->view("template_utama", $this->d);
    }
}
