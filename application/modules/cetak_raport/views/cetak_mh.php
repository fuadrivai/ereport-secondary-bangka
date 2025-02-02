<page backtop="7mm" backbottom="17mm" backleft="25mm" backimg="https://report.mhis.link/images/hanya_logo_op.png" backimgw="50%">
<page_footer backbottom="2mm"> 
       <table>
    <tr>
        <td style="width:50px"></td>
        <td style="width:300px"><i><?php echo $det_siswa['nama']; ?><br><?php echo $det_siswa['nis']; ?></i></td>
        <td style="width:230px"><i>Page [[page_cu]] of [[page_nb]]</i></td>
    </tr>
    <tr>
        <td style="width:50px;height:20px" colspan="3"></td>
    </tr>
</table>
    </page_footer>  
<style type="text/css">
		body {font-family: arial; font-size: 11pt; width: 8.5in}
		.table {border-collapse: collapse; border: solid 1px #0162b1; width:100%}
		.table tr td, .table tr th {border:  solid 1px #0162b1; padding: 3px;}
		.table tr th {font-weight: bold; text-align: center}
		.rgt {text-align: right;}
		.ctr {text-align: center;}
		.tbl {font-weight: bold}

		table tr td {vertical-align: top}
		.font_kecil {font-size: 12px}
	</style>
<table>
    <tr>
         <td>
            <img src="https://report.mhis.link/images/Logo-MH-Transparan-01.png" width="130" style="margin-left:20px"></td>
        <td>
            <h3 style="text-align: center;"><b>MUTIARA HARAPAN ISLAMIC SCHOOL SECONDARY<br>
            FINAL EVALUATION REPORT<br>
            ACADEMIC YEAR <?php echo $ta; ?></b></h3>
        </td>
    </tr>
</table>
<table style="color:#0162b1;font-weight: bold;">
    <tr>
        <td style="width:150px">Name</td>
        <td>:  <?php echo $det_siswa['nama']; ?></td>
    </tr>
    <tr>
        <td style="width:150px">Student Number</td>
        <td>:  <?php echo $det_siswa['nis']." / ".$det_siswa['nisn']; ?></td>
    </tr>
    <tr>
        <td style="width:150px">Grade</td>
        <td>:  <?php echo strtoupper($wali_kelas['nmkelas']??"--"); ?></td>
    </tr>
    <tr>
        <td style="width:150px">Semester</td>
        <td>:  <?php echo $semester; ?></td>
    </tr>
</table>
    <br>
    <br>
<!-- start rapor -->
<?php echo $nilai_utama; ?>
<!-- end rapor -->
<page backtop="7mm" backbottom="17mm" backleft="25mm" backimg="https://report.mhis.link/images/hanya_logo_op.png" backimgw="50%">
    <page_footer backbottom="2mm"> 
       <table>
    <tr>
        <td style="width:50px"></td>
        <td style="width:300px"><i><?php echo $det_siswa['nama']; ?><br><?php echo $det_siswa['nis']; ?></i></td>
        <td style="width:230px"><i>Page [[page_cu]] of [[page_nb]]</i></td>
    </tr>
    <tr>
        <td style="width:50px;height:20px" colspan="3"></td>
    </tr>
</table>
    </page_footer> 
<table>
    <tr>
        <td><b>ISLAMIC CHARACTER BUILDING</b></td>
    </tr>
</table>
<table class="table">
    <tr style="font-weight: bold;text-align: center;">
       <td style="width:420px;padding: 10px 5px;">Key Performance Indicator</td>
        <td style="width:50px;padding: 10px 5px;">VG</td>
        <td style="width:50px;padding: 10px 5px;">G</td>
        <td style="width:50px;padding: 10px 5px;">NI</td>
    </tr>
    <?php echo $icb_aspect; ?>
</table>
<br><br>
<table>
    <tr>
        <td><b>PERSONAL AND SOCIAL SKILLS</b></td>
    </tr>
</table>
<table class="table">
    <tr style="font-weight: bold;text-align: center;">
        <td style="width:420px;padding: 10px 5px;">Key Performance Indicator</td>
        <td style="width:50px;padding: 10px 5px;">VG</td>
        <td style="width:50px;padding: 10px 5px;">G</td>
        <td style="width:50px;padding: 10px 5px;">NI</td>
    </tr>
    <?php echo $pss_aspect; ?>
</table>
<br><br>
<table>
    <tr>
        <td><b>LEARNING ATTITUDES</b></td>
    </tr>
</table>
<table class="table">
    <tr style="font-weight: bold;text-align: center;">
        <td style="width:420px;padding: 10px 5px;">Key Performance Indicator</td>
        <td style="width:50px;padding: 10px 5px;">VG</td>
        <td style="width:50px;padding: 10px 5px;">G</td>
        <td style="width:50px;padding: 10px 5px;">NI</td>
    </tr>
    <?php echo $la_aspect; ?>
</table>
<br><br>
<table class="table">
    <tr style="font-weight: bold;text-align: center;">
        <td style="width:190px;padding: 10px 5px;">NI : Needs Improvement</td>
        <td style="width:190px;padding: 10px 5px;">VG : Very Good</td>
        <td style="width:190px;padding: 10px 5px;">G : Good</td>
    </tr>
</table>
<br><br>
<table>
    <tr style="font-weight: bold; font-size:18px;">
        <td style="width:660px;padding: 10px 5px;">Homeroom Teacher Comments</td>
    </tr>
</table>
<div class="blue-line" style="width:660px;border-top: 1px #0162b1;"></div>
<table>
    <tr>
        <td style="width:640px;padding: 10px 5px;text-align: justify;"><?php echo $catatan_homeroom['catatan_final']??""; ?></td>
    </tr>
</table>
<div class="blue-line" style="width:660px;border-top: 1px #0162b1;"></div>
<br><br>
<table>
		<tr>
			<td style="width:450px">
			MUTIARA HARAPAN ISLAMIC SCHOOL<br>
			<?php if (($wali_kelas['tingkat']??0) != 9) {
				?>
				<?php echo $this->config->item('kota'); ?>, <?php echo isset($det_raport['tgl_raport_kelas3'])? tjs($det_raport['tgl_raport_kelas3'],"l"):""; ?><br>
				<?php } else { ?>
				<?php echo $this->config->item('kota'); ?>, <?php echo tjs($det_raport['tgl_raport_kelas3'],"l"); ?><br>
				<?php } ?>
				<br><br><br><br>
				<u><b><?php echo $wali_kelas['nmguru']??""; ?></b></u><br>
				Homeroom Teacher <br></td>
			<td>
				
			</td>
			<td></td>
			<td>

				<br><br><br><br><br><br>
				<u><b><?php echo $det_raport['nama_kepsek']??""; ?></b></u><br>
				Secondary Principal
			</td>
		</tr>
	</table>
</page>