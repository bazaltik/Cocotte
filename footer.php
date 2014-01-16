<footer id="footer">
	<div class="grid-container">
		<div class="grid-100 mobile-grid-100">
			<p>
				<?php bloginfo('name'); ?> - Cocotte theme - proudly powered by <a href="http://wordpress.org">WordPress</a>
			</p>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>

<!-- Script js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.10.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='//www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
</body>
</html>