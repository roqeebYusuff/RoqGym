<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RoqGYM | Reset Password</title>
      
        <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/ffavicon.ico" />
        
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main-plugin.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main.css?v=1.0.0">
        
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/remixicon/fonts/remixicon.css">
    </head>
    <body>        
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>

        <div class="wrapper">
            <section class="login-content">
                <div class="container h-100">
                    <div class="row justify-content-center align-items-center height-self-center">
                        <div class="col-lg-7 col-md-9 col-sm-12 align-self-center">
                            <div class="sign-user_card shadow">
                                <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo">

                                <h2 class="mb-1">Reset Password</h2>
                                <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>

                                <?php echo form_open_multipart() ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" type="email" placeholder=" ">
                                            <label>Email</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block rg-btn">Reset</button>
                                <p class="mt-3">
                                    Back to <a href="<?php echo base_url('auth/signin') ?>" class="text-rg">Sign In</a>
                                </p>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
		<script src="<?php echo base_url() ?>/assets/js/backend-bundle.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/vendor/wow/wow.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/js/app.js"></script>
    </body>
</html>