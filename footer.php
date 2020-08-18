
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- dropify js -->
        <script src="assets/libs/dropify/dropify.min.js"></script>

        <!-- form-upload init -->
        <script src="assets/js/pages/form-fileupload.init.js"></script>

        <!-- Modal-Effect -->
        <script src="assets/libs/custombox/custombox.min.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script>

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