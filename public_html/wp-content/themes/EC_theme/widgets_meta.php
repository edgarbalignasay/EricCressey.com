<script type="text/javascript">
  var _optly = { 
  updateQueryString: function(key, value, url) {
    if (!url) url = window.location.href;
    var re = new RegExp("([?|&])" + key + "=.*?(&|#|$)(.*)", "gi");

    if (re.test(url)) {
        if (typeof value !== 'undefined' && value !== null)
            return url.replace(re, '$1' + key + "=" + value + '$2$3');
        else {
            var hash = url.split('#');
            url = hash[0].replace(re, '$1$3').replace(/(&|\?)$/, '');
            if (typeof hash[1] !== 'undefined' && hash[1] !== null) 
                url += '#' + hash[1];
            return url;
        }
    }
    else {
        if (typeof value !== 'undefined' && value !== null) {
            var separator = url.indexOf('?') !== -1 ? '&' : '?',
                hash = url.split('#');
            url = hash[0] + separator + key + '=' + value;
            if (typeof hash[1] !== 'undefined' && hash[1] !== null) 
                url += '#' + hash[1];
            return url;
        }
        else
            return url;
    }
  },
  setCookie: function(c_name, value, exdays) {
        var exdate=new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value=escape(value) + 
          ((exdays==null) ? "" : ("; expires="+exdate.toUTCString()));
        document.cookie=c_name + "=" + c_value;
  },
  getCookie: function(name) {
    var parts = document.cookie.split(name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
  },
  delCookie: function(c_name) {
        var exdate=new Date();
        exdate.setDate(exdate.getDate() - 365);
        var c_value=" ; expires="+exdate.toUTCString();
        document.cookie=c_name + "=" + c_value;
  },
  getParameterByName: function(name) {
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
  }
}

var deferJS = function () {
	var script = false;
	var onload = true;

	for (var i = 0; i < arguments.length; i++) {
		switch (i) {
			case 0:
				script = arguments[i];
			break;

			case 1:
				onload = arguments[i];
			break;

		}
		}

		if (script != false) {
		(function (d, t, src, onload) {
		    function async_load(){
		        var s = d.createElement(t),
		        	x = d.getElementsByTagName(t)[0];
		        s.async = true;
		        s.src = src;
		        x.parentNode.insertBefore(s, x);
		    }
		    if (onload) {
			    window.attachEvent ? window.attachEvent('onload', async_load) : window.addEventListener('load', async_load, false);
			}
		}(document, 'script', script, onload));
	}		
};
</script>

<link rel="author" href="https://plus.google.com/106907211355435072734/about" />

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(
  ['_setAccount', 'UA-17022181-5'],
  ['_setDomainName', 'none'],
  ['_setAllowLinker', true],
  ['_setSiteSpeedSampleRate', 100],
  ['_trackPageview']
);
</script>
