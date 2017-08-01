	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


	<!--Nifty Admin [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>assets/js/nifty.min.js"></script>

	<!-- Table -->
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/media/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo/tables-datatables.js"></script>


	<script>
		(function() {

			'use strict';

			// click events
			document.body.addEventListener('click', copy, true);

			// event handler
			function copy(e) {

				// find target element
				var
					t = e.target,
					c = t.dataset.copytarget,
					inp = (c ? document.querySelector(c) : null);

				// is element selectable?
				if (inp && inp.select) {
					// select text
					inp.select();
					$('#referral_copy').css('color','Green');
					try {
						// copy text
						document.execCommand('copy');
						inp.blur();
					}
					catch (err) {
						alert('please press Ctrl/Cmd+C to copy');
					}

				}

			}

		})();
	</script>
</body>

<!-- Mirrored from www.themeon.net/nifty/v2.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:43:58 GMT -->
</html>
