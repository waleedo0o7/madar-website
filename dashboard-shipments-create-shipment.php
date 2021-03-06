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
                            <h3 class="mb-2"> Create New Shipment </h3>    
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-box">
                                    <img style="width:70px" class="img-fluid" src="assets/images/icon-09.png">
                                    <h4 class="d-flex justify-content-between align-items-center"> <span> Single Shipment </span>  <i class="fa fa-chevron-right"></i> </h4>
                                    <p style="max-width:300px;"> If you have at least one shipment you want to deliver. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-box">
                                    <img style="width:70px" class="img-fluid" src="assets/images/icon-010.png">
                                    <h4 class="d-flex justify-content-between align-items-center"> <span> Multiple Shipments </span>  <i class="fa fa-chevron-right"></i> </h4>
                                    <p style="max-width:300px;"> If you have multiple shipments for multiple locations. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-box">
                                    <img style="width:70px" class="img-fluid" src="assets/images/icon-011.png">
                                    <h4 class="d-flex justify-content-between align-items-center"> <span> Bulk Shipments </span>  <i class="fa fa-chevron-right"></i> </h4>
                                    <p style="max-width:300px;"> If you have multiple shipments for multiple locations. </p>
                                </div>
                            </div>
                        </div>

 
                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <h3 class="mb-2"> Saved Templates  </h3>    
                        </div>
 
                        <div class="dashboard-search-page">
                            
                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Template Name </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Company International  </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Dropoff Location   </label>
                                                <p class="m-0">  8624, New Industrial City, Riyadh…  </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Package </label>
                                                <p> Plastic 500 KG 15 PCS  </p>
                                            </div>  <!-- col-md-2 -->
   
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->

                            
                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Template Name </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Company International  </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Dropoff Location   </label>
                                                <p class="m-0">  8624, New Industrial City, Riyadh…  </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Package </label>
                                                <p> Plastic 500 KG 15 PCS  </p>
                                            </div>  <!-- col-md-2 -->
   
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->

                            
                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Template Name </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Company International  </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Dropoff Location   </label>
                                                <p class="m-0">  8624, New Industrial City, Riyadh…  </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Package </label>
                                                <p> Plastic 500 KG 15 PCS  </p>
                                            </div>  <!-- col-md-2 -->
   
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->

                            
                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Template Name </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Company International  </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Dropoff Location   </label>
                                                <p class="m-0">  8624, New Industrial City, Riyadh…  </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Package </label>
                                                <p> Plastic 500 KG 15 PCS  </p>
                                            </div>  <!-- col-md-2 -->
   
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->

                            
                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Template Name </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Company International  </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Dropoff Location   </label>
                                                <p class="m-0">  8624, New Industrial City, Riyadh…  </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Package </label>
                                                <p> Plastic 500 KG 15 PCS  </p>
                                            </div>  <!-- col-md-2 -->
   
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->

                            
                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Template Name </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Company International  </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Dropoff Location   </label>
                                                <p class="m-0">  8624, New Industrial City, Riyadh…  </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Package </label>
                                                <p> Plastic 500 KG 15 PCS  </p>
                                            </div>  <!-- col-md-2 -->
   
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->

                            
                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Template Name </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Company International  </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Dropoff Location   </label>
                                                <p class="m-0">  8624, New Industrial City, Riyadh…  </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Package </label>
                                                <p> Plastic 500 KG 15 PCS  </p>
                                            </div>  <!-- col-md-2 -->
   
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->

                        </div> <!-- dashboard-search-page -->

                    </div> <!-- container -->
                </div> <!-- content -->


                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               Displaying <span> 10 </span> Out of <span> 123 </span>
                            </div>
                            <div class="col-md-6">
                                <nav aria-label="Page navigation example">
                                  <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"> <i class="fa fa-chevron-left"></i> </a></li>
                                    <li class="page-item"><a class="page-link" href="#"> <i class="fa fa-chevron-right"></i> </a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->



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