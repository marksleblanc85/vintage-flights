<footer id="footer">
			<div class="width">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/vintage-flights-logo.png" alt="">
				</div>
				<div>
					<h5>Socialize</h5>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.png" border="0"></a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/icon-twitter.png" border="0"></a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/icon-youtube.png" border="0"></a>
				</div>
				<div>
					<h5>Contact Us Today!</h5>
					<h4>404.791.6903</h4>
				</div>
				<div>
					<h5>Join Our Newsletter</h5>
					<form action="" id="newsletter-signup">
						<input type="text" class="text">
						<input type="submit" class="submit">
					</form>
				</div>
				
			</div>
		</footer>
		<nav id="footernav">
			<div class="width">
				<a href="">Home</a> |
				<a href="">About Us</a> |
				<a href="">Rides &amp; Rates</a> |
				<a href="">FAQs</a> |
				<a href="">Airshow Info</a> |
				<a href="" class="last">Directions</a>
			</div>
		</nav>
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.0.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.js"></script>
		<script type="text/javascript">
			$(function(){
				$('#slideshow').cycle({
					prev: '#pager-left',
					next: '#pager-right',
					speed: 500
				});
			});
		</script>
		<?php wp_footer(); ?>
	</body>
</html>