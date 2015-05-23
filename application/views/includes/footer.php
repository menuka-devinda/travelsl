
	
	<!-- Footer -->
	<footer class="footer" role="contentinfo">
		<!-- Wrapper -->
		<div class="wrap">
			<div class="row">
				<!-- OneFourth -->
				<div class="one-fourth">
					<h6>About us</h6>
					<p>Sailor theme ltd.<br />1211 Pensilvania Ave, Sacramento, CA</p>
					<p> 1-555-555-555<br /><a href="mailto:sailor@sailortheme.com">sailor@sailortheme.com</a></p>
				</div>
				<!-- //OneFourth -->
				
				<!-- OneFourth -->
				<div class="one-fourth">
					<h6>Why book with us?</h6>
					<ul class="check">
						<li><a href="#">Secure booking</a></li>
						<li><a href="#">Best price guarantee</a></li>
						<li><a href="#">Passionate service</a></li>
						<li><a href="#">Exclusive knowledge</a></li>
						<li><a href="#">Benefits for partners</a></li>
					</ul>
				</div>
				<!-- //OneFourth -->
				
				<!-- OneFourth -->
				<div class="one-fourth">
					<h6>Need help?</h6>
					<ul>
						<li><a href="#">Faq</a></li>
						<li><a href="#">How do I make a reservation?</a></li>
						<li><a href="#">Payment options</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Terms and conditions</a></li>
					</ul>
				</div>
				<!-- //OneFourth -->
				
				<!-- OneFourth -->
				<div class="one-fourth">
					<h6>Follow us</h6>
					<p>Lorem ipsum dolor sit amet, sectetuer adipiscing elit, sed diam nonummy  dolore magna aliquam erat volutpat. </p>
					<a href="#" title="Facebook" class="circle"><i class="fa fa-facebook fa-fw"></i></a>
					<a href="#" title="Google Plus" class="circle"><i class="fa fa-google-plus fa-fw"></i></a>
					<a href="#" title="Twitter" class="circle"><i class="fa fa-twitter fa-fw"></i></a>
					<a href="#" title="Youtube" class="circle"><i class="fa fa-youtube-play fa-fw"></i></a>
					<a href="#" title="Linkedin" class="circle"><i class="fa fa-linkedin fa-fw"></i></a>
					<a href="#" title="Pinterest" class="circle"><i class="fa fa-pinterest-p fa-fw"></i></a>
				</div>
				<!-- //OneFourth -->
			</div>
		</div>
		<!-- //Wrapper -->
		
		<div class="copy">
			<!-- Wrapper -->
			<div class="wrap">
				<p>Copyright 2015 Sailor, all rights reserved.</p>
				<p>By <a href="http://www.themeenergy.com" title="www.themeenergy.com">themeenergy</a></p>
			</div>
			<!-- //Wrapper -->
		</div>
	</footer>
	<!-- //Footer -->
	
	<!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>js/jetmenu.js"></script>
	<script src="<?php echo base_url();?>js/jquery.uniform.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.lightSlider.min.js"></script>
	<script src="<?php echo base_url();?>js/wow.min.js"></script>
	<script src="<?php echo base_url();?>js/scripts.js"></script>
	<script>
		 $(document).ready(function() {
			$("#lightSliderPosts").lightSlider({
				item:1,
				keyPress:true,
				gallery:false,
				pager:false,
				prevHtml: 'PREVIOUS',
				nextHtml: 'NEXT'
			});
			
			$("#lightSliderDeals").lightSlider({
				item:1,
				keyPress:true,
				gallery:false,
				pager:false,
				prevHtml: 'PREVIOUS',
				nextHtml: 'NEXT'
			});
			
			new WOW().init();
		});
	</script>
  </body>
</html>