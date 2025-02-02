<link href="<?php echo base_url(); ?>aset/css/mystyle.css" rel="stylesheet" />

<div class="row">
    <center>
        <?php 
            $wali_kelas = $this->session->userdata('app_rapot_walikelas');
            $is_wali = $wali_kelas['is_wali'];
            ?>
        <h3 class="title"><b>Welcome to the Online E-Report MHIS</b><br>
        You are logged in as : <?php echo $this->session->userdata('app_rapot_nama'); ?><br><?php echo $wali = $is_wali == true ? "Homeroom Class : ".$wali_kelas['nama_walikelas'] : ""; ?></h3>
        <h4></h4>
    </center>
    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-red" ><i class="fa fa-calendar-check-o" style="margin-right: 20%;color: #fff"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Active Academic Year</span>
              <span class="info-box-number"><?=$tasm?></span>
            </div>
        </div><!-- /.info-box-content -->
    </div>
    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-blue" ><i class="fa fa-clipboard" style="margin-right: 20%;color: #fff"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Subjects</span>
              <span class="info-box-number"><?=$mapel_diampuh?> Subjects</span>
            </div>
        </div><!-- /.info-box-content -->
    </div>
    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-red" ><i class="fa fa-users" style="margin-right: 25%;color: #fff"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Students</span>
              <span class="info-box-number" style="font-size: 20px;">LK = <?=$stat_kelas['jmlk_l']?>, PR = <?=$stat_kelas['jmlk_p']?></span>
            </div>
        </div><!-- /.info-box-content -->
    </div>
    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-blue" ><i class="fa fa-calendar" style="margin-right: 25%;color: #fff"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Date of Report Distribution</span>
              <span class="info-box-number"><?=$bagi_raport?></span>
            </div>
        </div><!-- /.info-box-content -->
    </div>

</div>

<div class="row">

   
</div>
