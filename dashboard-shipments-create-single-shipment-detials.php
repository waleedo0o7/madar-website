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


                <div class="alert alert-warning alert-dismissible account-not-verified" style="position: relative;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <img style="width: 25px; margin-top: -5px;" class="img-fluid" src="assets/images/save.svg"> All contracts had been rejected. <a href="#"> Reassign new fleets </a>
                </div>




                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <h3 class="mb-3"> #10858 - OB </h3> 
                            <a class="btn btn-custom1" href="#"> Edit Shipment </a> 
                        </div>


                        <div class="card-box">
                            <div class="card-head mb-3 d-flex align-items-center justify-content-between">
                                    
                                <h4 class="header-title mt-0">Basic Information</h4>

                                <div class="dropdown ">
                                   <div class="d-flex align-items-center justify-content-end">
                                        <div class="badge badge-custom2 badge-pending">  Awaiting For Fleet Approval  </div>
                                    </div>
                                </div>

                            </div> <!-- card-head -->

                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0"> Package Name </p>
                                    <label class="bold"> #10858 - OB </label>
                                </div>
                                <div class="col">
                                    <p class="m-0"> Target Delivery Date </p>
                                    <label class="bold"> 2/5/2020 </label>
                                </div>
                                <div class="col">
                                    <p class="m-0"> Target Delivery Time </p>
                                    <label class="bold"> 4:30 PM </label>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="m-0"> Pickup Location </p>
                                    <label class="bold"> 8624, New Industrial City, Riyadh 14336, Saudi Arabia </label>
                                </div>
                            </div> <!-- row -->

                        </div> <!-- card-box -->
 

                        <div class="card-box">
                            <div class="card-head mb-3 d-flex align-items-center justify-content-between">
                                    
                                <h4 class="header-title mt-0"> Reciever Information </h4>

                                <div class="dropdown ">
                                   <div class="d-flex align-items-center justify-content-end">
 
                                    </div>
                                </div>

                            </div> <!-- card-head -->

                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0"> Reciever Company </p>
                                    <label class="bold"> Tremoloo </label>
                                </div>
                                <div class="col">
                                    <p class="m-0"> Reciever Name </p>
                                    <label class="bold"> Abdelrahman </label>
                                </div>
                                <div class="col">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="m-0"> Drop-off Location </p>
                                    <label class="bold"> 8624, New Industrial City, Riyadh 14336, Saudi Arabia </label>
                                </div>
                            </div> <!-- row -->

                        </div> <!-- card-box -->
 


                        <div class="card-box">
                            <div class="card-head mb-3 d-flex align-items-center justify-content-between">
                                    
                                <h4 class="header-title mt-0"> Choosen Fleet Providers</h4>

                                <div class="dropdown ">
                                   <div class="d-flex align-items-center justify-content-end">
                                    <a class="btn btn-primary" href="#"> Reassign New Fleets </a> 
                                    </div>
                                </div>

                            </div> <!-- card-head -->

                            <div class="fleet-providers">

                                <div class="one-result">
                                    <div class="d-flex justify-content-between">
                                        <h4> Christopher Walker  </h4>
                                        <div class="badge badge-custom2 badge-rejected">  Rejected  </div>
                                    </div> <!-- d-flex -->
                                    <div class="states">
                                            <p class="one-state"> Compliance   : <span class="blue bold">  99.7% </span> </p>
                                            <p class="one-state"> Fulfillment  : <span class="green bold">  99.7% </span> </p>
                                            <p class="one-state"> Transactions : <span class="black bold">  99.7% </span> </p>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <p> <i class="fa fa-map-marker-alt"></i> 568 Francisco River</p>
                                        <p class="primary bold"> 700 SAR </p>
                                        
                                    </div>
                                </div> <!-- one-result -->
                                 
                                <div class="one-result">
                                    <div class="d-flex justify-content-between">
                                        <h4> Christopher Walker  </h4> 
                                        <div class="badge badge-custom2 badge-rejected">  Rejected  </div>
                                    </div> <!-- d-flex -->
                                    <div class="states">
                                            <p class="one-state"> Compliance   : <span class="blue bold">  99.7% </span> </p>
                                            <p class="one-state"> Fulfillment  : <span class="green bold">  99.7% </span> </p>
                                            <p class="one-state"> Transactions : <span class="black bold">  99.7% </span> </p>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <p> <i class="fa fa-map-marker-alt"></i> 568 Francisco River</p>
                                        <p class="primary bold"> 700 SAR </p>
                                        
                                    </div>
                                </div> <!-- one-result -->
                                 
                                <div class="one-result">
                                    <div class="d-flex justify-content-between">
                                        <h4> Christopher Walker  </h4> 
                                        <div class="badge badge-custom2 badge-rejected">  Rejected  </div>
                                    </div> <!-- d-flex -->
                                    <div class="states">
                                            <p class="one-state"> Compliance   : <span class="blue bold">  99.7% </span> </p>
                                            <p class="one-state"> Fulfillment  : <span class="green bold">  99.7% </span> </p>
                                            <p class="one-state"> Transactions : <span class="black bold">  99.7% </span> </p>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <p> <i class="fa fa-map-marker-alt"></i> 568 Francisco River</p>
                                        <p class="primary bold"> 700 SAR </p>
                                    </div>
                                </div> <!-- one-result -->
                                 

                            </div>

                        </div> <!-- card-box -->


                        <div class="card-box">
                            <div class="card-head mb-3 d-flex align-items-center justify-content-between">
                                    
                                <h4 class="header-title mt-0"> Packages </h4>

                                <div class="">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0"> Total Volume  </p>
                                    <label class="bold"> 12345 M2</label>
                                </div>
                                <div class="col">
                                    <p class="m-0"> Total Weight </p>
                                    <label class="bold"> 12345 KG </label>
                                </div>
                                <div class="col">
                                </div>
                                
                            </div>

                            <div class="packages">
                                <div class="one-package">
                                    <h4> Package Name 1 </h4>

                                    <div class="row mb-1">
                                        <div class="col">
                                            <p class="m-0"> Package Type  </p>
                                            <label class="bold"> Plastic 501 </label>
                                        </div>
                                        <div class="col">
                                            <p class="m-0"> Quantity </p>
                                            <label class="bold"> 3500 PCS  </label>
                                        </div>
                                        <div class="col">
                                            <p class="m-0"> Weight </p>
                                            <label class="bold"> 200 KG  </label>
                                        </div>
                                    </div> <!-- row mb-2 -->

                                    <div class="row mb-1">
                                        <div class="col">
                                            <p class="m-0"> Length  </p>
                                            <label class="bold"> 40 CM </label>
                                        </div>
                                        <div class="col">
                                            <p class="m-0"> Width </p>
                                            <label class="bold"> 3500 PCS  </label>
                                        </div>
                                        <div class="col">
                                            <p class="m-0"> Height </p>
                                            <label class="bold"> 15 CM  </label>
                                        </div>
                                    </div> <!-- row mb-2 -->

                                </div> <!-- one-package -->



                                <div class="one-package">
                                    <h4> Package Name 1 </h4>

                                    <div class="row mb-1">
                                        <div class="col">
                                            <p class="m-0"> Package Type  </p>
                                            <label class="bold"> Plastic 501 </label>
                                        </div>
                                        <div class="col">
                                            <p class="m-0"> Quantity </p>
                                            <label class="bold"> 3500 PCS  </label>
                                        </div>
                                        <div class="col">
                                            <p class="m-0"> Weight </p>
                                            <label class="bold"> 200 KG  </label>
                                        </div>
                                    </div> <!-- row mb-2 -->

                                    <div class="row mb-1">
                                        <div class="col">
                                            <p class="m-0"> Length  </p>
                                            <label class="bold"> 40 CM </label>
                                        </div>
                                        <div class="col">
                                            <p class="m-0"> Width </p>
                                            <label class="bold"> 3500 PCS  </label>
                                        </div>
                                        <div class="col">
                                            <p class="m-0"> Height </p>
                                            <label class="bold"> 15 CM  </label>
                                        </div>
                                    </div> <!-- row mb-2 -->

                                </div> <!-- one-package -->






                            </div> <!-- packages -->
                        </div> <!-- card-head -->


                        </div> <!-- card-box -->

                    </div> <!-- container -->

                </div> <!-- content --> 

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

                            <!-- خخخخخخخخخخ Start -->
                            <canvas style="display: none;" id="lineChart" height="300"></canvas> 
                            <!-- خخخخخخخخخخ END -->

<?php include 'footer.php' ?>