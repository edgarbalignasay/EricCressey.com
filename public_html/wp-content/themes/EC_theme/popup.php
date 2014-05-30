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

<a id="inline" href="#popup" style="display:none;">This shows content of popup</a>
<div style="display:none;">
<div id="popup" style="background:url(/popup/bg.png); width:800px; height:60px; padding-top:340px;">

<form action="https://www.mcssl.com/app/contactsave.asp" method="post"><input id="merchantid" name="merchantid" type="hidden" value="84520" /> <input id="ARThankyouURL" name="ARThankyouURL" type="hidden" value="www.ericcressey.com" /> <input id="copyarresponse" name="copyarresponse" type="hidden" value="1" /> <input id="custom" name="custom" type="hidden" value="0" /> <input id="defaultar" name="defaultar" type="hidden" value="178309" /> <input id="allowmulti" name="allowmulti" type="hidden" value="0" /> <input id="visiblefields" name="visiblefields" type="hidden" value="Name,Email1" /> <input id="requiredfields" name="requiredfields" type="hidden" value="Email1" />
<table width="100%">
<tr>
<td style="text-align:center">
<input name="Name" type="text" onfocus="if(this.value == this.defaultValue) this.value = ''" value="Name" style="background:url(/popup/textbox.png); height: 17px; width: 200px; border:none; color:#fff; font-size:14px; font-weight:bold; padding:7px; margin-top:0px;"/></td>
<td style="text-align:center">
<input name="Email1" type="text" onfocus="if(this.value == this.defaultValue) this.value = ''" value="Email" style="background:url(/popup/textbox.png); height: 17px; width: 200px; border:none; color:#fff; font-size:14px; font-weight:bold; padding:7px; margin-top:0px;"/></td>
<td style="text-align:center">
<input name="cmdSubmit" type="Submit" value="" style="background:url(/popup/button.png); height: 31px; width: 214px; border:none; cursor:pointer;"/></td>
</tr>
</table>
</form>

</div>
</div>