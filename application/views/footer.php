
<!-- copyright -->
<div class="copyright py-4">
	<div class="container">
		<div class="copyrightgrids row">
			<div class="col-lg-6 col-12">
				<p>© 2019 Antawijaya Training & Consulting . All Rights Reserved </a></p>
			</div>
			<div class="col-lg-6 col-12">
				<ul class="social text-right mt-lg-0 mt-3">
					<li><p class="mx-2 text-capitalize">follow us on : </p></li>
					<li class="mx-2"><a href="https://www.facebook.com"><span class="fab fa-facebook-f"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-twitter"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fas fa-rss"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-vk"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-yahoo"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //copyright -->
<!-- Vertically centered Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase text-center" id="exampleModalLongTitle"> Career Corp</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<img src="<?php echo base_url();?>/assets/web/images/banner.jpg" class="img-fluid mb-3" alt="Modal Image" />
        Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- //Vertically centered Modal -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url();?>/assets/web/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/web/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- odometer-script -->
	<script src="<?php echo base_url();?>/assets/web/js/odometer.js"></script>
	<script>
		window.odometerOptions = {
			format: '(ddd).dd'
		};
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats1').html(25);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats2').html(330);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats3').html(542);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats4').html(222);
		}, 1500);
	</script>
	<!-- //odometer-script -->

	<!-- start-smoth-scrolling -->
	<script src="<?php echo base_url();?>/assets/web/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/web/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/web/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
	<!-- FlexSlider-JavaScript -->
	<script defer src="<?php echo base_url();?>/assets/web/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
				});
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
	<!-- //FlexSlider-JavaScript -->
<!-- //js-scripts -->

</body>
</html>