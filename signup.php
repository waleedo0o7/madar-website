<?php include 'header.php' ?>

        <div class="account-pages vh-100">
            <div class="row vh-100">
                <div class="col-lg-6 d-flex align-items-center justify-content-center left vh-100">

                    <div class="page-content ">

                        <img class="img-fluid logo" src="assets/images/madar-logo.svg">
                        <h3> Create Account </h3>
                        <p class="mb-3"> To continue you need to signup </p>
                        <!--  -->

                        <form>
                            
                            <div class="form-group mb-3">
                                <label for="username"> username </label>
                                <input class="form-control" type="text" id="username" required="" placeholder="Enter your username">
                            </div>

                            <label for="mobile"> Mobile Number </label>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input class="form-control" type="text" id="mobile" required="" placeholder="Enter your mobile here">
                                </div>
                                <div class="form-group col-md-8">
                                    <input class="form-control" type="text" id="username" required="" placeholder="Enter your mobile here">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="customer-name"> Customer Name </label>
                                <input class="form-control" type="text" id="customer-name" required="" placeholder="Enter Customer Name">
                            </div>

                            <div class="form-group mb-3">
                                <label for="customer-email"> Customer E-mail </label>
                                <input class="form-control" type="text" id="customer-email" required="" placeholder="Enter Customer E-mail">
                            </div>

                            <div class="form-group mb-3 text-center">
                                <input type="file" class="dropify" data-height="80" />
                            </div>

                            <div class="form-group mb-3 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Sign Up </button>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <p> Creating an account means that you fully agree to our <a href="#"> Terms of Service and Conditions .</a> </p>
                                <p> Already have an account? <a href="#"> Login! </a> </p>
                            </div>
                        </form>

                    </div> <!-- page-content -->

                </div> <!-- end col -->
                <div class="col-lg-6 d-flex align-items-start justify-content-center right">

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