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
                            <h3 class="mb-2"> Shipments List </h3>    
                            <div class="btns">
                                <a class="btn btn-primary" href="#add-reciever-popup" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#36404a">   Create New Shipment </a> 

                                    <a class="btn btn-custom1 dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> Export  <i style="transform: rotate(90deg); margin: 0 8px;" class="fa fa-ellipsis-v"></i></a>


                                    <div class="dropdown for-table notification-list" style="position: relative;">

                                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                            <!-- item-->
                                            <a href="#" class="dropdown-item notify-item">
                                                <span>   Export to XLSX </span>
                                            </a>

                                            <!-- item-->
                                            <a href="#email" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#36404a" class="dropdown-item notify-item">
                                                <span> Export To Email </span>
                                            </a>

                                            <!-- item-->
                                            <a href="#" class="dropdown-item notify-item">
                                                <span> Print </span>
                                            </a>

                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div id="email" class="modal-sm modal-demo bs-example-modal-sm">
                                        <button type="button" class="close" onclick="Custombox.modal.close();">
                                            <span>&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="custom-modal-title"> Export To Email </h4>
                                        <div class="custom-modal-text">

                                            <form>

                                                <div class="form-group mb-3">
                                                    <label for="inputEmail4" class="col-form-label"> Email Address </label>
                                                    <input type="text" class="form-control" id="" placeholder="Enter Email Adress">
                                                </div> 

                                            </form>

                                            <div class="d-flex align-items-center justify-content-between mt-1">
                                                <a style="color:#2f5cbd" class="btn btn-custom1" href="#"> Cancel </a>
                                                <a  class="btn btn-primary" href="#"> Send </a>
                                            </div>

                                        </div>
                                    </div>

                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between ">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-group mr-2 mb-0">
                                    <input type="text" class="form-control" id="" placeholder="Search…" style="height: 10px !important; padding: 15px; margin-top: 5px;">
                                </div> 

                                <div class="mb-1 mt-2">

                                    <div class="dropdown for-table notification-list" style="position: relative;">
                                        
                                        <a class="btn btn-state nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> Date: All time  <i class="fa fa-chevron-down"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                            <!-- item-->
                                            <a href="#" class="dropdown-item notify-item">
                                                <span>   All time </span>
                                            </a>

                                            <!-- item-->
                                            <a href="#" class="dropdown-item notify-item">
                                                <span> All time </span>
                                            </a>


                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="icons-btns">
                                    <a href="#"> <img src="assets/images/icon-07.png"></a>
                                    <a href="#"> <img src="assets/images/icon-08.png" style="opacity: 0.4;"></a>
                                    <a href="#"> <img src="assets/images/icon-06.png"></a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-2 ">
                            <div class="d-flex align-items-center justify-content-between">
                                <a class="btn btn-custom1 right-bar-toggle mr-2" href="#"> Filter </a>
                                <div class="sort-container">
                                    <a class="one-sort" href="#"> Refrigerator <i class="fa fa-times"></i> </a>
                                    <a class="one-sort" href="#"> Canon Company <i class="fa fa-times"></i> </a>
                                </div>
                                
                            </div>
                            <div class="mb-3 mt-2">

                                <div class="dropdown for-table notification-list" style="position: relative;">
                                    
                                    <a class="btn btn-state nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> Sort by: Most Recent  <i class="fa fa-chevron-down"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                        <!-- item-->
                                        <a href="#" class="dropdown-item notify-item">
                                            <span> Most Recent </span>
                                        </a>

                                        <!-- item-->
                                        <a href="#" class="dropdown-item notify-item">
                                            <span> Name : A - Z </span>
                                        </a>

                                        <!-- item-->
                                        <a href="#" class="dropdown-item notify-item">
                                            <span> Name : Z - A </span>
                                        </a>



                                    </div>
                                </div>
                            </div>  
                        </div>

                        <div class="dashboard-search-page">

                            <ul class="nav nav-pills nav-fill mb-3" id="myTab" role="tablist" style="border-radius: 4px;overflow: hidden;">

                              <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> Shipments <span class="badge badge-custom"> +3 </span> </a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">  Pending <span class="badge badge-custom"> +3 </span> </a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile3" aria-selected="false"> Scheduled <span class="badge badge-custom"> +3 </span> </a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile3" aria-selected="false"> Running <span class="badge badge-custom"> +3 </span> </a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile5" aria-selected="false"> Delivered <span class="badge badge-custom"> +3 </span> </a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" id="profile-tab6" data-toggle="tab" href="#profile6" role="tab" aria-controls="profile5" aria-selected="false"> Canceled <span class="badge badge-custom"> +3 </span> </a>
                              </li>
                            </ul>

                            <div class="tab-content" id="myTabContent"  style="padding: 0px;border:unset;">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Created in 12 March 2020  </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Compan… </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-2">
                                                <label> Fleet Provider   </label>
                                                <p class="m-0"> <a href="#"> Fugji Limited in.. </a> </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Volume </label>
                                                <p> 1230 M2 </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Weight </label>
                                                <p> 3215 KG </p>
                                            </div>  <!-- col-md-2 -->

                                            <div class="col-md-1">
                                                <div>
                                                    <div class="badge badge-custom2 badge-scheduled">  Scheduled  </div>
                                                </div>
                                            </div>  <!-- col-md-2 -->


                                            <div class="col-md-1 text-right">

                                                <div class="dropdown for-table notification-list" style="position: relative;">
                                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                                        <!-- item-->
                                                        <a href="#" class="dropdown-item notify-item">
                                                            <span> Edit </span>
                                                        </a>

                                                        <!-- item-->
                                                        <a href="#" class="red dropdown-item notify-item">
                                                            <span> End Contract </span>
                                                        </a>

                                                    </div> <!-- dropdown-menu -->
                                                </div> <!-- dropdown -->
                                            </div> <!-- col-md-2 -->
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->

                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Created in 12 March 2020  </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Compan… </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-2">
                                                <label> Fleet Provider   </label>
                                                <p class="m-0"> <a href="#"> Fugji Limited in.. </a> </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Volume </label>
                                                <p> 1230 M2 </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Weight </label>
                                                <p> 3215 KG </p>
                                            </div>  <!-- col-md-2 -->

                                            <div class="col-md-1">
                                                <div>
                                                    <div class="badge badge-custom2 badge-pending">  Pending  </div>
                                                </div>
                                            </div>  <!-- col-md-2 -->


                                            <div class="col-md-1 text-right">
                                                <div class="dropdown for-table notification-list" style="position: relative;">
                                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                                        <!-- item-->
                                                        <a href="#" class="dropdown-item notify-item">
                                                            <span> Edit </span>
                                                        </a>
                                                        <!-- item-->
                                                        <a href="#" class="red dropdown-item notify-item">
                                                            <span> End Contract </span>
                                                        </a>
                                                    </div> <!-- dropdown-menu -->
                                                </div> <!-- dropdown -->
                                            </div> <!-- col-md-2 -->
                                        </div> <!-- row -->

                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th> Shipments </th>
                                                    <th> No. of Packages </th>
                                                    <th> Pick-up location </th>
                                                    <th> Drop-off location </th>
                                                    <th> Volume </th>
                                                    <th> Weight  </th>
                                                    <th> Status  </th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                        
                                                    <tr> 
                                                        <td> 1 </td>
                                                        <td> 2 </td>
                                                        <td> 8624, New Ind…. % </td> 
                                                        <td> 8624, New Ind… </td> 
                                                        <td> 1230 M2 </td> 
                                                        <td> 1800 KG </td> 
                                                        <td> <span class="completed"> Completed </span> </td> 
                                                    </tr>

                                                    <tr> 
                                                        <td> 1 </td>
                                                        <td> 2 </td>
                                                        <td> 8624, New Ind…. % </td> 
                                                        <td> 8624, New Ind… </td> 
                                                        <td> 1230 M2 </td> 
                                                        <td> 1800 KG </td> 
                                                        <td> <span class="running"> Running </span> </td> 
                                                    </tr>

                                                    <tr> 
                                                        <td> 1 </td>
                                                        <td> 2 </td>
                                                        <td> 8624, New Ind…. % </td> 
                                                        <td> 8624, New Ind… </td> 
                                                        <td> 1230 M2 </td> 
                                                        <td> 1800 KG </td> 
                                                        <td> <span class="scheduled"> Scheduled </span> </td> 
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- card-box -->

                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Created in 12 March 2020  </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Compan… </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-2">
                                                <label> Fleet Provider   </label>
                                                <p class="m-0"> <a href="#"> Fugji Limited in.. </a> </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Volume </label>
                                                <p> 1230 M2 </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Weight </label>
                                                <p> 3215 KG </p>
                                            </div>  <!-- col-md-2 -->

                                            <div class="col-md-1">
                                                <div>
                                                    <div class="badge badge-custom2 badge-running">  Running  </div>
                                                </div>
                                            </div>  <!-- col-md-2 -->


                                            <div class="col-md-1 text-right">
                                                <div class="dropdown for-table notification-list" style="position: relative;">
                                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                                        <!-- item-->
                                                        <a href="#" class="dropdown-item notify-item">
                                                            <span> Edit </span>
                                                        </a>
                                                        <!-- item-->
                                                        <a href="#" class="red dropdown-item notify-item">
                                                            <span> End Contract </span>
                                                        </a>
                                                    </div> <!-- dropdown-menu -->
                                                </div> <!-- dropdown -->
                                            </div> <!-- col-md-2 -->
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->

                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Created in 12 March 2020  </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Compan… </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-2">
                                                <label> Fleet Provider   </label>
                                                <p class="m-0"> <a href="#"> Fugji Limited in.. </a> </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Volume </label>
                                                <p> 1230 M2 </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Weight </label>
                                                <p> 3215 KG </p>
                                            </div>  <!-- col-md-2 -->

                                            <div class="col-md-1">
                                                <div>
                                                    <div class="badge badge-custom2 badge-completed">  Completed  </div>
                                                </div>
                                            </div>  <!-- col-md-2 -->


                                            <div class="col-md-1 text-right">
                                                <div class="dropdown for-table notification-list" style="position: relative;">
                                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                                        <!-- item-->
                                                        <a href="#" class="dropdown-item notify-item">
                                                            <span> Edit </span>
                                                        </a>
                                                        <!-- item-->
                                                        <a href="#" class="red dropdown-item notify-item">
                                                            <span> End Contract </span>
                                                        </a>
                                                    </div> <!-- dropdown-menu -->
                                                </div> <!-- dropdown -->
                                            </div> <!-- col-md-2 -->
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->


                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Created in 12 March 2020  </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Compan… </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-2">
                                                <label> Fleet Provider   </label>
                                                <p class="m-0"> <a href="#"> Fugji Limited in.. </a> </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Volume </label>
                                                <p> 1230 M2 </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Weight </label>
                                                <p> 3215 KG </p>
                                            </div>  <!-- col-md-2 -->

                                            <div class="col-md-1">
                                                <div>
                                                    <div class="badge badge-custom2 badge-scheduled">  Scheduled  </div>
                                                </div>
                                            </div>  <!-- col-md-2 -->


                                            <div class="col-md-1 text-right">

                                                <div class="dropdown for-table notification-list" style="position: relative;">
                                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                                        <!-- item-->
                                                        <a href="#" class="dropdown-item notify-item">
                                                            <span> Edit </span>
                                                        </a>

                                                        <!-- item-->
                                                        <a href="#" class="red dropdown-item notify-item">
                                                            <span> End Contract </span>
                                                        </a>

                                                    </div> <!-- dropdown-menu -->
                                                </div> <!-- dropdown -->
                                            </div> <!-- col-md-2 -->
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->

                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Created in 12 March 2020  </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Compan… </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-2">
                                                <label> Fleet Provider   </label>
                                                <p class="m-0"> <a href="#"> Fugji Limited in.. </a> </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Volume </label>
                                                <p> 1230 M2 </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Weight </label>
                                                <p> 3215 KG </p>
                                            </div>  <!-- col-md-2 -->

                                            <div class="col-md-1">
                                                <div>
                                                    <div class="badge badge-custom2 badge-pending">  Pending  </div>
                                                </div>
                                            </div>  <!-- col-md-2 -->


                                            <div class="col-md-1 text-right">
                                                <div class="dropdown for-table notification-list" style="position: relative;">
                                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                                        <!-- item-->
                                                        <a href="#" class="dropdown-item notify-item">
                                                            <span> Edit </span>
                                                        </a>
                                                        <!-- item-->
                                                        <a href="#" class="red dropdown-item notify-item">
                                                            <span> End Contract </span>
                                                        </a>
                                                    </div> <!-- dropdown-menu -->
                                                </div> <!-- dropdown -->
                                            </div> <!-- col-md-2 -->
                                        </div> <!-- row -->

                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th> Shipments </th>
                                                    <th> No. of Packages </th>
                                                    <th> Pick-up location </th>
                                                    <th> Drop-off location </th>
                                                    <th> Volume </th>
                                                    <th> Weight  </th>
                                                    <th> Status  </th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                        
                                                    <tr> 
                                                        <td> 1 </td>
                                                        <td> 2 </td>
                                                        <td> 8624, New Ind…. % </td> 
                                                        <td> 8624, New Ind… </td> 
                                                        <td> 1230 M2 </td> 
                                                        <td> 1800 KG </td> 
                                                        <td> <span class="completed"> Completed </span> </td> 
                                                    </tr>

                                                    <tr> 
                                                        <td> 1 </td>
                                                        <td> 2 </td>
                                                        <td> 8624, New Ind…. % </td> 
                                                        <td> 8624, New Ind… </td> 
                                                        <td> 1230 M2 </td> 
                                                        <td> 1800 KG </td> 
                                                        <td> <span class="running"> Running </span> </td> 
                                                    </tr>

                                                    <tr> 
                                                        <td> 1 </td>
                                                        <td> 2 </td>
                                                        <td> 8624, New Ind…. % </td> 
                                                        <td> 8624, New Ind… </td> 
                                                        <td> 1230 M2 </td> 
                                                        <td> 1800 KG </td> 
                                                        <td> <span class="scheduled"> Scheduled </span> </td> 
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- card-box -->

                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Created in 12 March 2020  </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Compan… </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-2">
                                                <label> Fleet Provider   </label>
                                                <p class="m-0"> <a href="#"> Fugji Limited in.. </a> </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Volume </label>
                                                <p> 1230 M2 </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Weight </label>
                                                <p> 3215 KG </p>
                                            </div>  <!-- col-md-2 -->

                                            <div class="col-md-1">
                                                <div>
                                                    <div class="badge badge-custom2 badge-running">  Running  </div>
                                                </div>
                                            </div>  <!-- col-md-2 -->


                                            <div class="col-md-1 text-right">
                                                <div class="dropdown for-table notification-list" style="position: relative;">
                                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                                        <!-- item-->
                                                        <a href="#" class="dropdown-item notify-item">
                                                            <span> Edit </span>
                                                        </a>
                                                        <!-- item-->
                                                        <a href="#" class="red dropdown-item notify-item">
                                                            <span> End Contract </span>
                                                        </a>
                                                    </div> <!-- dropdown-menu -->
                                                </div> <!-- dropdown -->
                                            </div> <!-- col-md-2 -->
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->

                                    <div class="mb-2 card-box p-2 dashboard-search-page-row">
                                        <div class="row"> 
                                            <div class="col-md-3">
                                                <label> Created in 12 March 2020  </label>
                                                <p class="m-0"> OB-10858・Single </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-3">
                                                <label> Reciever company  </label>
                                                <p class="m-0"> <a href="#"> Canon Compan… </a> </p>                                        
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-2">
                                                <label> Fleet Provider   </label>
                                                <p class="m-0"> <a href="#"> Fugji Limited in.. </a> </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Volume </label>
                                                <p> 1230 M2 </p>
                                            </div>  <!-- col-md-2 -->
                                            <div class="col-md-1">
                                                <label> Weight </label>
                                                <p> 3215 KG </p>
                                            </div>  <!-- col-md-2 -->

                                            <div class="col-md-1">
                                                <div>
                                                    <div class="badge badge-custom2 badge-completed">  Completed  </div>
                                                </div>
                                            </div>  <!-- col-md-2 -->


                                            <div class="col-md-1 text-right">
                                                <div class="dropdown for-table notification-list" style="position: relative;">
                                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                                        <!-- item-->
                                                        <a href="#" class="dropdown-item notify-item">
                                                            <span> Edit </span>
                                                        </a>
                                                        <!-- item-->
                                                        <a href="#" class="red dropdown-item notify-item">
                                                            <span> End Contract </span>
                                                        </a>
                                                    </div> <!-- dropdown-menu -->
                                                </div> <!-- dropdown -->
                                            </div> <!-- col-md-2 -->
                                        </div> <!-- row -->
                                    </div> <!-- card-box -->

                              </div> <!-- tab-pane -->

                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> Pending
                              </div> 

                              <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3"> Scheduled
                              </div>

                              <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4"> Running
                              </div>

                              <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5"> Delivered
                              </div>

                              <div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile-tab6"> Canceled
                              </div>
                            </div> <!-- tab-content -->

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

        <div class="alert alert-success message-sent alert-dismissible fade show m-1 mb-3" role="alert">
          <strong> <i class="fas fa-check-square mr-1"></i> Message Sent Successfully </strong>  
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

<?php include 'footer.php' ?>