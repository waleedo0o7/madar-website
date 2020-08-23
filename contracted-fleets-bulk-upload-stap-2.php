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


                            <div class="col-md-8 col-xs-12" style="margin: auto;">


                                <div class="card-box info-box company-info-content" style="min-height: unset;
    height: auto;">

                                    <div style="height: 100%;" class="d-flex flex-direction-column justify-content-between">

                                        <div class="recievers-bulk-upload">

                                            <a href="#" class="mb-3" style="color: #000"> <i class="fa fa-chevron-left"></i> Back </a>
                                            <h4>  Bulk Upload Fleets  </h4>

                                            <div class="company-info-stepper-section">
                                                    
                                                <div class="company-info-stepper-container mb-2">
                                                    <div class="company-info-stepper html" style="width: 100%"> </div>
                                                </div>

                                                <div class="text-right" style="margin-bottom: -25px;">
                                                    <a style="color:#888"> 2 / 2 </a>
                                                </div>

                                            </div>

                                            <h5 class="mb-1"> 2. Directions </h5>

                                            <div class="row">
                                                <div class="col">



                                                    <div class="info-box">
                                                        <h5> Trip 1 direction </h5>

                                                        <form>

                                                                <div class="form-row">

                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4" class="col-form-label"> Contract From </label>
                                                                        <input type="text" class="form-control" id="" placeholder="Place">
                                                                    </div> 

                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4" class="col-form-label"> To </label>
                                                                        <input type="text" class="form-control" id="" placeholder="Place">
                                                                    </div>

                                                                </div> <!-- form-row -->


                                                                <div class="form-row">

                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4" class="col-form-label"> Distance </label>
                                                                        <div style="position: relative;">
                                                                            <input type="text" class="form-control" id="" placeholder="Enter the distance here">
                                                                            <span style=" position: absolute; top: 9px; right: 10px; color: #b7b7b7;"> KG </span>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group col-md-6"></div>

                                                                </div> <!-- form-row -->


                                                                <div class="form-row">

                                                                    <div class="form-group col-md-12" style="margin: 0;">
                                                                        <label for="inputEmail4" class="col-form-label"> Price </label>
                                                                    </div>

                                                                    <div class="form-group col-md-6">

                                                                        <div class="custom-control custom-radio ">
                                                                            <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input">
                                                                            <label class="custom-control-label" for="customRadio1">Plans based on truck type </label>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="customRadio2" name="customRadio1" class="custom-control-input">
                                                                            <label class="custom-control-label" for="customRadio2"> Fixed Price </label>
                                                                        </div>
                                                                    </div>
                                                                </div>





                                                                <div class="form-row">

                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4" class="col-form-label"> Truck Type </label> 



                                                                        <select class="form-control select2 select2-multiple" multiple="multiple" multiple data-placeholder="Choose ..."> 
                                                                            <option value="AK">Tanker </option>
                                                                            <option value="AK">Tanker 1</option>
                                                                            <option value="AK">Tanker 2</option>
                                                                        </select>



                                                                    </div> 


                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4" class="col-form-label"> Price </label>
                                                                        <div style="position: relative;">
                                                                            <input type="text" class="form-control" id="" placeholder="No.">
                                                                            <span style=" position: absolute; top: 9px; right: 10px; color: #b7b7b7;"> SAR </span>
                                                                        </div>

                                                                    </div>

                                                                </div> <!-- form-row -->


                                                                <div class="form-group mb-2 text-center mt-3">
                                                                    <input type="file" class="dropify" data-height="90" />
                                                                </div>
                                                                <a class="btn btn-plus" href="#"> <i class="fas fa-plus-circle"></i> Add Another Direction </a>


                                                        </form>

                                                    </div>




                                                    <div class="d-flex align-items-center justify-content-between mt-3">
                                                        <a class="btn btn-custom1" href="#"> Cancel </a>
                                                        <a class="btn btn-primary" href="#"> Next </a>
                                                    </div>


                                                </div> <!-- col -->
                                            </div> <!-- row -->


 
 


                                        </div>

 
                                        </div>

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