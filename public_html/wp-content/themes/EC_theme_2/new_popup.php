<script type="text/javascript">
$(document).ready(function() {
	$("a#inline").fancybox();
	if ($.cookie('ecpopup') != '1') {
    	$.cookie('ecpopup', '1', { expires: 365 }); 
		var puc='ecpopup';
		$("#inline").trigger('click');
	}
});
</script>

<a id="inline" href="#popup" style="display:none;" >This shows content of popup</a>
<div style="display:none;">
<div id="popup" class="new-popup" style="background-color:#000000;">

	<div class="featured-magazine">
			<p>Eric Cressey has been featured in:</p>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/new_images/featured/
			menshealth.png" />
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/new_images/featured/
			mensfitness.png" />
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/new_images/featured/
			espn.png" />
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/new_images/featured/
			baseballamerica.png" />
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/new_images/featured/
			yahoosports.png" />
	</div>
	<div class="bg-holder">
		<div class="popup-data">
			<h4>High Performance handbook</h4>
			<span>Lorem ipsum sit dolor amet</span>
			<p>It's time for the latest installment of Quick and Easy Ways to Feel
			and Move Better. Here are five tips for you to put into action right away:</p>
			<ul>
				<li>Try homemade arm sleeves for cranky elbows. I actually have a
				subluxating ulnar nerve, which basically lorem ipmsum.</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet vulputate tortor, vel sollicitudin
				ligula. Fusce posuere nisl sit amet aliquet cursus. Nunc et diam nisi. Sed ut aliquam urna.</li>
			</ul>
		</div>
		<div class="subscription">
			<h4>Subscribe to my newsletter to get all my articles</h4>
			<div class="email side-email">
				<form method="" action="">
					<input type="text" value="" placeholder="Enter your email" />
					<button type="submit"><p><i class="fa fa-angle-right"></i>
					<span>Subscribe</span></p></button>
					<span>*I hate spam too, only the best for my subscribers</span>
				</form>
			</div>
		</div>
	</div>
</div>
</div>