<?php
add_action('wp_head', 'mixpanel_meta_codes');
function mixpanel_meta_codes() {
?>
<!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,
e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
mixpanel.init("1afc40b5c1e9e8238ec0abe60c7a9601");</script><!-- end Mixpanel -->
<script type="text/javascript">
	mixpanel.set_config({
		"track_links_timeout": 750
	});
	mixpanel.register_once({
		"Landing Page": window.location.href
	});
	mixpanel.register({
		"VERSION": "2"
	});
	mixpanel.track_links("#social_connect a", "Social Button Click", function(ele) { 
		var returnVars = { 
			"Type": $(ele).data("type"), 
			"Page": window.location.href
		};
		return returnVars;
	});
	mixpanel.track_forms("#search-5 form", "Search Form", function(ele) {
		var returnVars = { 
			"Search Terms": $("input[name=s]", ele).val(),
			"Page": window.location.href
		};
		return returnVars;
	});

	mixpanel.track_links("a.track.lgn365", "LGN365", function(ele) {
		var returnVars = { 
			"Page": window.location.href,
			"Link": $(ele).attr("href") || "",
			"Location": $(ele).data("name")
		};
		return returnVars;
	});

	mixpanel.track_links("a.track.click", "Click", function(ele) {
		var returnVars = { 
			"Page": window.location.href,
			"Link": $(ele).attr("href") || "",
			"Click Name": $(ele).data("name")
		};
		return returnVars;
	});
<?php if (is_front_page()) { /* Homepage */ ?>
	mixpanel.track("Viewed Homepage");
<?php } ?>
<?php if (is_single()) { /* Article Page */ ?>
	mixpanel.track(
		"Viewed Article",
		{
			"Post ID": "<?= get_the_ID(); ?>",
			"Post Title": "<?= addslashes(the_title('', '', false)); ?>"
		}
	);
<?php } ?>
<?php if (is_page()) { /* Content Page */ ?>
	mixpanel.track(
		"Viewed Page",
		{
			"Page ID": "<?= get_the_ID(); ?>",
			"Page Title": "<?= addslashes(the_title('', '', false)); ?>"
		}
	);
<?php } ?>
<?php if (is_category()) { /* Category Page */ ?>
	mixpanel.track(
		"Viewed Category",
		{
			"Category Name": "<?= addslashes(single_cat_title('', false)); ?>"
		}
	);
<?php } ?>
<?php if (is_tag()) { /* Tag Page */ ?>
	mixpanel.track(
		"Viewed Tag",
		{
			"Tag Name": "<?= addslashes(single_tag_title('', false)); ?>"
		}
	);
<?php } ?>
<?php if (is_author()) { /* Author Page */ ?>
	mixpanel.track("Viewed Author");
<?php } ?>
<?php if (is_page() && get_the_ID() == 7144) { /* Track Double Opt In */ ?>
	// Optimizely Conversion
	window.optimizely = window.optimizely || []; 
	window.optimizely.push(['trackEvent', "double_opt_in"]);

	mixpanel.track("Double Opt In Page");
<?php } ?>
<?php if (is_page() && get_the_ID() == 7029) { /* Track Double Opt In */ ?>
	// Optimizely Conversion
	window.optimizely = window.optimizely || []; 
	window.optimizely.push(['trackEvent', "confirmed_email"]);

	mixpanel.track("Confirmed Email Page");
<?php } ?>
<?php if (is_front_page()) { /* Track Front Page Email Form *GOAL* */ ?>
	mixpanel.track_forms("#gform_wrapper_6 form", "Email Opt In", function(ele) {
		// Optimizely Conversion
		window.optimizely = window.optimizely || []; 
		window.optimizely.push(['trackEvent', "email_opt_in"]);
		
		mixpanel.name_tag($("input[name=EMAIL]", ele).val());
		mixpanel.people.set({
			"$email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val()
		});
		mixpanel.register({
			"Email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val()
		});
		mixpanel.alias($("input[name=EMAIL]", ele).val());
		var returnVars = { 
			"Email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val(),
			"Page": window.location.href,
			"Location": "Homepage"
		};
		return returnVars;
	});
<?php } ?>
<?php /* Track Side Bar Email Form *GOAL* */ ?>
mixpanel.track_forms(".sidebar-newsletter form", "Email Opt In", function(ele) {
		mixpanel.name_tag($("input[name=EMAIL]", ele).val());
		mixpanel.people.set({
			"$email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val()
		});
		mixpanel.register({
			"Email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val()
		});
		mixpanel.alias($("input[name=EMAIL]", ele).val());
		var returnVars = { 
			"Email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val(),
			"Page": window.location.href,
			"Location": "Sidebar"
		};
		return returnVars;
	});
<?php if (is_single()) { /* Track Comments Footer Email Form *GOAL* */ ?>
	mixpanel.track_forms(".newsletter.box form", "Email Opt In", function(ele) {
		mixpanel.name_tag($("input[name=EMAIL]", ele).val());
		mixpanel.people.set({
			"$email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val()
		});
		mixpanel.register({
			"Email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val()
		});
		mixpanel.alias($("input[name=EMAIL]", ele).val());
		var returnVars = { 
			"Email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val(),
			"Page": window.location.href,
			"Location": "Post Footer"
		};
		return returnVars;
	});
<?php } ?>
<?php if (is_page() && get_the_ID() == 3544) { /* Track Beginners Page */ ?>
	mixpanel.track("Viewed Beginners Page");
	mixpanel.track_forms(".about-form form", "Email Opt In", function(ele) {
		mixpanel.name_tag($("input[name=EMAIL]", ele).val());
		mixpanel.people.set({
			"$email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val()
		});
		mixpanel.register({
			"Email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val()
		});
		mixpanel.alias($("input[name=EMAIL]", ele).val());
		var returnVars = { 
			"Email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val(),
			"Page": window.location.href,
			"Location": "Beginners Page #" + $(ele).data("optinFormCount")
		};
		return returnVars;
	});
<?php } ?>
<?php if (is_single() && get_the_ID() == 3897) { /* Track Clean Eating Page */ ?>
	mixpanel.track("Viewed Clean Eating Page");
	mixpanel.track_forms(".about-form form", "Email Opt In", function(ele) {
		mixpanel.name_tag($("input[name=EMAIL]", ele).val());
		mixpanel.people.set({
			"$email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val()
		});
		mixpanel.register({
			"Email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val()
		});
		mixpanel.alias($("input[name=EMAIL]", ele).val());
		var returnVars = { 
			"Email": $("input[name=EMAIL]", ele).val(),
			"Gender": $("input[name=GENDER]:checked", ele).val(),
			"Page": window.location.href,
			"Location": "Clean Eating Page #" + $(ele).data("optinFormCount")
		};
		return returnVars;
	});
<?php } ?>
<?php if (is_single() && get_the_ID() == 5639) { /* Track LGN365 Is Here Page */ ?>
	mixpanel.track("Viewed LGN365 Is Here Page");
	mixpanel.track_links("#cartlink", "LGN365", function(ele) {
		var returnVars = { 
			"Page": window.location.href,
			"Location": "Buy Now Image"
		};
		return returnVars;
	});
	mixpanel.track_links("#lgn365com", "LGN365", function(ele) {
		var returnVars = { 
			"Page": window.location.href,
			"Location": "LGN365.com Link"
		};
		return returnVars;
	});
	mixpanel.track_links("#lgn365jcd", "LGN365", function(ele) {
		var returnVars = { 
			"Page": window.location.href,
			"Location": "LGN365 JCD Landing Page Link"
		};
		return returnVars;
	});
<?php } ?>
<?php if (is_page() && get_the_ID() == 44) { /* Track Contact Page Form *GOAL* */ ?>
	mixpanel.track_forms("#gform_2", "Contact Form", function(ele) {
		mixpanel.name_tag($("#input_2_2", ele).val());
		mixpanel.people.set({
			"$email": $("#input_2_2", ele).val(),
			"$name": $("#input_2_1", ele).val()
		});
		mixpanel.register({
			"Email": $("#input_2_2", ele).val()
		});
		mixpanel.alias($("#input_2_2", ele).val());
		var returnVars = { 
			"Name": $("#input_2_1", ele).val(), 
			"Email": $("#input_2_2", ele).val(),
			"Subject": $("#input_2_4", ele).val(),
			"Page": window.location.href
		};
		return returnVars;
	});
<?php } ?>
<?php if (is_page() && get_the_ID() == 11) { /* Track Consultations Page Form *GOAL* */ ?>
	mixpanel.track_forms("#gform_7", "Consultation Form", function(ele) {
		var firstName = $("#input_7_1_3", ele).val();
		var lastName = $("#input_7_1_6", ele).val();
		var name = firstName + " " + lastName;
		var email = $("#input_7_1_4", ele).val();
		mixpanel.name_tag(name);
		mixpanel.people.set({
			"$email": email,
			"$first_name": firstName,
			"$last_name": lastName
		});
		mixpanel.register({
			"Email": email
		});
		mixpanel.alias(email);
		var returnVars = { 
			"Name": name, 
			"Email": email,
			"Page": window.location.href
		};
		return returnVars;
	});
<?php } ?>
<?php if (is_front_page()) { /* Track FitSmart Podcast *GOAL* */ ?>
	mixpanel.track_links("#text-245335643 a", "FitSmart Podcast", function(ele) {
		var returnVars = { 
			"Page": window.location.href,
			"Location": "Homepage"
		};
		return returnVars;
	});
<?php } ?>
<?php if (!is_front_page()) { /* Track Side Bar LGN Click *GOAL* */ ?>
	mixpanel.track_links("#text-245335648 a", "LGN365", function(ele) {
		var returnVars = { 
			"Page": window.location.href,
			"Location": "Side Bar"
		};
		return returnVars;
	});
<?php } ?>
</script>
<?php
/* TO DO MixPanel
 * * Track Donate Button and Links
 * * Track Comment Submission
 * * Track Contact/Consult Form Errors
 * * Track all YouTube Videos
 * * Track Wistia Video for LGN365
 * * Track Social Buttons using GA and MixPanel
 */
}