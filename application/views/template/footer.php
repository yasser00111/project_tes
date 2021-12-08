
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery-3.1.1.min.js"></script>
	<!-- jQuery -->
	<script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() ?>asset/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() ?>asset/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?php echo base_url() ?>asset/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?php echo base_url() ?>asset/js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="<?php echo base_url() ?>asset/js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url() ?>asset/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ?>asset/js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="<?php echo base_url() ?>asset/js/simplyCountdown.js"></script>
	<script src="<?php echo base_url('asset/js/bootstrap-datepicker.min.js'); ?>"></script>
	
	<!-- Main -->
	<script src="<?php echo base_url() ?>asset/js/main.js"></script>

	<script>
    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	$(document).ready(function() {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
});
</script>

	</body>
</html>
