<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RoqGYM | Sign in</title>
      
        <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon.png" />
    
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main.css?v=1.0.0">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/toast/iziToast.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/remixicon/fonts/remixicon.css">
    </head>
    <body >     
        <div class="wrapper">
            <section class="login-content">
                <div class="container h-100">
                    <div class="row justify-content-center align-items-center height-self-center">
                        <div class="col-lg-7 col-md-9 col-sm-12 align-self-center">
                            <div class="sign-user_card shadow text-left">
                                <div class="text-center">
                                    <img src="<?php echo base_url() ?>/assets/images/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo">
                                </div>

                                <h3 class="">Sign In</h3>
                                <p>Login to stay connected.</p>

                                <?php echo form_open_multipart('', ['id' => 'signinForm']) ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="text" name="email"  placeholder=" ">
                                                <label>Email/Username</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <div class="floating-label form-group">
                                                <span class="position-absolute right" id="showHide" style="right: 0; top: -20px;"><i class="ri-eye-line" style="font-size: 20px;"></i></span>
                                                <input class="floating-input form-control" type="password" name="password" id="password" placeholder=" ">
                                                <label>Password</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="custom-control custom-checkbox mb-3 text-left">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="<?php echo base_url('auth/reset') ?>" class="text-rg float-right">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <button class="btn btn-block rg-btn" onclick="signin()">Sign In</button>

                                    <p class="mt-3 text-center">
                                    Don't have an account yet? <a href="<?php echo base_url('user/auth/signup') ?>" class="text-rg">Sign Up</a>
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
		<script src="<?php echo base_url() ?>/assets/vendor/toast/iziToast.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/js/toast.js"></script>
		<script src="<?php echo base_url() ?>/assets/js/jquery.validate.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/js/formValidations.js"></script>

        <script>
            $(document).ready( () => {
                var message = '<?php echo $message ?>';
                if(message != ''){
                    showToastWarning('Error', message)
                }

                $('#showHide').click( () =>{
                    $('#password').attr('type', $('#password').attr('type') === 'password' ? 'text' : 'password')
                    $('#showHide i').toggleClass('ri-eye-line ri-eye-off-line')
                })
            })

            function signin(){
                if(!$('#signinForm').valid()){
                    return
                }

                var target = $('#signinForm button')
                target.addClass('disabled')
                target.html('<span class="spinner-border spinner-border-sm"></span> Signing in...')
            }
        </script>
    </body>
</html>