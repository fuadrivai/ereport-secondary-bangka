<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->sespre = $this->config->item('session_name_prefix');
        $this->d['admlevel'] = $this->session->userdata($this->sespre.'level');
        $this->d['admkonid'] = $this->session->userdata($this->sespre.'konid');
        $this->d['admnama'] = $this->session->userdata($this->sespre.'nama');
        $this->d['nama_form'] = "f_login";
        $get_tasm = $this->db->query("SELECT *  FROM tahun WHERE aktif = 'Y'")->row_array();
        $this->d['tasm'] = $get_tasm['tahun'];
        $this->d['bagi_raport'] = $get_tasm['tgl_raport'];
        $this->d['ta'] = substr($get_tasm['tahun'],0,4);
        $this->d['url'] = "home";
        cek_aktif();
        $wali_kelas = $this->session->userdata('app_rapot_walikelas');
        $this->d['id_kelas'] = $wali_kelas['id_walikelas'];
        $this->d['id_guru'] = $this->session->userdata('app_rapot_konid');
    }
public function index() {
    

    if ($this->d['admlevel'] == "admin") {
        $q_jml_siswa = $this->db->query("SELECT 
                                    SUM(IF(a.jk='L',1,0)) jml_l,
                                    SUM(IF(a.jk='P',1,0)) jml_p
                                    FROM m_siswa a
                                    WHERE a.stat_data = 'A'")->row_array();
         $q_jml_guru = $this->db->query("SELECT COUNT(id) jml
                                    FROM m_guru a
                                    WHERE a.stat_data = 'A'")->row_array();
         $q_jml_mapel = $this->db->query("SELECT COUNT(id) jml FROM m_mapel")->row_array();
         $q_jml_kelas = $this->db->query("SELECT COUNT(id) jml FROM m_kelas")->row_array();
         $q_jml_ekstra = $this->db->query("SELECT COUNT(id) jml FROM m_ekstra")->row_array();
         $tahun_akademik = $this->db->query("SELECT * FROM tahun where tahun like '%".$this->d['ta']."%' and aktif='Y' ")->row_array();

        $this->d['jml_siswa'] = $q_jml_siswa;
        $this->d['jml_guru'] = $q_jml_guru['jml'];
        $this->d['jml_mapel'] = $q_jml_mapel['jml'];
        $this->d['jml_kelas'] = $q_jml_kelas['jml'];
        $this->d['jml_ekstra'] = $q_jml_ekstra['jml'];
        $this->d['tahun_akademik'] = $tahun_akademik;

        $this->d['p'] = "v_home";
    } 
   else if ($this->d['admlevel'] == "guru") {
    $q_jml_kelas = $this->db->query("SELECT 
                                    SUM(IF(b.jk='L',1,0)) jmlk_l,
                                    SUM(IF(b.jk='P',1,0)) jmlk_p
                                    FROM t_kelas_siswa a
                                    INNER JOIN m_siswa b ON a.id_siswa = b.id
                                    WHERE a.ta = '".$this->d['ta']."' AND a.id_kelas = '".$this->d['id_kelas']."'")->row_array();
     $this->d['stat_kelas'] = $q_jml_kelas;

     $q_mapel_diampuh = $this->db->query("SELECT 
                                         count(*) as jml FROM t_guru_mapel 
                                         where id_guru = '".$this->d['id_guru']."' and tasm = '".$this->d['tasm']."' ")->row_array();
    
     $this->d['mapel_diampuh'] = $q_mapel_diampuh['jml'];

     $this->d['list_mapelkelas'] = $this->db->query("SELECT 
                                                a.id, b.kd_singkat nmmapel, a.id_mapel, a.id_kelas, c.nama nmkelas, b.is_sikap
                                                FROM t_guru_mapel a
                                                INNER JOIN m_mapel b ON a.id_mapel = b.id
                                                INNER JOIN m_kelas c ON a.id_kelas = c.id 
                                                WHERE a.id_guru = '".$this->d['admkonid']."'
                                                AND a.tasm = '".$this->d['tasm']."'") ->result_array();

        $this->d['p'] = "v_home_guru";
    } 
    else {
        $this->d['p'] = "v_home_siswa";
    }
    $this->load->view("template_utama", $this->d);
}
    public function ubah_password() {
        $this->d['p'] = "v_ubah_password";
        $this->load->view("template_utama", $this->d);
    }
    public function simpan_ubah_password() {
        $id_user = $this->session->userdata('app_rapot_id');
        $cek_user = $this->db->query("SELECT id, username, password FROM m_admin WHERE id = $id_user")->row_array();
        $p = $this->input->post();
        $plama = sha1(sha1($p['p1']));
        $d = array();
        if (empty($cek_user)) {
            $d['status'] = "gagal";
            $d['data'] = "User tidak ditemukan";
        } else if ($p['username'] != $cek_user['username'])  {
            $d['status'] = "gagal";
            $d['data'] = "Username tidak ditemukan";
        } else if ($plama != $cek_user['password'])  {
            $d['status'] = "gagal";
            $d['data'] = "Password lama tidak cocok";
        } else if (strlen($p['p2']) < 6) {
            $d['status'] = "gagal";
            $d['data'] = "Password minimal 6 karakter";
        } else if ($p['p2'] != $p['p3']) {
            $d['status'] = "gagal";
            $d['data'] = "Password baru tidak sama";
        } else {
            $this->db->query("UPDATE m_admin SET password = '".sha1(sha1($p['p2']))."' WHERE id = '".$id_user."'");
            $d['status'] = "ok";
            $d['data'] = "Password berhasil diubah";
        }
        j($d);
        exit;
    }
    
    public function cetak() {
        $this->d['siswa'] = $this->db->query("SELECT * FROM m_siswa WHERE m_siswa.id IN (SELECT id_siswa FROM t_kelas_siswa)")->result_array();
        $this->d['tahun'] = $this->db->query("SELECT * FROM tahun")->result_array();
        
        $this->d['p'] = "v_cetak";
        $this->load->view("template_utama", $this->d);
    }
    
    public function cetak_rapot_ok() {
        $p = $this->input->post();
        $id_siswa = $p['id_siswa'];
        $tahun = $p['tahun'];
        
        redirect('cetak_raport/cetak/'.$id_siswa.'/'.$tahun);
    }
    
    
}