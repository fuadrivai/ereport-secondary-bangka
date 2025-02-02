 <link href="<?php echo base_url(); ?>aset/css/mystyle.css" rel="stylesheet" />

<div class="row">
    <center>
        <?php 
            $wali_kelas = $this->session->userdata('app_rapot_walikelas');
            $is_wali = $wali_kelas['is_wali'];
            ?>
        <h3 class="title"><b>Selamat datang di Aplikasi Raport Online</b><br>
            Anda Login sebagai : <?php echo $this->session->userdata('app_rapot_nama'); ?><br><?php echo $wali = $is_wali == true ? "Wali Kelas : ".$wali_kelas['nama_walikelas'] : ""; ?></h3>
        <h4></h4>
    </center>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-red" ><i class="fa fa-calendar-check-o" style="margin-right: 20%;color: #fff"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Tahun Akademik Aktif</span>
              <span class="info-box-number"><?=$tasm?></span>
            </div>
        </div><!-- /.info-box-content -->
    </div>
   
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-green" ><i class="fa fa-user-secret" style="margin-right: 25%;color: #fff"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Guru</span>
              <span class="info-box-number"><?=$jml_guru?> orang</span>
            </div>
        </div><!-- /.info-box-content -->
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-blue" ><i class="fa fa-users" style="margin-right: 25%;color: #fff"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Siswa</span>
              <span class="info-box-number">LK = <?=$jml_siswa['jml_l']?>, PR = <?=$jml_siswa['jml_p']?></span>
            </div>
        </div><!-- /.info-box-content -->
    </div>
     <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-yellow" ><i class="fa fa-clipboard" style="margin-right: 20%;color: #fff"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Matapelajaran</span>
              <span class="info-box-number"><?=$jml_mapel?> mapel</span>
            </div>
        </div><!-- /.info-box-content -->
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-red" ><i class="fa fa-object-group" style="margin-right: 25%;color: #fff"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Kelas</span>
              <span class="info-box-number"><?=$jml_kelas?> Kelas</span>
            </div>
        </div><!-- /.info-box-content -->
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-green" ><i class="fa fa-asterisk" style="margin-right: 25%;color: #fff"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Ekstrakurikuler</span>
              <span class="info-box-number"><?=$jml_ekstra?> Ekstra</span>
            </div>
        </div><!-- /.info-box-content -->
    </div>
    
   
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Tahun Akademik Aktif</h4>

            </div>
            <div class="content">

               
                <table class="table table-hover table-striped" id="datatabel" style="width: 100%">
                    <thead>
                        <th width="10%">Tahun</th>
                        <th width="20%">Kepala Sekolah/Madrasah</th>
                        <th width="15%">Tgl Raport</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$tahun_akademik['tahun']?></td>
                            <td><?=$tahun_akademik['nama_kepsek']?></td>
                            <td><?=$tahun_akademik['tgl_raport']?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
