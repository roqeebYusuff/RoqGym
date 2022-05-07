<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-transparent ">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <div class="header-title">
                            <h4 class="card-title">Overview</h4>
                        </div>
                        <div class="dashboard1-dropdown d-flex align-items-center">
                            <div class="dashboard1-info">
                                <a href="#calander" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul id="calander" class="iq-dropdown collapse list-inline m-0 p-0 mt-2">
                                    <li class="mb-2">
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Calander"><i
                                                class="las la-calendar iq-arrow-left"></i></a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Keep"><i
                                                class="las la-lightbulb iq-arrow-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Tasks"><i
                                                class="las la-tasks iq-arrow-left"></i></a>
                                    </li>                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-block card-stretch card-height iq-welcome" style="background: url(../assets/images/layouts/mydrive/background.png) no-repeat scroll right center; background-color: #ffffff; background-size: contain;">
                    <div class="card-body property2-content">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="col-lg-6 col-sm-6 p-0">
                                <h3 class="mb-3">Welcome <?php echo ucfirst($user->firstname) ?></h3>
                                <p class="mb-5">You have 32 new notifications and 23 unread messages to reply</p>
                                <a href="#">Check Now<i class="las la-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-block card-stretch card-height  plan-bg">
                    <div class="card-body">
                        <h4 class="mb-3 text-white">Unlock Your plan</h4>    
                        <p>Expanded Storage, Access To<br> More Features On CloudBOX</p>   
                        <div class="row align-items-center justify-content-between">
                        <div class="col-6 go-white ">
                            <a href="#" class="btn d-inline-block mt-5">Go Premium</a>
                        </div>
                            <div class="col-6">
                                <img src="../assets/images/layouts/mydrive/lock-bg.png" class="img-fluid" alt="image1">
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>  

            <div class="col-lg-12">
                <div class="card card-block card-stretch card-transparent ">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <div class="header-title">
                            <h4 class="card-title">My sessions</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <a href="<?php echo base_url('user/mysession') ?>" class=" view-more">View All</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <a href="#" data-title="Terms.pdf" data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="../assets/images/layouts/page-1/pdf.png" class="img-fluid" alt="image1">       
                            </div>
                            <h6>Terms.pdf</h6> 
                        </a>             
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <a href="#" data-title="New-one.docx" data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.docx" data-toggle="modal" data-target="#exampleModal">
                        <div class="mb-4 text-center p-3 rounded iq-thumb">
                            <div class="iq-image-overlay"></div>
                            <img src="../assets/images/layouts/page-1/doc.png" class="img-fluid" alt="image1">
                        </div>
                        <h6>New-one.docx</h6>  
                        </a>   
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <a href="#" data-title="Woo-box.xlsx" data-load-file="file" data-load-target="#resolte-contaniner"  data-url="../assets/vendor/doc-viewer/files/demo.xlsx" data-toggle="modal" data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="../assets/images/layouts/page-1/xlsx.png" class="img-fluid" alt="image1">
                            </div>
                            <h6>Woo-box.xlsx</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb doc-text">
                        <a href="#" data-title="IOS-content.pptx" data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.pptx" data-toggle="modal" data-target="#exampleModal">
                        <div class="mb-4 text-center p-3 rounded iq-thumb">
                            <div class="iq-image-overlay"></div>
                            <img src="../assets/images/layouts/page-1/ppt.png" class="img-fluid" alt="image1">      
                        </div>
                        <h6>IOS-content.pptx</h6>   
                        </a>       
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card card-block card-stretch card-transparent">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <div class="header-title">
                            <h4 class="card-title">Top Trainers</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle dropdown-bg btn bg-white" id="dropdownMenuButton1"
                                    data-toggle="dropdown">
                                    Name<i class="ri-arrow-down-s-line ml-1"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right shadow-none"
                                    aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Last modified</a>
                                    <a class="dropdown-item" href="#">Last modifiedby me</a>
                                    <a class="dropdown-item" href="#">Last opened by me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="trainer-slick">
                            <div class="single-trainer">
                                <div class="image">
                                    <img class="img-fluid" src="<?php echo base_url() ?>/assets/images/user/02.jpg" alt="">
                                </div>
                                <h4 class="name">Bilal Gibson</h4>
                                <div class="action">
                                    <a href="#" class="btn btn-dark">Book</a>
                                </div>
                            </div>

                            <div class="single-trainer">
                                <div class="image">
                                    <img class="img-fluid" src="<?php echo base_url() ?>/assets/images/user/02.jpg" alt="">
                                </div>
                                <h4 class="name">Bilal Gibson</h4>
                                <div class="action">
                                    <a href="#" class="btn btn-dark">Book</a>
                                </div>
                            </div>

                            <div class="single-trainer">
                                <div class="image">
                                    <img class="img-fluid" src="<?php echo base_url() ?>/assets/images/user/02.jpg" alt="">
                                </div>
                                <h4 class="name">Bilal Gibson</h4>
                                <div class="action">
                                    <a href="#" class="btn btn-dark">Book</a>
                                </div>
                            </div>

                            <div class="single-trainer">
                                <div class="image">
                                    <img class="img-fluid" src="<?php echo base_url() ?>/assets/images/user/02.jpg" alt="">
                                </div>
                                <h4 class="name">Bilal Gibson</h4>
                                <div class="action">
                                    <a href="#" class="btn btn-dark">Book</a>
                                </div>
                            </div>

                            <div class="single-trainer">
                                <div class="image">
                                    <img class="img-fluid" src="<?php echo base_url() ?>/assets/images/user/02.jpg" alt="">
                                </div>
                                <h4 class="name">Bilal Gibson</h4>
                                <div class="action">
                                    <a href="#" class="btn btn-dark">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card card-block card-stretch card-transparent">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <div class="header-title">
                            <h4 class="card-title">Upcoming Classes</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>