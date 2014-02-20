</div> <!-- Main content div -->

<div id="subfooter"><?php

$pages = wp_list_pages('depth=1&title_li=&echo=0');

		$pages2 = preg_split('/(<li[^>]*>)/' ,$pages);

foreach($pages2 as $var){

echo str_replace('</li>', '', $var);

}

		?></div>

<div id="footer">

<div id="copyright">Copyright <?php echo date ('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>. Powered by <a href="http://wordpress.org">WordPress</a></div>



</div> <!-- Footer div -->

</div> <!-- Wrapper div -->

</body>

</html>