<page backtop="7mm" backbottom="17mm" backleft="25mm" backimg="https://report.mhis.link/images/hanya_logo_op.png" backimgw="50%">
    <!-- <page_footer backbottom="2mm">
        <table>
            <tr>
                <td style="width:50px"></td>
                <td style="width:300px"><i><?= $nama; ?><br><?= $nis; ?></i></td>
                <td style="width:230px"><i>Page [[page_cu]] of [[page_nb]]</i></td>
                <td style="width:80px"><img src="https://report.mhis.link/images/cambridge1.png"></td>
            </tr>
            <tr>
                <td style="width:50px;height:20px" colspan="3"></td>
            </tr>
        </table>
    </page_footer> -->
    <style type="text/css">
        body {
            font-family: arial;
            font-size: 11pt;
            width: 8.5in
        }

        .table {
            border-collapse: collapse;
            border: solid 1px #0162b1;
            width: 100%
        }

        .table tr td,
        .table tr th {
            border: solid 1px #0162b1;
            padding: 3px;
        }

        .table tr th {
            font-weight: bold;
            text-align: center
        }

        .rgt {
            text-align: right;
        }

        .ctr {
            text-align: center;
        }

        .tbl {
            font-weight: bold
        }

        table tr td {
            vertical-align: top
        }

        .font_kecil {
            font-size: 12px
        }
    </style>
    <table>
        <tr>
            <td>
                <img src="https://report.mhis.link/images/Logo-MH-Transparan-01.png" width="130" style="margin-left:20px">
            </td>
            <td>
                <h3 style="text-align: center;"><b>MUTIARA HARAPAN ISLAMIC SCHOOL SECONDARY<br>
                        MIDTERM EVALUATION REPORT<br>
                        ACADEMIC YEAR <?php echo $tasm; ?></b></h3>
            </td>
        </tr>
    </table>
    <table style="color:#0162b1;font-weight: bold;">
        <tr>
            <td style="width:150px">Name</td>
            <td>: <?= $nama; ?></td>
        </tr>
        <tr>
            <td style="width:150px">Student Number</td>
            <td>: <?= $nis . " / " . $nisn; ?></td>
        </tr>
        <tr>
            <td style="width:150px">Grade</td>
            <td>: <?= $kelas; ?></td>
        </tr>
        <tr>
            <td style="width:150px">Semester</td>
            <td>: <?= $semester; ?></td>
        </tr>
    </table>
    <br>
    <br>
    <!-- start rapor -->
    <?php foreach ($details as $val) { ?>
        <table>
            <tr>
                <td>
                    <table style="font-weight: bold;">
                        <tr>
                            <td></td>
                            <td style="width:400px;color:#0162b1;"><?= $val['mapel'] ?></td>
                            <td style="width:250px;text-align: right">Teacher: <?= $val['nama_guru'] ?></td>
                        </tr>
                    </table>
                    <table class="table" style="text-align: center;">
                        <tr style="color:#0162b1;font-weight: bold;">
                            <td colspan="2" style="width:100px;padding: 20px 10px;">Passing Grade</td>
                            <?php if ($tipe_rapor == 2) { ?>
                                <td style="width:100px;padding: 20px 10px;">Knowledge Grade</td>
                                <td style="width:100px;padding: 20px 10px;">Skill Grade</td>
                            <?php } else { ?>
                                <td style="width:100px;padding: 20px 10px;">Student Score</td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding: 20px 10px;"><?= $val['kkm'] ?></td>
                            <td style="padding: 20px 10px;"><?= $val['nilai_pengetahuan'] ?></td>
                            <?php if ($tipe_rapor == 2) { ?>
                                <td style="padding: 20px 10px;"><?= $val['nilai_keterampilan'] ?></td>
                            <?php } ?>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td></td>
                            <td>Comment:</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width:650px;text-align: justify;text-justify: inter-word;">
                                <?= $val['nilai_catatan'] ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    <?php } ?>
    <!-- end rapor -->
    <page backtop="7mm" backbottom="17mm" backleft="25mm" backimg="https://report.mhis.link/images/hanya_logo_op.png" backimgw="50%">
        <page_footer backbottom="2mm">
            <table>
                <tr>
                    <td style="width:50px"></td>
                    <td style="width:300px"><i><?= $nama; ?><br><?= $nis; ?></i></td>
                    <td style="width:230px"><i>Page [[page_cu]] of [[page_nb]]</i></td>
                    <td style="width:80px"><img src="https://report.mhis.link/images/cambridge1.png"></td>
                </tr>
                <tr>
                    <td style="width:50px;height:20px" colspan="3"></td>
                </tr>
            </table>
        </page_footer>
        <br><br>
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
            <?php
            $filterCharacter = array_filter($characters, function ($ket) {
                return $ket['kd_singkat'] == "ICB";
            });
            $chars = array_values($filterCharacter);
            ?>

            <?php foreach ($chars as $char) { ?>
                <tr>
                    <td><?= $char['nama_kd'] ?></td>
                    <td style="text-align: center;"><?= $char['nilai'] == 3 ? "V" : "" ?></td>
                    <td style="text-align: center;"><?= $char['nilai'] == 2 ? "V" : "" ?></td>
                    <td style="text-align: center;"><?= $char['nilai'] == 1 ? "V" : "" ?></td>
                </tr>
            <?php } ?>
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
            <?php
            $filterCharacter = array_filter($characters, function ($ket) {
                return $ket['kd_singkat'] == "PSS";
            });
            $chars = array_values($filterCharacter);
            ?>

            <?php foreach ($chars as $char) { ?>
                <tr>
                    <td><?= $char['nama_kd'] ?></td>
                    <td style="text-align: center;"><?= $char['nilai'] == 3 ? "V" : "" ?></td>
                    <td style="text-align: center;"><?= $char['nilai'] == 2 ? "V" : "" ?></td>
                    <td style="text-align: center;"><?= $char['nilai'] == 1 ? "V" : "" ?></td>
                </tr>
            <?php } ?>
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
            <?php
            $filterCharacter = array_filter($characters, function ($ket) {
                return $ket['kd_singkat'] == "LA";
            });
            $chars = array_values($filterCharacter);
            ?>

            <?php foreach ($chars as $char) { ?>
                <tr>
                    <td><?= $char['nama_kd'] ?></td>
                    <td style="text-align: center;"><?= $char['nilai'] == 3 ? "V" : "" ?></td>
                    <td style="text-align: center;"><?= $char['nilai'] == 2 ? "V" : "" ?></td>
                    <td style="text-align: center;"><?= $char['nilai'] == 1 ? "V" : "" ?></td>
                </tr>
            <?php } ?>
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
                <td style="width:640px;padding: 10px 5px;text-align: justify;"><?= isset($catatan_ht) ? $catatan_ht : "-"; ?></td>
            </tr>
        </table>
        <div class="blue-line" style="width:660px;border-top: 1px #0162b1;"></div>
        <br><br>
        <table>
            <tr>
                <td style="width:450px">
                    MUTIARA HARAPAN ISLAMIC SCHOOL<br>
                    <?php echo $this->config->item('kota'); ?>, <?php echo tjs($tgl_rapor, "l"); ?><br>

                    <br><br><br><br>
                    <u><b><?= $wali_kelas; ?></b></u><br>
                    Homeroom Teacher <br>
                </td>
                <td>

                </td>
                <td></td>
                <td>

                    <br><br><br><br><br><br>
                    <u><b><?= $kepala_sekolah; ?></b></u><br>
                    Secondary Principal
                </td>
            </tr>
        </table>
    </page>