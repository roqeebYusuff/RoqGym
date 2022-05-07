(function($) {
    'use strict';
    $(function() {
      //validate signup form
        $('#signupForm').validate({
            rules: {
                firstname: "required",
                lastname: "required",
                email: {
                    required: true,
                    email: true
                },
                username: {
                    required: true,
                    minlength: 4
                },
                address: "required",
                telephone: "required",
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                }
            },
            messages: {
                firstname: "Please enter your firstname",
                lastname: "Please enter your lastname",
                email: {
                    required: "Please provide your email address",
                    email: "Please enter a valid email address"
                },
                username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 5 characters"
                },
                address: "Pleaser enter your address",
                telephone: "Please provide your phone number",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Passwords do not match"
                },
            },
            errorPlacement: function(span, element) {
                span.addClass('mt-2 text-danger position-relative font-13');
                span.insertAfter(element);
            }
        })

        $('#signinForm').validate({
            rules: {
                email: "required",
                password: "required"
            },
            messages: {
                email: "Provide an email or username",
                password: "Please provide password"
            },
            errorPlacement: function(span, element) {
                span.addClass('mt-2 text-danger position-relative font-13');
                span.insertAfter(element);
            }
        })

        $('#editProfileForm').validate({
            rules: {
                firstname: "required",
                lastname: "required",
                gender: "required",
                dob: "required",
                email: {
                    required: true,
                    email: true
                },
                address: "required",
                telephone: "required"
            },
            messages: {
                firstname: "Please enter your first name",
                lastname: "Please enter your last name",
                email: "Please enter your email address",
                gender: "Please select your gender",
                dob: "Please select your date of birth",
                gender: "Please select your gender",
                address: "Address cannot be empty",
                telephone: "Please enter your mobile number"
            },
            errorPlacement: function(span, element) {
                span.addClass('mt-2 text-danger position-relative font-13');
                span.insertAfter(element);
            }
        })

        $('#sessionForm').validate({
            rules: {
                session_type: "required",
                session_trainer: "required",
                session_date: "required",
                session_time: "required"
            },
            messages: {
                session_type: "Select a session type",
                session_trainer: "Please select a trainer",
                session_date: "Please set your session date",
                session_time: "Please set you session time",
            },
            errorPlacement: function(span, element) {
                span.addClass('mt-2 text-danger position-relative font-13');
                span.insertAfter(element);
            }
        })
    });
  })(jQuery);