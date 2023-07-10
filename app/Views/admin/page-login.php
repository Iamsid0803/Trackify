<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>/assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>/https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="<?php echo base_url() ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">


</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">

                                <h4><?php var_dump($_SESSION)  ?></h4>

                                <form id="form-login" method="POST" class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <div>
                                            <input type="email" name="admin_email" id="admin_email" class="form-control"
                                                placeholder="Email">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <input type="password" class="form-control" id="admin_password"
                                                name="admin_password" placeholder="Password">

                                        </div>
                                        <div>
                                            <p class="mt-1 login-form__footer"><a href="#" class="text-warning">Forgot
                                                    Password?</a></p>
                                        </div>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Dont have an account? <a
                                        href="<?php echo base_url() ?>/admin/register" class="text-primary">Sign Up</a>
                                    now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?php echo base_url() ?>/plugins/common/common.min.js"></script>
    <script src="<?php echo base_url() ?>/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>/js/settings.js"></script>
    <script src="<?php echo base_url() ?>/js/gleek.js"></script>
    <script src="<?php echo base_url() ?>/js/styleSwitcher.js"></script>
    <script src="<?php echo base_url() ?>/plugins/validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>/plugins/sweetalert/js/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>/customjs/login.js"></script>
    <script>
    var base_url = "<?php echo base_url() ?>"
    </script>
</body>

</html>