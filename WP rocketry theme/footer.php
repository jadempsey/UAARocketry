<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Rocketry
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- horizon element -->
<div class="horizon">
	Please support our sponsors<br/>

	<a href="http://www.amc-engineers.com"><img class="donor" src='/wp-content/themes/rocketry/images/AMC Enigineers.jpg' class="sponsor"></a>
	<a href="http://www.sbsalaska.com"><img class="donor" src='/wp-content/themes/rocketry/images/SBS.jpg'></a>
	<a href="http://www.reidmiddleton.com"><img class="donor" src='/wp-content/themes/rocketry/images/reidmiddleton.jpg'></a>
	<a href="http://www.solidworks.com"><img class="donor" src='/wp-content/themes/rocketry/images/SolidWorks.png'></a>
	<a href="http://spacegrant.alaska.edu"><img class="donor" src='/wp-content/themes/rocketry/images/AKSpaceGrant.jpg'></a>
	<br>
</div>
<!-- end of horizon element -->

<!-- parallax fields -->
<div class="parallax-container">
	<div class="parallax-wrapper">
		<div class="parallax-field" data-scroll-percent="40"> </div>
		<div class="parallax-field" data-scroll-percent="45"> </div>
		<div class="parallax-field" data-scroll-percent="50"> </div>
	</div>
</div>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script>
	$(function()
	{
		var layers = $('.parallax-field'), $window = $(window);
		$window.scroll(function()
		{
			var scrollTop = $window.scrollTop();
			layers.each(function()
			{
				var $this = $(this);
				var scrollspeed = parseInt($this.data('scroll-percent'));
				var scrolled = - scrollTop * (scrollspeed/100);
				$this.css('transform', 'translateY(' + scrolled + 'px)');
				var hght = $window.height();
				hght = hght -	scrolled;
				$this.css('height', hght + 'px'); 
			});
		});
	})
</script>
<!-- end of parallax fields -->
</body>
</html>
