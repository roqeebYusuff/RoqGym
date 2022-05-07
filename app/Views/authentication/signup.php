<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RoqGYM | Sign up</title>
      
        <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/ffavicon.ico" />
        
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/toast/iziToast.min.css">
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
                            <div class="sign-user_card shadow my-3 text-left">
                                <div class="text-center">
                                    <img src="<?php echo base_url() ?>/assets/images/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo">
                                </div>
                                <h3 class="mb-0">Sign Up</h3>
                                <p>Create your account</p>
                                <?php echo form_open_multipart('', ['id'=> 'signupForm']) ?>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="text" name="firstname" placeholder=" ">
                                                <label>First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="text" name="lastname" placeholder=" ">
                                                <label>Last Name</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="text" name="username" placeholder=" ">
                                                <label>Username</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="text" name="email" placeholder=" ">
                                                <label>Email</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="text" name="address" placeholder=" ">
                                                <label>Address</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="text" name="telephone" placeholder=" ">
                                                <label>Telephone</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="password" id="password" name="password" placeholder=" ">
                                                <label>Password</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="password" name="confirm_password" placeholder=" ">
                                                <label>Confirm Password</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="custom-control custom-checkbox mb-3 text-left">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">I agree with the terms of use</label>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" onclick="register()" class="btn btn-block rg-btn disabled">Sign Up</button>
                                    <p class="mt-3 text-center">
                                        Already have an Account <a href="<?php echo base_url('user/auth/signin') ?>" class="text-rg">Sign In</a>
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
                $('input[type=checkbox]').change( () => {
                    $('#signupForm button').toggleClass('disabled')
                })
            })
            function register(){
                if(!$('#signupForm').valid()){
                    return
                }

                var target = $('#signupForm button')
                target.addClass('disabled')
                target.html('<span class="spinner-border spinner-border-sm"></span> Signing up...')

                var frmData = {}
                var data = $("#signupForm").serializeArray({checkboxesAsBools: false})
                $.each(data, function(key, input){
                    frmData[input.name] = input.value
                })

                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url() ?>/user/auth/register',
                    data: frmData
                })
                .done( function(response){
                    if(response === 'success'){
                        target.removeClass('disabled')
                        target.text('Sign Up')
                        $("#signupForm")[0].reset()
                        showToastSuccess('Registration successful', 'Your account has been successfully created.')
                        setTimeout( () => {
                            document.location = '<?php echo base_url() ?>/user/auth/signin'
                        }, 3000);
                    }
                    else{
                        target.removeClass('disabled')
                        target.text('Sign Up')
                        showToastError('Account Exists', response)
                    }
                })
                .fail( function(response){
                    target.removeClass('disabled')
                    target.text('Sign Up')
                    showToastError('Error', response)
                })
            }
        </script>
    </body>
</html>