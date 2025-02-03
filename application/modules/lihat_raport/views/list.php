<style type="text/css">
    .ctr {
        text-align: center
    }

    .nso {}
</style>
<div class="">
    <div class="col-md-12">
        <p>
            <!--<a href="<?php echo base_url() . "/" . $url; ?>/cetak/<?php echo $this->uri->segment(3); ?>" class="btn btn-warning" target="_blank">Cetak</a>-->
        </p>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Report Card</h4>
            </div>
            <div class="content">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="40%">Name</th>
                            <th width="50%">View</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        for ($i = 0; $i < count($tahun); $i++) {
                            $th = $tahun[$i];
                            $_th =  substr($th['tahun'], 0, 4);
                            $smt = substr($th['tahun'], -1);
                            $tglmid = new DateTime($th['tgl_raport']);
                            $tglfinal = new DateTime($th['tgl_raport_kelas3']);
                            $today = new DateTime();
                        ?>
                            <tr>
                                <td><?php echo ($i + 1); ?></td>
                                <td><?php echo "Semester " . $smt . " / " . $_th . "-" . ($_th + 1); ?></td>
                                <td>

                                    <?php if (!empty($siswa_kelas)) { ?>
                                        <?php for ($j = 0; $j < count($siswa_kelas); $j++) { ?>
                                            <?php
                                            $sk = $siswa_kelas[$j];
                                            $bool =  ($sk['tingkat'] == 7 || $sk['tingkat'] == 10 || $sk['tingkat'] == 8 || $sk['tingkat'] == 11);
                                            ?>
                                            <?php if ($_th == $sk['ta']) { ?>
                                                <?php $url = $bool ? "cetak_ikm" : "cetak"; ?>
                                                <?php if ($tglmid <= $today) { ?>
                                                    <a href="<?= base_url() . "cetak_raport_pts" . "/mhis/" . $sk['id_siswa'] . "/" . $th['tahun']; ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i> Midterm Report</a>
                                                <?php } ?>
                                                <?php if ($tglfinal <= $today) { ?>
                                                    <a href="<?= base_url() . "cetak_raport" . "/diknas/" . $sk['id_siswa'] . "/" . $th['tahun']; ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i> Raport Diknas</a>
                                                    <a href="<?= base_url() . "cetak_raport" . "/mhis/" . $sk['id_siswa'] . "/" . $th['tahun']; ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i> Final Report</a>
                                                    <?php if ($bool) { ?>
                                                        <a href="https://report.mhis.link/bangka/secondary/cetak_raport/cetak_projek/<?php echo $sk['id_siswa'] . "/" . $th['tahun']; ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i> Report Project P5</a>
                                                        <a href="https://report.mhis.link/bangka/secondary/cetak_raport/cetak_tahfiz/<?php echo $sk['id_siswa'] . "/" . $th['tahun']; ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i> Tahfiz Report</a>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>