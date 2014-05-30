<script type="text/javascript">
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>

<?php if (is_front_page()) { /* Track Front Page */ ?>
<script type="text/javascript">
var CE_SNAPSHOT_NAME = "EricCressey.com Homepage";
</script>
<?php } ?>

<?php if (is_single()) { /* Track Articles */ ?>
<script type="text/javascript">
var CE_SNAPSHOT_NAME = "EricCressey.com Article";
</script>
<?php } ?>

<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0014/2870.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>