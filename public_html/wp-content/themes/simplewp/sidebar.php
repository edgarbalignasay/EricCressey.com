<div id="sidebar">
<form action="http://www.google.com/cse" id="cse-search-box" target="_blank">
  <div>
    <input type="hidden" name="cx" value="partner-pub-4096495994480195:18l0sk7bsm9" />
    <input type="hidden" name="ie" value="ISO-8859-1" />
    <input type="text" name="q" size="31" />
    <input type="submit" name="sa" value="Search" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>

<br>
<br>
<br>
<center><b>
<font color="red">Sign up for Eric's FREE Newsletter</font></center></b>
<form action="http://www.mcssl.com/app/contactsave.asp" name="form1" method="post">
<input id="merchantid" value="84520" name="merchantid" type="hidden"/>
<input id="ARThankyouURL" value="www.1shoppingcart.com/app/thankyou.asp?ID=84520" name="ARThankyouURL" type="hidden"/>
<input id="copyarresponse" value="1" name="copyarresponse" type="hidden"/>
<input id="custom" value="0" name="custom" type="hidden"/>
<input id="defaultar" value="178309" name="defaultar" type="hidden"/>
<input id="allowmulti" value="0" name="allowmulti" type="hidden"/>
<input id="visiblefields" value="Name,Email1" name="visiblefields" type="hidden"/>
<input id="requiredfields" value="Name,Email1" name="requiredfields" type="hidden"/>
<table>
    <tr>
      <td>Name</td>
      <td><input name="Name" size="30" type="text"/></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="Email1" size="30" type="text"/></td>
    </tr>
	<tr align="center">
		<td colspan="2">
			<input value="Submit" name="cmdSubmit" type="Submit"/>
		</td>
	</tr>
  </table>
</form>
<br>
<br>
<div id="products">

<div class="title">Products</div>

<div id="sponsorscontent"><a href="http://ericcressey.com/products">
<img src="http://ericcressey.com/wp-content/themes/simplewp/images/ec_7.gif" width="250" height="350"></a>



</div> <!-- Sponsors div -->
<br>


<?php wp_list_bookmarks('title_before=<div class="title">&title_after=</div>&category_before=<div class="sidebar-item">&category_after=</div>'); ?>
<br>
<div id="CresseyPerformance">



</div> <!-- Sponsors div -->
<br>
<br>
<br>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>


<div class="sidebar-item">

<div class="title">Archives</div>

<ul>

<?php wp_get_archives(); ?>

</ul>

</div> <!-- Archives div -->






<?php endif; ?>



</div> <!-- Sidebar div -->