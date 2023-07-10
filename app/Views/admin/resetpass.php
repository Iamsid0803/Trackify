<!--**********************************
            Content body start
        ***********************************-->
<link href="<?php echo base_url() ?>/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>/javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>/javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form id="resetpass" class="form-valide" action="#" method="post">

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="current_pass"> Current Password <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="current_pass"
                                            name="current_pass" placeholder="Choose a safe one..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="new_pass"> New Password <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="new_pass" name="new_pass"
                                            placeholder="Choose a safe one..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="confirm_new_pass">Confirm New
                                        Password <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="confirm_new_pass"
                                            name="confirm_new_pass" placeholder="..and confirm it!">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->







<script src="<?php echo base_url() ?>/plugins/validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url() ?>/plugins/sweetalert/js/sweetalert.min.js"></script>
<script src="<?php echo base_url() ?>/customjs/resetpass.js"></script>