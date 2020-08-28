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
 
                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <h3 class="mb-2"> Dashboard </h3>    
                            <div class="btns">
                                 <div class="dropdown for-table notification-list" style="position: relative;">
                                    
                                    <a id="datepicker-autoclose" class="btn btn-state nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> Date: All time <i class="fa fa-chevron-down"></i> </a>
 
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-3">
                                <div class="card-box dashboard-card"> 
                                    <div class="one-block d-flex align-items-center justify-content-start">
                                        <div class="left">
                                            <div class="img-container" style="background: #eff2fc;">
                                                <img class="img-fluid" src="assets/images/icon-01.png">
                                            </div>
                                        </div>                                
                                        <div class="right">
                                            <label> Completed Shipments </label>
                                            <h4> 460</h4>
                                        </div>
                                    </div>
                                </div> <!-- card-box -->
                            </div> <!-- col-md-3 -->

                            <div class="col-md-3">
                                <div class="card-box dashboard-card"> 
                                    <div class="one-block d-flex align-items-center justify-content-start">
                                        <div class="left">
                                            <div class="img-container" style="background: #eff3fa;">
                                                <img class="img-fluid" src="assets/images/icon-02.png">
                                            </div>
                                        </div>                                
                                        <div class="right">
                                            <label> Running Shipments </label>
                                            <h4> 460</h4>
                                        </div>
                                    </div>
                                </div> <!-- card-box -->
                            </div> <!-- col-md-3 -->

                            <div class="col-md-3">
                                <div class="card-box dashboard-card"> 
                                    <div class="one-block d-flex align-items-center justify-content-start">
                                        <div class="left">
                                            <div class="img-container" style="background: #e1e4ea;">
                                                <img class="img-fluid" src="assets/images/icon-03.png">
                                            </div>
                                        </div>                                
                                        <div class="right">
                                            <label> Scheduled Shipments </label>
                                            <h4> 460</h4>
                                        </div>
                                    </div>
                                </div> <!-- card-box -->
                            </div> <!-- col-md-3 -->

                            <div class="col-md-3">
                                <div class="card-box dashboard-card"> 
                                    <div class="one-block d-flex align-items-center justify-content-start">
                                        <div class="left">
                                            <div class="img-container" style="background: #fffae6;">
                                                <img class="img-fluid" src="assets/images/icon-04.png">
                                            </div>
                                        </div>                                
                                        <div class="right">
                                            <label> Pending Shipments </label>
                                            <h4> 460</h4>
                                        </div>
                                    </div>
                                </div> <!-- card-box -->
                            </div> <!-- col-md-3 -->

                        </div> <!-- row --> 

                        <div class="d-flex justify-content-between align-items-start">

                            <div class="main-content d-flex  flex-direction-column" >


                                <div class="card-box dashboard-card width100"> 

                                    <div class="dropdown float-right">
                                        <a class="btn btn-state nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> Monthly <i class="fa fa-chevron-down"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                            <!-- item-->
                                            <a href="#" class="dropdown-item notify-item">
                                                <span> Today </span>
                                            </a>
     
                                        </div>
                                    </div>

                                    <h3 class="header-title mt-0 mb-0">   Optimization Rate </h3>
                                    <label style="font-size: 12px; margin-bottom: 0px;"> 2.5%+ than last month </label>

                                    <div class="chartjs-chart">
                                        <canvas id="lineChart" height="300"></canvas>
                                    </div> <!-- chartjs-chart -->
                                </div> <!-- card-box --> 


                                <div class="card-box dashboard-card width100"> 

                                    <div class="dropdown float-right">
                                        <a class="btn btn-state nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> Monthly <i class="fa fa-chevron-down"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                            <!-- item-->
                                            <a href="#" class="dropdown-item notify-item">
                                                <span> Today </span>
                                            </a>
     
                                        </div>
                                    </div>

                                    <h3 class="header-title mt-0 mb-0">   Optimization Rate </h3>
                                    <label style="font-size: 12px; margin-bottom: 0px;"> 2.5%+ than last month </label>

                                    <div class="chartjs-chart">
                                        <canvas id="lineChart" height="300"></canvas>
                                    </div> <!-- chartjs-chart -->
                                </div> <!-- card-box --> 
                            </div>

                            <div class="updates d-flex flex-direction-column">

                                <div class="card-box dashboard-card width100"> 


                                    <div class="updates-card-head d-flex align-items-center justify-content-between">

                                        <h3 class="header-title mt-0"> Latest Updates </h3>

                                        <div style="position: relative;">

                                            <a class="btn btn-state nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> Pending <i class="fa fa-chevron-down"></i> </a>

                                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                                <!-- item-->
                                                <a href="#" class="dropdown-item notify-item">
                                                    <span> Pending </span>
                                                </a>
         
                                            </div>
                                        </div>
                                    </div>

                                    <div class="all-updates">
                                        
                                        <div class="updates-card">
                                            <div class="updates-head d-flex align-items-start justify-content-between mb-2">
                                                <div>
                                                    <h5 class="m-0"> OB-10858・Single </h5>
                                                    <label> Ref No. 2326453 </label>
                                                </div>
                                                <label style="color: #8a8b8f;">  1:30 PM </label>
                                            </div>

                                            <ul class="updates-list">
                                                <li class="d-flex"> 
                                                    <div style="width: 10%">
                                                        <img src="assets/images/icon-05.png"> 
                                                    </div>
                                                    <div  style="width: 90%">
                                                        <a href="£"> Alshahd for Transportations · Fleet Provider 2  ·  Fleet Provider 3 </a> 
                                                    </div>
                                                </li>

                                                <li class="d-flex"> 
                                                    <div style="width: 10%">
                                                        <img src="assets/images/icon-05.png"> 
                                                    </div>
                                                    <div  style="width: 90%">
                                                        <a href="£"> Alshahd for Transportations · Fleet Provider 2  ·  Fleet Provider 3 </a>
                                                        <label> 8624, New Industrial City, Riyadh 14336, Saudi Arabia</label>
                                                    </div>
                                                </li>
 
  


                                                <li class="d-flex"> 
                                                    <div style="width: 10%">
                                                        <img src="assets/images/icon-05.png"> 
                                                    </div>
                                                    <div  style="width: 90%">
                                                        <a href="£"> Alshahd for Transportations · Fleet Provider 2  ·  Fleet Provider 3 </a>
                                                        <label> 8624, New Industrial City, Riyadh 14336, Saudi Arabia</label>
                                                    </div>
                                                </li>

                                            </ul>

                                        </div> <!-- updates-card -->
                                        

                                        <div class="updates-card">
                                            <div class="updates-head d-flex align-items-start justify-content-between mb-2">
                                                <div>
                                                    <h5 class="m-0"> OB-10858・Single </h5>
                                                    <label> Ref No. 2326453 </label>
                                                </div>
                                                <label style="color: #8a8b8f;">  1:30 PM </label>
                                            </div>

                                            <ul class="updates-list">
                                                <li class="d-flex"> 
                                                    <div style="width: 10%">
                                                        <img src="assets/images/icon-05.png"> 
                                                    </div>
                                                    <div  style="width: 90%">
                                                        <a href="£"> Alshahd for Transportations · Fleet Provider 2  ·  Fleet Provider 3 </a> 
                                                    </div>
                                                </li>

                                                <li class="d-flex"> 
                                                    <div style="width: 10%">
                                                        <img src="assets/images/icon-05.png"> 
                                                    </div>
                                                    <div  style="width: 90%">
                                                        <a href="£"> Alshahd for Transportations · Fleet Provider 2  ·  Fleet Provider 3 </a>
                                                        <label> 8624, New Industrial City, Riyadh 14336, Saudi Arabia</label>
                                                    </div>
                                                </li>

                                                <li class="d-flex"> 
                                                    <div style="width: 10%">
                                                        <img src="assets/images/icon-05.png"> 
                                                    </div>
                                                    <div  style="width: 90%">
                                                        <a href="£"> Alshahd for Transportations · Fleet Provider 2  ·  Fleet Provider 3 </a>
                                                        <label> 8624, New Industrial City, Riyadh 14336, Saudi Arabia</label>
                                                    </div>
                                                </li>
 

                                            </ul>

                                        </div> <!-- updates-card -->
                                        
                                    </div> <!-- all-updates -->


                                </div> <!-- card-box -->  
                            </div>
                        </div> <!-- d-flex -->
                       
                    </div> <!-- container -->
                </div> <!-- content -->
            </div> <!-- content-page -->

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

<?php include 'footer.php' ?>