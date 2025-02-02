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
            <h3 style="text-align: center;font-family:freeserif;"><b>MUTIARA HARAPAN ISLAMIC SCHOOL SECONDARY<br>
            FINAL TAHFIZ REPORT<br>
            ACADEMIC YEAR <?php echo $ta; ?></b></h3>
        </td>
    </tr>
</table>
<br>
    <br>
<table style="">
    <tr>
        <td style="font-family:freeserif;">Name</td>
        <td style="width:380px;font-family:freeserif;">:  <?php echo $det_siswa['nama']; ?></td>
        <td style="font-family:freeserif;">Student Number</td>
        <td style="width:380px;font-family:freeserif;">:  <?php echo $det_siswa['nis']." / ".$det_siswa['nisn']; ?></td>
    </tr>
    <tr>
        <td style="font-family:freeserif;">Grade</td>
        <td style="font-family:freeserif;">:  <?php echo strtoupper($wali_kelas['nmkelas']); ?></td>
         <td style="font-family:freeserif;">Semester</td>
        <td style="font-family:freeserif;">:  <?php echo $semester; ?></td>
    </tr>
</table>
<table class="table" style="text-align: center;">
    <tr style="color:#0162b1;font-weight: bold;">
        <td style="width:140px;padding: 5px;">E</td>
        <td style="width:140px;padding: 5px;">VG</td>
        <td style="width:140px;padding: 5px;">G</td>
        <td style="width:140px;padding: 5px;">NI</td>
    </tr>
    <tr style="color:#0162b1;font-weight: bold;">
        <td style="padding: 5px;font-family:freeserif;">Excellent: 4 ( ≥ 90 )</td>
        <td style="padding: 5px;font-family:freeserif;">Very Good: 3 ( ≥ 85 )</td>
        <td style="padding: 5px;font-family:freeserif;">Good: 2 ( ≥ 79 )</td>
        <td style="padding: 5px;font-family:freeserif;">Need Improvement: 1 ( < 79 )</td>
    </tr>
</table>
    <br>
    <br>
<table class="table" style="text-align: center;">
    <tr style="color:#0162b1;font-weight: bold;">
        <td rowspan="2" style="padding: 20px;font-family:freeserif;">No</td>
        <td rowspan="2" style="width:155px;padding: 20px;font-family:freeserif;">MATERIAL</td>
        <td colspan="4" style="width:350px;padding: 5px;font-family:freeserif;">ASSESSMENT</td>
    </tr>
    <tr style="color:#0162b1;font-weight: bold;">
			<td style="padding: 5px;font-family:freeserif;">E</td>
			<td style="padding: 5px;font-family:freeserif;">VG</td>
			<td style="padding: 5px;font-family:freeserif;">G</td>
			<td style="padding: 5px;font-family:freeserif;">NI</td>
		</tr>
	<?php echo $nna; ?>
</table>
<!-- start rapor -->

<!-- end rapor -->

<br><br>
<p>Teacher’s Comment :</p>
<p><?php echo $catatan_tahfiz; ?></p>
<table>
		<tr>
			<td style="width:450px">
				<br><br><br><br>
				<u><b><?php echo $wali_kelas_tahfiz['nmguru']; ?></b></u><br>
				Tahfiz Teacher <br></td>
			<td>
				
			</td>
			<td></td>
			
		</tr>
	</table>
</page>