<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?php echo $title ?> | RoqGYM</title>
      
        <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon.png" />
        
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/wow/animate.min.css">
        <!-- <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main-plugin.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/new.css">
        
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/remixicon/fonts/remixicon.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/slick/slick.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/slick/slick-theme.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/toast/iziToast.min.css">


        <script src="<?php echo base_url() ?>/assets/js/backend-bundle.min.js"></script>
    </head>
    <body>
        <div id="loading">
            <div id="loading-center"></div>
        </div>

        <div class="wrapper">
            <div class="iq-sidebar  sidebar-default ">
                <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                    <a href="index.html" class="header-logo">
                        <img src="<?php echo base_url() ?>/assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                    </a>
                    <div class="iq-menu-bt-sidebar">
                        <i class="las la-times wrapper-menu"></i>
                    </div>
                </div>

                <div class="data-scrollbar" data-scroll="1">
                    <div class="new-create select-dropdown input-prepend input-append">
                        <div class="btn-group">
                            <div data-toggle="dropdown">
                            <div class="search-query selet-caption"><i class="las la-plus pr-2"></i>Book a session</div><span class="search-replace"></span>
                            <span class="caret"></span>
                            </div>
                            <ul class="dropdown-menu">
                                <li><div class="item"><i class="ri-folder-add-line pr-3"></i>New Folder</div></li>
                                <li><div class="item"><i class="ri-file-upload-line pr-3"></i>Upload Files</div></li>
                                <li><div class="item"><i class="ri-folder-upload-line pr-3"></i>Upload Folders</div></li>
                            </ul>
                        </div>
                    </div>
                    <nav class="iq-sidebar-menu">
                        <ul id="iq-sidebar-toggle" class="iq-menu">
                            <li class="<?php if($title == 'Dashboard') echo 'active' ?>">
                                <a href="<?php echo base_url('user/dashboard') ?>" class="active">
                                    <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                                </a>
                            </li>

                            <li class="<?php if($title == 'Profile') echo 'active' ?>">
                                <a href="<?php echo base_url('user/profile') ?>" class="">
                                    <i class="lar la-file-alt iq-arrow-left"></i><span>Profile</span>
                                </a>
                            </li>

                            <li class="<?php if($title == 'Trainers') echo 'active' ?>">
                                <a href="<?php echo base_url('user/trainers') ?>" class="">
                                    <i class="lar la-file-alt iq-arrow-left"></i><span>Trainers</span>
                                </a>
                            </li>

                            <li class=" ">
                                <a href="#mydrive" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <i class="las la-hdd"></i><span>Session</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="mydrive" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                        <li class="<?php if($title == 'My Sessions') echo 'active' ?>">
                                                <a href="<?php echo base_url('user/my-sessions') ?>">
                                                    <i class="lab la-blogger-b"></i><span>My Sessions</span>
                                                </a>
                                        </li>
                                        <li class="<?php if($title == 'Book Session') echo 'active' ?>">
                                                <a href="<?php echo base_url('user/book-session') ?>">
                                                    <i class="las la-share-alt"></i><span>Book a session</span>
                                                </a>
                                        </li>
                                        <li class="<?php if($title == 'Available Sessions') echo 'active' ?>">
                                                <a href="<?php echo base_url('user/available-sessions') ?>">
                                                    <i class="las la-icons"></i><span>Available Sessions</span>
                                                </a>
                                        </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>

                    <div class="sidebar-bottom">
                        <a href="<?php echo base_url('user/auth/signout') ?>" class="btn btn-outline-danger btn-block mt-4">Logout</a>
                    </div>
                    <div class="p-3"></div>
                </div>

                </div>       <div class="iq-top-navbar d-flex align-items-center">
                <div class="iq-navbar-custom w-100">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                            <i class="ri-menu-line wrapper-menu"></i>
                            <a href="index.html" class="header-logo">
                                <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                    <li class="nav-item nav-icon dropdown caption-content">
                                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                            <div class="caption bg-primary line-height">P</div>
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton03">
                                            <div class="card mb-0">
                                                <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                                <div class="header-title">
                                                    <h4 class="card-title mb-0">Profile</h4>
                                                </div>
                                                <div class="close-data text-right badge badge-primary cursor-pointer "><i class="ri-close-fill"></i></div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="profile-header">
                                                        <div class="cover-container text-center">
                                                            <div class="rounded-circle profile-icon bg-primary mx-auto d-block">
                                                                P                                                    
                                                                <a href="">
                                                                    
                                                                </a>
                                                            </div>
                                                            <div class="profile-detail mt-3">
                                                            <h5><a href="../app/user-profile-edit.html">Panny Marco</a></h5>
                                                            <p>pannymarco@gmail.com</p>
                                                            </div>
                                                            <a href="auth-sign-in.html" class="btn btn-primary">Sign Out</a>
                                                        </div>
                                                        <div class="profile-details mt-4 pt-4 border-top">
                                                            <div class="">
                                                                <a href="#" class="iq-sub-card pt-0"><i class="ri-questionnaire-line"></i>Profile</a>
                                                                <a href="#" class="iq-sub-card"><i class="ri-recycle-line"></i>Change Password</a>
                                                                <a href="#" class="iq-sub-card"><i class="ri-refresh-line"></i>Logout</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>                     
                            </div> 
                        </div>
                    </nav>
                </div>
            </div>