
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- dropify js -->
        <script src="assets/libs/dropify/dropify.min.js"></script>

        <!-- form-upload init -->
        <script src="assets/js/pages/form-fileupload.init.js"></script>

        <!-- Modal-Effect -->
        <script src="assets/libs/custombox/custombox.min.js"></script>

        <!-- Chart JS -->
        <script src="assets/libs/chart-js/Chart.bundle.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/chartjs.init.js"></script>



 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script>




        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
 

        <!-- Plugins Js -->
        <script src="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="assets/libs/switchery/switchery.min.js"></script>
        <script src="assets/libs/multiselect/jquery.multi-select.js"></script>
        <script src="assets/libs/jquery-quicksearch/jquery.quicksearch.min.js"></script>

        <script src="assets/libs/select2/select2.min.js"></script>
        <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
        <script src="assets/libs/moment/moment.js"></script>
        <script src="assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <script src="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="assets/libs/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

        <!-- Init js-->
        <script src="assets/js/pages/form-advanced.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
 
        <script>

			var count = $(('#count'));
			$({ Counter: 0 }).animate({ Counter: count.text() }, {
			  duration: 5000,
			  easing: 'linear',
			  step: function () {
			    count.text(Math.ceil(this.Counter)+ "%");
			  }
			});

			var s = Snap('#animated');
			var progress = s.select('#progress');

			progress.attr({strokeDasharray: '0, 251.2'});
			Snap.animate(0,251.2, function( value ) {
			    progress.attr({ 'stroke-dasharray':value+',251.2'});
			}, 5000);

        </script>


    </body>
</html>