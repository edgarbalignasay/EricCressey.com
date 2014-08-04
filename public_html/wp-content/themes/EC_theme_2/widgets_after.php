<script type="text/javascript">
  deferJS(('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js');
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
	deferJS("//dnn506yrbagrg.cloudfront.net/pages/scripts/0014/2870.js?"+Math.floor(new Date().getTime()/3600000));
</script>