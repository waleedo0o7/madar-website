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
                            <h3 class="mb-3"> All Fleet Providers </h3>    
                        </div>


                        <div class="card-box">
                            <div class="card-head mb-3 d-flex align-items-center justify-content-between">
                                    
                                <h4 class="header-title mt-0">Top Ten Fleets</h4>

                                <div class="dropdown ">
                                   <div class="d-flex align-items-center justify-content-end">
                                        <a class="btn btn-custom1" href="#"> Top Ten Price </a>
                                        <a class="btn btn-light2" href="#"> Top Ten Quality </a>
                                    </div>
                                </div>

                            </div> <!-- card-head -->


                            <div class="row cards">
                                <div class="col-md-3">
                                    <div class="one-card">                                    
                                        <h4> Emmalynn Mazzia </h4>
                                        <p> No. Shipments: <small> 78962 </small> </p>
                                        <p> Truck Types: <small> Trailer, Flat bed  </small> <span class="badge badge-custom"> +3 </span> </p>
                                        <p> Areas Covered: <small> Gadah, Riyadh </small> </p>
                                        <p class="label-number"> 01 </p>
                                    </div> <!-- one-card -->
                                </div> <!-- col -->
                                <div class="col-md-3">
                                    <div class="one-card">                                    
                                        <h4> Emmalynn Mazzia </h4>
                                        <p> No. Shipments: <small> 78962 </small> </p>
                                        <p> Truck Types: <small> Trailer, Flat bed  </small> <span class="badge badge-custom"> +3 </span> </p>
                                        <p> Areas Covered: <small> Gadah, Riyadh </small> </p>
                                        <p class="label-number"> 02 </p>
                                    </div> <!-- one-card -->
                                </div> <!-- col -->
                                <div class="col-md-3">
                                    <div class="one-card">                                    
                                        <h4> Emmalynn Mazzia </h4>
                                        <p> No. Shipments: <small> 78962 </small> </p>
                                        <p> Truck Types: <small> Trailer, Flat bed  </small> <span class="badge badge-custom"> +3 </span> </p>
                                        <p> Areas Covered: <small> Gadah, Riyadh </small> </p>
                                        <p class="label-number"> 03 </p>
                                    </div> <!-- one-card -->
                                </div> <!-- col -->
                                <div class="col-md-3">
                                    <div class="one-card">                                    
                                        <h4> Emmalynn Mazzia </h4>
                                        <p> No. Shipments: <small> 78962 </small> </p>
                                        <p> Truck Types: <small> Trailer, Flat bed  </small> <span class="badge badge-custom"> +3 </span> </p>
                                        <p> Areas Covered: <small> Gadah, Riyadh </small> </p>
                                        <p class="label-number"> 04 </p>
                                    </div> <!-- one-card -->
                                </div> <!-- col -->
                            </div> <!-- row cards -->
                         
                        </div>


                        <ul class="nav nav-pills nav-fill mb-3" id="myTab" role="tablist" style="border-radius: 4px;overflow: hidden;">

                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> My Fleets <span class="badge badge-custom"> +3 </span> </a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> Public Fleets <span class="badge badge-custom"> +3 </span> </a>
                          </li>
                        </ul>

                        <div class="tab-content" id="myTabContent"  style="padding: 0px;border:unset;">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="row">

                                <div class="col-md-8">
                                    <div class="card-box padding0">

                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th> Company Name </th>
                                                    <th> No. Shipments </th>
                                                    <th> Compliance </th>
                                                    <th> Fulfilment </th>
                                                    <th> ... </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                        
                                                    <tr> 
                                                        <td> Olivia Eklund Chibuzo </td>
                                                        <td> 45677 </td>
                                                        <td> 100 % </td> 
                                                        <td> 80 % </td>  
                                                        <td> <a href="#"> View </a> </td>  
                                                    </tr>

                                                    <tr> 
                                                        <td> Olivia Eklund Chibuzo </td>
                                                        <td> 45677 </td>
                                                        <td> 100 % </td> 
                                                        <td> 80 % </td>  
                                                        <td> <a href="#"> View </a> </td>  
                                                    </tr>

                                                    <tr> 
                                                        <td> Olivia Eklund Chibuzo </td>
                                                        <td> 45677 </td>
                                                        <td> 100 % </td> 
                                                        <td> 80 % </td>  
                                                        <td> <a href="#"> View </a> </td>  
                                                    </tr>
                                                    <tr> 
                                                        <td> Olivia Eklund Chibuzo </td>
                                                        <td> 45677 </td>
                                                        <td> 100 % </td> 
                                                        <td> 80 % </td>  
                                                        <td> <a href="#"> View </a> </td>  
                                                    </tr>
                                                    <tr> 
                                                        <td> Olivia Eklund Chibuzo </td>
                                                        <td> 45677 </td>
                                                        <td> 100 % </td> 
                                                        <td> 80 % </td>  
                                                        <td> <a href="#"> View </a> </td>  
                                                    </tr>
                                                    <tr> 
                                                        <td> Olivia Eklund Chibuzo </td>
                                                        <td> 45677 </td>
                                                        <td> 100 % </td> 
                                                        <td> 80 % </td>  
                                                        <td> <a href="#"> View </a> </td>  
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div> <!-- card-box -->
                                </div>

                                <div class="col-md-4">
                                    <div class="card-box" style="border: 1px solid #e4e9f3;"> 
                                        <h4> Transactions details </h4>


                                        <div class="chartjs-chart">
                                            <canvas id="doughnut" height="250"></canvas>
                                        </div>


                                    </div>
                                </div>
                            </div>


                          </div> <!-- tab-pane -->
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-box padding0"> 

                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th> Company Name </th>
                                                    <th> No. Shipments </th>
                                                    <th> Drivers </th>
                                                    <th> Truck Types </th>
                                                    <th> Coverd Places </th>
                                                    <th> Range Amount  </th>
                                                    <th> ... </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                        
                                                    <tr> 
                                                        <td> Chigusa Kisa </td>
                                                        <td> 45677 </td>
                                                        <td> 3214 </td> 
                                                        <td> Trailer, Flat bed <span class="badge badge-custom"> +3 </span>   </td>  
                                                        <td> Geddah, Riydah </td>  
                                                        <td> 1000 : 2000 SR </td>  
                                                        <td> <a href="#"> Contact </a> </td>  
                                                    </tr>



                                                </tbody>
                                            </table>
                                        </div>

                                    </div> <!-- card-box -->
                                </div>
                            </div>


                          </div>
                        </div>
                        
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