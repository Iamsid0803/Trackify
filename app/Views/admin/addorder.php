<!--**********************************
            Content body start
        ***********************************-->
<link href="<?php echo base_url() ?>/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>/admin/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>/admin/addorder">Add Order</a></li>
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
                            <form class="form-add-order" action="#" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="client">Client
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="client" name="client">

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="item_name">Item Name <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" required class="form-control" id="item_name" name="item_name"
                                            placeholder="Enter The Item name ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="confirmation_date">Order Confirmation
                                        Date <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="date" required class="form-control" id="confirmation_date"
                                            name="confirmation_date" placeholder="Enter The Order Confirmation Date ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="delivery_date">Order Delivery Date <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="date" required class="form-control" id="delivery_date"
                                            name="delivery_date" placeholder="Enter The Order Delivery Date ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="quantity">Item Quantity <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" required class="form-control" id="quantity" name="quantity"
                                            placeholder="Enter The Item Quantity ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="rate_per_unit">Item rate (per unit)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" required class="form-control" id="rate_per_unit"
                                            name="rate_per_unit" placeholder="Enter The Item rate (per unit) ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="extra_charges">Extra charges <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" required class="form-control" id="extra_charges"
                                            name="extra_charges" placeholder="Enter Extra charges ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="total_amount"> Total amount <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" required class="form-control" id="total_amount"
                                            name="total_amount" placeholder="Enter Total amount ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="status">Order Status <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" required class="form-control" id="status" name="status"
                                            placeholder="Enter The Order Status ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="document">Order document <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="file" required class="form-control" id="document" name="document[]"
                                            multiple placeholder="Upload the  documents ">
                                    </div>
                                </div>


                                <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"><a href="<?php echo base_url() ?>/#">Terms &amp; Conditions</a>  <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                    <input type="check requiredbox" class="css-control-input" id="val-te requiredrms" name="val-terms" value="1"> <span class="css-control-indicator"></span> I agree to the terms</label>
                                            </div>
                                        </div> -->
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
<script src="<?php echo base_url() ?>/customjs/addorder.js"></script>