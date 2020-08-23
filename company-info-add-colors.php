<?php include 'header.php' ?>

        <!-- Begin page -->
        <div id="wrapper" class="stepper-layout">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
        
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">1 min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-secondary">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                Nowak <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="#" class="logo text-center">
                        <span class="logo-lg">
                            <img src="assets/images/madar-logo.svg" alt="" height="16">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                </ul>
            </div>
            <!-- end Topbar -->



            <div class="alert alert-warning alert-dismissible account-not-verified">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <img style="width: 25px; margin-top: -5px;" class="img-fluid" src="assets/images/save.svg"> Your account hasn’t been verified yet. please wait we will contact you soon.
            </div>


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container">


                        <div class="row">

                            <div class="col-md-3 col-xs-12">
                                <div class="card-box stepper-box">
                                    <a href="#" class="mb-3" style="color: #000"> <i class="fa fa-chevron-left"></i> Skip </a>
                                    <div class="stepper">

                                        <svg id="animated" viewbox="-10 0 120 100">

                                          <circle cx="50" cy="50" r="45" fill="#FFF"/>

                                          <path id="" stroke-linecap="round" stroke-width="5" stroke="#eff3fb" fill="none"
                                                d="M50 10
                                                   a 40 40 0 0 1 0 80
                                                   a 40 40 0 0 1 0 -80">
                                          </path>

                                          <path id="progress" stroke-linecap="round" stroke-width="5" stroke="#36b37e" fill="none"
                                                d="M50 10
                                                   a 40 40 0 0 1 0 80
                                                   a 40 40 0 0 1 0 -80">
                                          </path>

                                          <text id="count" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100%</text>

                                        </svg>


                                    </div>

                                    <h4 class="text-center mb-4"> Company Setup </h4>

                                    <div class="steps-menu">
 
                                            <div class="custom-control custom-radio mb-3">
                                                <input checked="checked" type="radio" id="customRadio1" name="customRadio1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Company Info</label>
                                                <span> Company locations, brand colors and logo settings. </span>
                                            </div>


                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="customRadio2" name="customRadio2" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2"> Recievers </label>
                                                <span> Add receivers data for your shipments. </span>
                                            </div>


                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="customRadio3" name="customRadio3" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3"> Packages </label>
                                                <span> Add your company packages and sizes. </span>
                                            </div>


                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="customRadio4" name="customRadio4" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio4"> Contracted Fleets </label>
                                                <span> Add all fleets you have contracted with. </span>
                                            </div>


                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio5" name="customRadio5" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio5"> Users </label>
                                                <span> Add your partners with privileges for everyone. </span>
                                            </div>

                                    </div>


                                </div> <!-- card-box -->
                            </div> <!-- col-md-3 col-xs-12 -->


                            <div class="col-md-9 col-xs-12">
                                <div class="card-box info-box company-info-content">

                                    <a href="#" class="mb-3" style="color: #000"> <i class="fa fa-chevron-left"></i> Back </a>
                                    <h4> Company Info </h4>

                                    <div class="company-info-stepper-container mb-2">
                                        <div class="company-info-stepper html" style="width: 100%"> </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <a class="add-location mb-3" href="#"> <i class="fas fa-palette"></i> Logo & Colors </a>
                                        <a style="color:#888"> 2 / 2</a>

                                    </div>

                                    <div class="colors-content">

                                        <div class="row">

                                            <div class="col-md-6 col-xs-12">

                                                <div class="upload-logo mb-5">
                                                    <h4> Upload your Logo </h4>
                                                    <div class="form-group mb-2 text-center">
                                                        <input type="file" class="dropify" data-height="40" />
                                                    </div>
                                                </div> <!-- upload-logo -->

                                                <div class="choose-color">
                                                    <h4> Choose a Color Theme </h4>
                                                    <p> Select a theme that fits well with your brand to help you  feel more at home. </p>

                                                    <div class="all-colors d-flex align-items-center">

                                                        <div class="one-color main-color" style="background-color: #01579b"></div>

                                                        <div class="child-colors d-flex align-items-center">

                                                            <div class="one-color" style="background-color: #689f38"></div>
                                                            <div class="one-color" style="background-color: #43a047"></div>
                                                            <div class="one-color" style="background-color: #009688"></div>
                                                            <div class="one-color" style="background-color: #0288d1"></div>
                                                            <div class="one-color" style="background-color: #3f51b5"></div>
                                                            <div class="one-color" style="background-color: #673ab7"></div>
                                                            <div class="one-color" style="background-color: #ab47bc"></div>
                                                            <div class="one-color" style="background-color: #ff1744"></div>
                                                            <div class="one-color" style="background-color: #e65100"></div>

                                                            <div class="one-color" style="background-color: #558b2f"></div>
                                                            <div class="one-color" style="background-color: #388e3c"></div>
                                                            <div class="one-color" style="background-color: #00796b"></div>
                                                            <div class="one-color" style="background-color: #0277bd"></div>
                                                            <div class="one-color" style="background-color: #303f9f"></div>
                                                            <div class="one-color" style="background-color: #512da8"></div>
                                                            <div class="one-color" style="background-color: #8e24aa"></div>
                                                            <div class="one-color" style="background-color: #d32f2f"></div>
                                                            <div class="one-color" style="background-color: #6d4c41"></div>

                                                            <div class="one-color" style="background-color: #33691e"></div>
                                                            <div class="one-color" style="background-color: #1b5e20"></div>
                                                            <div class="one-color" style="background-color: #004d40"></div>
                                                            <div class="one-color" style="background-color: #01579b"></div>
                                                            <div class="one-color" style="background-color: #1a237e"></div>
                                                            <div class="one-color" style="background-color: #311b92"></div>
                                                            <div class="one-color" style="background-color: #6a1b9a"></div>
                                                            <div class="one-color" style="background-color: #b71c1c"></div>
                                                            <div class="one-color" style="background-color: #f57f17"></div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div> <!-- col-md-6 -->

                                            <div class="col-md-6 col-xs-12">

                                                <div class="tips">
                                                    <p> <i class="fas fa-info-circle"></i> Tips to make sure your logo looks great </p>
                                                    <img style="max-height: 160px; margin: auto; display: block;" class="img-fluid mb-3" src="assets/images/tips.png">

                                                    <p class="mb-3"> Make sure your logo has a transparent background.</p>

                                                    <p class="mb-3"> Avoid using a white (reversed out) version of your logo. </p>

                                                    <p class="mb-3"> A horizontal version of your logo is preferable if available. </p>

                                                </div> <!-- tips -->
                                            </div> <!-- col-md-6 -->
                                        </div> <!-- row -->


                                    </div> <!-- colors-content -->

                                    <div class="d-flex align-items-center justify-content-between mt-3">
                                        <a style="color:#2f5cbd" class="btn" href="#"> Skip </a>
                                        <a class="btn btn-primary" href="#"> Next </a>
                                    </div>

                                </div> <!-- card-box -->
                            </div> <!-- col-md-3 col-xs-12 -->

                        </div> <!-- row -->



                    </div> <!-- container -->

                </div> <!-- content -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->



        </div>
        <!-- END wrapper -->

<?php include 'footer.php' ?>