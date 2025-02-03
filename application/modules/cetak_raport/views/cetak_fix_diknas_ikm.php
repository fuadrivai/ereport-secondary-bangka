<page backtop="7mm" backbottom="17mm" backleft="25mm" backimg="https://report.mhis.link/images/hanya_logo_op.png" backimgw="50%">
    <style type="text/css">
        body {
            font-family: freeserif;
            font-size: 11pt;
            width: 8.5in
        }

        .table {
            border-collapse: collapse;
            border: solid 1px #999;
            width: 100%
        }

        .table tr td,
        .table tr th {
            font-family: freeserif;
            border: solid 1px #000;
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
            <td colspan="6">
                <p>
                <h3 style="text-align: center;">HASIL PENCAPAIAN KOMPETENSI PESERTA DIDIK</h3>
                </p>
            </td>
        </tr>
        <tr>
            <td style="width:100px">Nama Sekolah</td>
            <td>:</td>
            <td style="font-weight: bold; width:350px">
                <?= $this->config->item('nama_sekolah'); ?>
            </td>
            <td>Kelas</td>
            <td>:</td>
            <td style="font-weight: bold;">
                <?= strtoupper($kelas); ?>
            </td>
        </tr>
        <tr>
            <td style="width:100px">Alamat Sekolah</td>
            <td>:</td>
            <td style=" width:350px">
                <?= $this->config->item('alamat_sekolah'); ?>
            </td>
            <td>Semester</td>
            <td>:</td>
            <td style="font-weight: bold;">
                <?= $semester; ?>
            </td>
        </tr>
        <tr>
            <td style="width:100px">Nama Siswa</td>
            <td>:</td>
            <td style="font-weight: bold; width:350px">
                <?= $nama; ?>
            </td>
            <td>Tahun Pelajaran</td>
            <td>:</td>
            <td style="font-weight: bold;">
                <?= $tasm; ?>
            </td>
        </tr>
        <tr>
            <td style="width:100px">NIS / NISN</td>
            <td>:</td>
            <td style="font-weight: bold; width:350px">
                <?= $nis . " / " . $nisn ?>
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="6"><br><br></td>
        </tr>
    </table>
    <table class="table">
        <thead>
            <tr>
                <th colspan="2">Mata Pelajaran</th>
                <th colspan="2">Nilai Akhir</th>
                <th colspan="2">Capaian Kompetensi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <?php
            $filterA = array_filter($details, function ($ket) {
                return $ket['kelompok'] == "A";
            });
            $kelompokA = array_values($filterA);
            ?>
            <?php foreach ($kelompokA as $kelA) { ?>
                <tr>
                    <td class="ctr"><?= $no ?></td>
                    <td style="width:170px;"><?= $kelA['mapel_diknas'] == "" ? $kelA['mapel'] : $kelA['mapel_diknas'] ?></td>
                    <td colspan="2" class="ctr"><?= $kelA['nilai_pengetahuan'] ?></td>
                    <td colspan="2" style="width:330px; padding: 20px 10px;"><?= $kelA['desk_pengetahuan'] ?></td>

                </tr>
                <?php $no++; ?>
            <?php } ?>
            <?php
            $filterB = array_filter($details, function ($ket) {
                return $ket['kelompok'] == "B";
            });
            $kelompokB = array_values($filterB);
            ?>
            <?php foreach ($kelompokB as $kelB) { ?>
                <tr>
                    <td class="ctr"><?= $no ?></td>
                    <td style="width:170px;"><?= $kelB['mapel_diknas'] == "" ? $kelB['mapel'] : $kelB['mapel_diknas'] ?></td>
                    <td colspan="2" class="ctr"><?= $kelB['nilai_pengetahuan'] ?></td>
                    <td colspan="2" style="width:330px; padding: 20px 10px;"><?= $kelB['desk_pengetahuan'] ?></td>
                </tr>
                <?php $no++; ?>
            <?php } ?>
            <?php
            $filterC = array_filter($details, function ($ket) {
                return $ket['kelompok'] == "C";
            });
            $kelompokC = array_values($filterC);
            ?>
            <?php foreach ($kelompokC as $kelC) { ?>
                <tr>
                    <td class="ctr"><?= $no ?></td>
                    <td style="width:170px;"><?= $kelC['mapel_diknas'] == "" ? $kelC['mapel'] : $kelC['mapel_diknas'] ?></td>
                    <td colspan="2" class="ctr"><?= $kelC['nilai_pengetahuan'] ?></td>
                    <td colspan="2" style="width:330px; padding: 20px 10px;"><?= $kelC['desk_pengetahuan'] ?></td>
                </tr>
                <?php $no++; ?>
            <?php } ?>
            <?php
            $filterMulok = array_filter($details, function ($ket) {
                return $ket['kelompok'] == "MULOK";
            });
            $kelompokMulok = array_values($filterMulok);
            ?>
            <?php foreach ($kelompokMulok as $mulok) { ?>
                <tr>
                    <td class="ctr"><?= $no ?></td>
                    <td style="width:170px;"><?= $mulok['mapel_diknas'] == "" ? $mulok['mapel'] : $mulok['mapel_diknas'] ?></td>
                    <td colspan="2" class="ctr"><?= $mulok['nilai_pengetahuan'] ?></td>
                    <td colspan="2" style="width:330px; padding: 20px 10px;"><?= $mulok['desk_pengetahuan'] ?></td>
                </tr>
                <?php $no++; ?>
            <?php } ?>
        </tbody>
    </table>
    <page backtop="7mm" backbottom="17mm" backleft="25mm" backimg="https://report.mhis.link/images/hanya_logo_op.png" backimgw="50%">


        <table>
            <tr>
                <td colspan="9">
                    <br>
                </td>
            </tr>
        </table>
        <table class="table" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th style="width:30%">Kegiatan Ekstrakurikuler</th>
                    <th style="width:10%x">Nilai</th>
                    <th style="width:50%">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($exschool)) { ?>
                    <?php $no = 1; ?>
                    <?php foreach ($exschool as $ne) { ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td style="width:30%">
                                <?= $ne['nama']; ?>
                            </td>
                            <td style="width:10%; text-align:center">
                                <?= $ne['nilai']; ?>
                            </td>
                            <td style="width:50%">
                                <?= $ne['desk']; ?>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                <?php } else { ?>
                    <?= '<tr><td colspan="4">-</td></tr>' ?>
                <?php } ?>
            </tbody>
        </table>
        <br><br>
        <table class="table" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th style="width:40%">Jenis Prestasi</th>
                    <th style="width:50%">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($prestasi)) {
                    $no = 1;
                    foreach ($prestasi as $p) {
                ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td style="width:40%">
                                <?= $p['jenis']; ?>
                            </td>
                            <td sstyle="width:50%">
                                <?= $p['keterangan']; ?>
                            </td>
                        </tr>
                <?php
                        $no++;
                    }
                } else {
                    echo '<tr><td colspan="3">-</td></tr>';
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <table>
            <tr>
                <td colspan="9">

                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <table class="table">
                        <tr>
                            <td style="width:200px">Sakit</td>
                            <td style="width:100px" class="ctr">
                                <?= $sakit; ?> hari
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px">Izin</td>
                            <td style="width:100px" class="ctr">
                                <?= $izin; ?> hari
                            </td>
                        </tr>
                        <tr>
                            <td style="width:200px">Tanpa Keterangan</td>
                            <td style="width:100px" class="ctr">
                                <?= $tanpa_ket; ?> hari
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <br><br>
        <table>
            <tr>
                <td colspan="9">
                    <b> Catatan Wali Kelas</b>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: solid 1px #000; padding: 20px 10px; width:640px;">
                    <?= $catatan_naik_kelas; ?>
                </td>
            </tr>
        </table>

        <br><br>
        <?php
        if ($semester == 2) {
        ?>
            <table>
                <tr>
                    <td colspan="6">
                        <?php
                        $naik_kelas = $tingkat + 1;
                        $kelas_now = $tingkat;

                        if ($kelas_now != 9) {

                            if ($naik == 'N') {
                                $naik = 'text-decoration: line-through';
                                $tidak_naik = '';
                            } else {
                                $naik = '';
                                $tidak_naik = 'text-decoration: line-through';
                            }

                        ?>


                            <div style="border: solid 1px; padding: 10px; margin-top: 40px">
                                <b>Keputusan : </b>
                                <p>Berdasarkan pencapaian kompetensi pada semester ke-1 dan ke-2, peserta didik ditetapkan *) :<br>

                                <div style="display: block">
                                    <div style="diplay: inline; float: left; width: 200px;  <?= $naik; ?> ">naik ke kelas </div>
                                    <div style="diplay: inline; float: left; font-weight: bold; <?= $naik; ?>"><?= $naik_kelas . " (" . terbilang($naik_kelas) . ")"; ?></div>
                                </div><br>
                                <div style="display: block">
                                    <div style="diplay: inline; float: left; width: 200px;<?= $tidak_naik; ?>">tinggal di kelas
                                    </div>
                                    <div style="diplay: inline; float: left; font-weight: bold; <?= $tidak_naik; ?>"><?= $kelas_now . " (" . terbilang($kelas_now) . ")"; ?></div>
                                </div>
                                <br><br>
                                *) Coret yang tidak perlu
                            </div>

                        <?php } else { ?>
                            <div style="border: solid 1px; padding: 10px; margin-top: 40px">
                                <b>Keputusan : </b>
                                <p>Berdasarkan pencapaian kompetensi pada kelas 4, 5 dan 6, maka, peserta didik dinyatakan : *)
                                    :<br>
                                <div style="display: block; font-weight: bold">
                                    LULUS / <strike>TIDAK LULUS</strike>
                                </div><br><br>
                                *) Coret yang tidak perlu
                            </div>

                        <?php } ?>
                    </td>
                </tr>
            </table>
        <?php } ?>
        <br><br><br>
        <table>
            <tr>
                <td style="width:400px">
                    MUTIARA HARAPAN ISLAMIC SCHOOL<br>
                    <?php if ($tingkat != 9) {
                    ?>
                        <?= $this->config->item('kota'); ?>,
                        <?= tjs($tgl_rapor, "l"); ?><br>
                    <?php } else { ?>
                        <?= $this->config->item('kota'); ?>,
                        <?= tjs($tgl_rapor, "l"); ?><br>
                    <?php } ?>
                    <br><br><br><br>
                    <u><b>
                            <?= $wali_kelas; ?>
                        </b></u><br>
                    Wali Kelas <br>
                </td>
                <td>

                </td>
                <td></td>
                <td>
                    <?php
                    if ($tingkat != 9) {
                    ?>
                        <?= $this->config->item('kota'); ?>,
                        <?= tjs($tgl_rapor, "l"); ?><br>
                    <?php } else { ?>
                        <?= $this->config->item('kota'); ?>,
                        <?= tjs($tgl_rapor, "l"); ?><br>
                    <?php } ?>
                    <br><br><br><br><br>
                    <u><b>
                            <?= $kepala_sekolah; ?>
                        </b></u><br>
                    Kepala
                    <?= $this->config->item('jenis_sekolah'); ?>
                </td>
            </tr>
        </table>



    </page>