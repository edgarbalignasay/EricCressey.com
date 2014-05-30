<?php
add_action('wp_head', 'mixpanel_meta_codes');
function mixpanel_meta_codes() {
?>
<!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);
b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
mixpanel.init("eda64be9a5ead0a360c14ce8d5286c42");</script><!-- end Mixpanel -->
<script type="text/javascript">
	mixpanel.set_config({
		"track_links_timeout": 750
	});
	mixpanel.register_once({
		"Landing Page": window.location.href
	});
	mixpanel.track_forms("#cse-search-box", "Google Search Form", function(ele) {
		var returnVars = { 
			"Search Terms": $("input[name=q]", ele).val(),
			"Page": window.location.href
		};
		return returnVars;
	});

	var clickBankAff = _optly.getParameterByName("cbaffi").toLowerCase() || "";
    if (clickBankAff && clickBankAff != "0" && clickBankAff != 0) {
      mixpanel.register({
        "Clickbank Affiliate": clickBankAff
      });
      mixpanel.people.set({
        "Clickbank Affiliate": clickBankAff
      });
    }

	// ?hop= code
	var clickBankAff = _optly.getParameterByName("hop").toLowerCase() || "";
    if (clickBankAff && clickBankAff != "0" && clickBankAff != 0) {
      mixpanel.register({
        "Clickbank Affiliate": clickBankAff
      });
      mixpanel.people.set({
        "Clickbank Affiliate": clickBankAff
      });
    }

    // ?ref= code
    var refCode = _optly.getParameterByName("ref") || "";
    if (refCode && refCode != "0" && refCode != 0 && refCode.indexOf("@") == -1) {
      mixpanel.register({
        "Referral Code": refCode
      });
      mixpanel.people.set({
        "Referral Code": refCode
      });
    }

    // Track Form Signups
    jQuery(function($) {
	    mixpanel.track_forms("form.track-form", "Form Signup", function(ele) {
	        var name = $("input.name", ele).val();
	        var email = $("input.email", ele).val();
	        if (email) {
		        
		        // Optimizely Conversion
		        window.optimizely = window.optimizely || []; 
		        window.optimizely.push(['trackEvent', "email_opt_in"]);
		        
		        // Qualaroo Identify
		        window._kiq = window._kiq || []; 
		        window._kiq.push(["identify", email]);
		        
		        if (name) { mixpanel.name_tag(name); }
		        else { mixpanel.name_tag(email); }
		        
		        mixpanel.people.set({
		            "$email": email,
		            "$name": name
		        });

		        mixpanel.register({
		            "Email": email,
		            "Name": name
		        });

		        mixpanel.alias(email);
		        var returnVars = { 
		            "Page": window.location.href,
		            "Form Name": $(ele).data("formName")
		        };

		        return returnVars;
		    } else { 
		    	return false;
		    }
	    });
	});
	
	// Track Link Clicks
	jQuery(function($) {
		mixpanel.track_links("a.track-click", "Click", function(ele) {
			var returnVars = { 
				"Page": window.location.href,
				"Link": $(ele).attr("href") || "",
				"Click Name": $(ele).data("name")
			};
			return returnVars;
		});
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

</script>
<?php
}