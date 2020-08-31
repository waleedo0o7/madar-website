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
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span> My Profile </span>
                            </a>

                            <!-- item-->
                            <a href="#contact-support" class="dropdown-item notify-item" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#36404a">
                                <i class="fe-settings"></i>
                                <span> Contact Support </span>
                            </a>
 
 
                            <!-- Modal -->
                            <div id="contact-support" class="modal-demo bs-example-modal-sm">
                                <button type="button" class="close" onclick="Custombox.modal.close();">
                                    <span>&times;</span><span class="sr-only">Close</span>
                                </button>
                                <h4 class="custom-modal-title"> Contact Support </h4>
                                <div class="custom-modal-text">

                                    <form>

                                        <div class="form-group">
                                            <p> Choose issue topic </p>
                                            <select class="form-control select2">
                                                <option> Issue here </option>
                                                <option value="CT">option1</option>
                                                <option value="DE">option2</option>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <textarea placeholder="Type your issue description here…" class="form-control" rows="5" id="example-textarea"></textarea>
                                        </div> 

                                    </form>

                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <a style="color:#2f5cbd" class="btn btn-custom1" href="#"> Cancel </a>
                                        <a class="btn btn-primary" href="#"> Send </a>
                                    </div>

                                </div>
                            </div>



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

                    <div class="container-fluid shipments-list-page">

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <h3 class="mb-2"> Create Single Shipment </h3>    
                        </div>

                        <div class="row">
                            <div class="col-md-3">
 
                                <div class="card-box stepper-box" style="margin: 0;min-height: 590px;">
                                    <div class="stepper">

                                        <svg id="animated" viewbox="-25 0 150 100">

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

                                    <h4 class="text-center mb-3"> New Shipment </h4>

                                    <div class="steps-menu">
 
                                            <div class="custom-control custom-radio mb-2">
                                                <input checked="checked" type="radio" id="customRadio1" name="customRadio1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1"> Basic Information </label>
                                                <span>  Shipment name, Pickup Dates and locations.  </span>
                                            </div>


                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="customRadio2" name="customRadio2" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2"> Shipment Information </label>
                                                <span> Add package for shipments, weights, quantity and sizes. </span>
                                            </div>


                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="customRadio3" name="customRadio3" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3"> Receiver Information </label>
                                                <span> Add package for shipments, weights, quantity and sizes. </span>
                                            </div>


                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="customRadio4" name="customRadio4" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio4"> Choose Fleet Provider </label>
                                                <span> Add package for shipments, weights, quantity and sizes. </span>
                                            </div>
                                    </div>
                                </div> <!-- card-box --> 
                            </div>
                            <div class="col-md-9">
                                <div class="card-box" style=" min-height: 590px;">

                                    <div class="form-row">
                                        
                                        <div class="form-group col-md-6 mb-2">
                                            <label > Company </label>
                                            <div class="form-group ">
                                                <select class="form-control select2">
                                                    <option> select.. </option>
                                                    <option value="CT"> Vadrei Masharin</option>
                                                    <option value="DE"> 02 </option>
                                                </select>
                                            </div>
                                        </div> <!-- form-group -->

                                        <div class="form-group col-md-6 mb-2 text-right">
                                        </div> <!-- form-group -->


 


                                        <div class="form-group col-md-12 mb-2">
                                            <label > Location </label>
                                            <div class="form-group ">
                                                <select class="form-control select2">
                                                    <option> select.. </option>
                                                    <option value="CT"> 5504 Jones Park Suite 930</option>
                                                    <option value="DE"> 02 </option>
                                                </select>
                                            </div>
                                        </div> <!-- form-group -->

                                        <div class="form-group col-md-6 mb-2">
                                            <label > Contact Person </label>
                                            <div class="form-group ">
                                                <select class="form-control select2">
                                                    <option> select.. </option>
                                                    <option value="CT"> Muhamed Khiaal </option>
                                                    <option value="DE"> 02 </option>
                                                </select>
                                            </div>
                                        </div> <!-- form-group -->
                                        <div class="form-group col-md-6 mb-2">
                                        </div>
                                        <div class="form-group col-md-6 mb-2">                                            
                                            <ul class="reset-list">
                                                <li> <i class="fa fa-phone m-1"></i> 605-427-8750 </li>
                                                <li> <i class="fa fa-envelope m-1"></i> reynolds_tina@larson.name </li>
                                            </ul>
                                        </div> <!-- form-group -->
 
 
                                        <div class="form-group col-md-12 ">
                                            <div class="d-flex align-items-center justify-content-between mt-3">
                                                <a class="btn btn-custom1" href="#"> Cancel </a>
                                                <a class="btn btn-primary" href="#"> Next </a>
                                            </div>
                                        </div><!-- input-group -->
                                        
                                    </div> <!-- form-row -->

                                </div> <!-- card-box -->
                            </div> <!-- col-md-9 -->
                        </div> <!-- row -->

                    </div> <!-- container -->
                </div> <!-- content -->
 



            </div> <!-- content-page -->

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->



        <!-- Right Sidebar -->
        <div class="right-bar"> 

            <div class="d-flex justify-content-between flex-direction-column p-3 height100">

                <div>

                    <div class="d-flex justify-content-between align-items-center flex-direction-row mb-2">
                        <h4> Filters </h4>
                        <a href="#"> Reset </a>
                    </div>
                    <div class="form-group">
                        <p> Shipment Type </p>
                        <select class="form-control select2">
                            <option> All </option>
                            <option value="CT">option1</option>
                            <option value="DE">option2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <p> Recuring Shipments </p>
                        <select class="form-control select2">
                            <option> All </option>
                            <option value="CT">option1</option>
                            <option value="DE">option2</option>
                        </select>
                    </div> 

         
                    <div class="form-group">
                        <p> Truck Type </p>
                        <select class="form-control select2">
                            <option> All </option>
                            <option value="CT">option1</option>
                            <option value="DE">option2</option>
                        </select>
                    </div> 

         
                    <div class="form-group">
                        <p> Pickup Location </p>
                        <select class="form-control select2">
                            <option> All </option>
                            <option value="CT">option1</option>
                            <option value="DE">option2</option>
                        </select>
                    </div> 

         
                    <div class="form-group">
                        <p> Dropoff Location </p>
                        <select class="form-control select2">
                            <option> All </option>
                            <option value="CT">option1</option>
                            <option value="DE">option2</option>
                        </select>
                    </div> 
                </div>

                <div> 
                    <div class="mb-2">
                        <a class="btn btn-primary btn-block" href="#add-reciever-popup " data-animation="fadein" data-plugin="custommodal" data-overlaycolor="#36404a">   Apply </a>
                    </div>

                        <div class="right-bar-toggle" style="all:unset !important;">
                            
                            <a class="btn btn-custom1 btn-block " href="#"> Cancel </a> 

                        </div>
                </div>
            </div>

        </div>
        <!-- /Right-bar -->
 

<?php include 'footer.php' ?>