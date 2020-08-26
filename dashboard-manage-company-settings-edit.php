<?php include 'header.php' ?>


        <!-- Begin page -->
        <div id="wrapper" class="dashboard-layout">

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



                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" style="padding: 0;">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search for anything ..." style="padding-right: 7px; padding-left: 7px;">

                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <div class="d-flex flex-direction-column justify-content-between height100">


                        <!--- Sidemenu -->
                        <div id="sidebar-menu">

                            <ul class="metismenu" id="side-menu">


                                <li>
                                    <a href="index.html">
                                        <i class="mdi mdi-view-dashboard"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <i class="mdi mdi-view-dashboard"></i>
                                        <span> Shipments </span>
                                        <span class="badge badge-Light float-right"> 4390 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <i class="mdi mdi-view-dashboard"></i>
                                        <span> Fleet Providers </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <i class="mdi mdi-view-dashboard"></i>
                                        <span> Reports </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="mdi mdi-layers"></i>
                                        <span> Manage </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="#">Recievers</a></li>
                                        <li><a href="#">Packages</a></li>
                                        <li><a href="#">Users</a></li>
                                        <li><a href="#">Company Settings</a></li>
                                        <li><a href="#">Notification Settings</a></li>

                                    </ul>
                                </li>
     
                            </ul>

                        </div>
                        <!-- End Sidebar -->

                        <div class="clearfix"></div>

                        <div class="sidebar-left-bottom text-center">
                            <a class="btn create-new-shipment" href="#"> <i class="fas fa-plus-circle"></i> Create New Shipment </a>

                            <hr>

                            <div class="powered-by text-left">
                                <img style="width:40px" class="img-fluid" src="assets/images/madar-icon-s.png">
                            </div>

                        </div>

                    </div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">


                        <h3 class="mb-3"> Company Settings </h3>
 
                                <div class="card-box">
                                    <div class="card-head mb-4">
                                            
                                        <div class="dropdown float-right">
                                            <a href="#"> <i class="fa fa-pen"></i> Edit </a>
                                        </div>

                                        <h4 class="header-title mt-0">Basic Information</h4>
     
                                    </div> <!-- card-head -->

                                    <form>

                                        <div class="company-logo-container mb-3">


                                                    <div class="profile-image form-group mb-2 ">
                                                        <div class="d-flex align-items-center justify-content-start col-md-6">    
                                                            <div class="mr-2">
                                                                <input type="file" class="dropify" data-height="40" />
                                                            </div>

                                                            <div>
                                                                <label style="display: block;"> Profile Picture </label>
                                                                <a class="btn btn-plus" href="#"> <i class="fas fa-plus-circle"></i> Add Profile Picture </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="row">
                                            
                                            <div class=" col one-info">
                                                <p> Company Name </p>
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" id="" placeholder="Company Name">
                                                </div> 

                                            </div>

                                            <div class=" col one-info">
                                                <p> Company Mobile Number </p>
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" id="" placeholder="Company Mobile Number">
                                                </div> 

                                            </div>

                                            <div class=" col one-info">
                                                <p> Company Email </p>
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" id="" placeholder="Company Email">
                                                </div> 
                                            </div>

                                        </div> <!-- row -->

                                        <div class="row">
                                            
                                            <div class=" col-md-4 one-info">
                                                <p> Commercial Registeration </p>
                                                <div class="form-group mb-2 text-center">
                                                    <input type="file" class="dropify" data-height="60"/>
                                                </div>

                                            </div>
                                        </div> <!-- row -->

                                        <hr class="mt-0">

                                        <div class="row">
                                            
                                            <div class=" col one-info mb-0">
                                                <p> Contact Name </p>
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" id="" placeholder="Company Email">
                                                </div> 
                                            </div>
                                            <div class=" col one-info mb-0">
                                                <p> Contact Mobile Number </p>
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" id="" placeholder="Company Email">
                                                </div> 
                                            </div>
                                            <div class=" col one-info mb-0">
                                            </div>
                                        </div> <!-- row -->

                                        <div class="d-flex align-items-center justify-content-between mt-3">
                                            <a class="btn btn-custom1" href="#"> Cancel </a>
                                            <a class="btn btn-primary" href="#"> Save </a>
                                        </div>


                                    </form>
                                </div> <!-- card-box -->



 
                                <div class="card-box">
                                    <div class="card-head mb-4">
                                            
                                        <div class="dropdown float-right">
                                            <a href="#"> <i class="fa fa-pen"></i> Edit </a>
                                        </div>

                                        <h4 class="header-title mt-0"> Logo & Colors </h4>
     
                                    </div> <!-- card-head -->

                                    <div class="row">
                                        
                                        <div class=" col one-info mb-0">
                                            <p> Logo </p>

                                                <div class="form-group mb-2 text-center">
                                                    <input type="file" class="dropify" data-height="70"/>
                                                </div>
                                        </div>

                                        <div class=" col one-info mb-0">
                                            <p> Color </p>


                                                <div class="choose-color">
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


                                        </div>

                                        <div class=" col one-info mb-0">
                                        </div>

                                    </div> <!-- row -->


                                        <div class="d-flex align-items-center justify-content-between mt-3">
                                            <a class="btn btn-custom1" href="#"> Cancel </a>
                                            <a class="btn btn-primary" href="#"> Save </a>
                                        </div>


                                </div> <!-- card-box -->


 


                                <div class="card-box">
                                    <div class="card-head mb-2">
                                            
                                        <div class="dropdown float-right">
                                            <a href="#"> <i class="fa fa-pen"></i> Edit </a>
                                        </div>

                                        <h4 class="header-title mt-0"> Locations </h4>
     
                                    </div> <!-- card-head -->

                                    <div class="row">
                                        



                                    <div class="map-content" style="width: 100%;">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218360.36364995778!2d29.814800765744582!3d31.224034935279008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c49126710fd3%3A0xb4e0cda629ee6bb9!2sAlexandria%2C%20Alexandria%20Governorate!5e0!3m2!1sen!2seg!4v1597709893741!5m2!1sen!2seg" width="100%" height="445" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        <div class="add-locations-tap">

                                            <input type="text" id="simpleinput" placeholder="search..." class="form-control" >

                                            <div class="full-data">

                                                <h4> <i style="color: #fcab31;" class="far fa-star"></i> Warehous 1 </h4>

                                                <div class="one-info">
                                                    <label> City: </label>
                                                    <p> Dammam </p>
                                                </div> <!-- one-info -->
                                                <div class="one-info">
                                                    <label> Long & Lat: </label>
                                                    <p> 26.4206828,50.0887943    </p>
                                                </div> <!-- one-info -->
                                                <div class="one-info">
                                                    <label> Address:  </label>
                                                    <p> 8033 Abdullah Ibn Nafi, As Sulimaniyah, Riyadh </p>
                                                </div> <!-- one-info -->


                                            </div>


                                            <div class="short-data">
                                                <h4> Pepsico </h4>
                                                <p> Supermarket・Dammam </p>
                                            </div>
                                            
                                        </div>
                                    </div>


                                    </div> <!-- row -->
                                </div> <!-- card-box -->


 




                        
                    </div> <!-- container -->

                </div> <!-- content -->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

<?php include 'footer.php' ?>