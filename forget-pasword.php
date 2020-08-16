<?php include 'header.php' ?>

        <div class="account-pages vh-100">
            <div class="row vh-100">
                <div class="col-lg-6 d-flex align-items-start justify-content-center left vh-100">

                    <div class="page-content ">

                        <img class="img-fluid logo" src="assets/images/madar-logo.svg">
                        <div class="otp">


                            <h3> Forget Password </h3>
                            <p class="mb-3"> Enter your phone number and we will send you verification code, then you can reset your password </p>
                            <!--  -->

                            <form> 

                                <label for="mobile"> Mobile Number </label>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <input class="form-control" type="text" id="mobile" required="" placeholder="Enter your mobile here">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <input class="form-control" type="text" id="username" required="" placeholder="Enter your mobile here">
                                    </div>
                                </div>

                                <div class="form-group mb-2 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Reset </button>
                                </div>

                                <a href="#"> Reset With Email </a>

                                <div class="form-group mb-0 mt-4 text-center">
                                    <p> Dont have account?  <a href="#"> Signup! </a> </p>
                                </div>

                            </form>

                        </div>
                    </div> <!-- page-content -->

                </div> <!-- end col -->
                <div class="col-lg-6 d-flex align-items-start justify-content-center right" style="    background-image: url(assets/images/login-bg.jpg);">

                    <div class="page-welcome">

                        <div class="top text-center">
                            <h1 class="text-white"> Welcome to Madar! </h1>
                            <p class="text-white"> We provide the best services for our clients 100% guaranteed trust and satisfaction </p>
                        </div>

                        <div class="bottom d-flex align-items-center justify-content-between">
                            <p class="text-white m-0"> © Madar 2020 </p>
                            <ul class="reset-ul d-flex align-items-start">
                                <li> <a href="#"><i class="fab fa-facebook-f text-white"></i> </a> </li>
                                <li> <a href="#"><i class="fab fa-linkedin-in text-white"></i> </a> </li>
                                <li> <a href="#"><i class="fab fa-twitter text-white"></i> </a> </li>
                            </ul>
                        </div>

                    </div> <!-- page-welcome -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end page -->


<?php include 'footer.php' ?>
