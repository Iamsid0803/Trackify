<!--**********************************
            Content body start
        ***********************************-->
<link href="<?php echo base_url() ?>/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
<div class="content-body">
    <?php
    var_dump($clientdata); ?>

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>/javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>/javascript:void(0)">Add Client</a>
                </li>
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
                            <form class="form-add-client" id="form-edit-client" action="#" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="company_name">Company Name <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input required type="text" class="form-control" name="company_name"
                                            id="company_name" placeholder="Enter the Company's Name"
                                            value="<?= $clientdata->company_name ?>">
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="id" value="<?= $clientdata->id ?>">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="company_mobile">Company Mobile Number
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input required type="number" class="form-control" name="company_mobile"
                                            id="company_mobile" placeholder="Enter the Company's Mobile Number"
                                            value="<?= $clientdata->company_mobile ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="company_email">Company Email <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input required type="email" class="form-control" id="company_email"
                                            name="company_email" placeholder="Company's valid email.."
                                            value="<?= $clientdata->company_email ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="contact_name">contact Name <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input required type="text" class="form-control" name="contact_name"
                                            id="contact_name" placeholder="Enter the Contact's Name"
                                            value="<?= $clientdata->contact_name ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="contact_mobile">Contact's Mobile Number
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input required type="number" class="form-control" name="contact_mobile"
                                            id="contact_mobile" placeholder="Enter the contact's Mobile Number"
                                            value="<?= $clientdata->contact_mobile ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="contact_email">Contact Email <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input required type="email" class="form-control" id="contact_email"
                                            name="contact_email" placeholder="Contact's valid email.."
                                            value="<?= $clientdata->contact_email ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="addressline1">Address Line 1 <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input required type="text" class="form-control" name="addressline1"
                                            id="addressline1" placeholder="society name/Flat no/building no/area "
                                            value="<?= $clientdata->addressline1 ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="addressline2">Address Line 2
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input required type="text" class="form-control" name="addressline2"
                                            id="addressline2" placeholder="Nearest landmark"
                                            value="<?= $clientdata->addressline2 ?>">
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="country">Country
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input required type="text" class="form-control" name="country" id="country"
                                            placeholder="Country Name">
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="state">State/Union Territory
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="state" name="state">
                                            <option value="Andhra Pradesh">Select Your State</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar
                                                Islands
                                            </option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli
                                            </option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option value="Puducherry">Puducherry</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="city">City
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input required type="text" class="form-control" name="city" id="city"
                                            placeholder="City name" value="<?= $clientdata->city ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="pincode">PINCODE
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input required type="number" class="form-control" name="pincode" id="pincode"
                                            placeholder="6 Digit Pincode" value="<?= $clientdata->pincode ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button required type="submit" class="btn btn-primary">Submit</button>
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
<script>
$('#state').val('<?= $clientdata->state ?>');
</script>
<script src="<?php echo base_url() ?>/plugins/validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url() ?>/plugins/sweetalert/js/sweetalert.min.js"></script>
<script src="<?php echo base_url() ?>/customjs/editclient.js"></script>


<!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-suggestions">Suggestions
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" id="val-suggestions"
                                                        name="val-suggestions" rows="5"
                                                        placeholder="What would you like to see?"></textarea>
                                                </div>
                                            </div> -->