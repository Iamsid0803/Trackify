<!-- Pignose Calender -->
<link href="<?php echo base_url() ?>/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
<!-- Chartist -->
<link rel="stylesheet" href="<?php echo base_url() ?>/plugins/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">



<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">
        <div class="row">
            <?php
            // var_dump($document);
            ?>
            <?php

            foreach ($document as $key => $value) { ?>
            <div class="col-sm-4">
                <div class="card gradient-4">
                    <div class="card-body">

                        <div class="d-inline-block">
                            <h4 class="text-white"> <a style="text-decoration: underline;"
                                    href="<?php echo base_url() ?>/<?= $value['file_path'] ?>" class="text-white"
                                    target="_blank"><?= $value['file_name'] ?></a> </h4>
                            <h5 class="text-white mb-0"><a href="<?php echo base_url() ?>/<?= $value['file_path'] ?>"
                                    download class="text-white btn btn-success">Download</a> </h5>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-eye"></i></i></span>
                    </div>

                </div>
            </div>
            <?php } ?>


        </div>

    </div>
</div>
<!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->


<!-- Chartjs -->
<script src="<?php echo base_url() ?>/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Circle progress -->
<script src="<?php echo base_url() ?>/plugins/circle-progress/circle-progress.min.js"></script>
<!-- Datamap -->
<script src="<?php echo base_url() ?>/plugins/d3v3/index.js"></script>
<script src="<?php echo base_url() ?>/plugins/topojson/topojson.min.js"></script>
<script src="<?php echo base_url() ?>/plugins/datamaps/datamaps.world.min.js"></script>
<!-- Morrisjs -->
<script src="<?php echo base_url() ?>/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>/plugins/morris/morris.min.js"></script>
<!-- Pignose Calender -->
<script src="<?php echo base_url() ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
<!-- ChartistJS -->
<script src="<?php echo base_url() ?>/plugins/chartist/js/chartist.min.js"></script>
<script src="<?php echo base_url() ?>/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



<script src="<?php echo base_url() ?>/js/dashboard/dashboard-1.js"></script>