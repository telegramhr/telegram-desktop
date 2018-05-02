<?php

add_action('wp_footer', 'telegram_kaufland');

function telegram_kaufland() {
	if (is_single(584143)) {
		?><script>
            var iframes = ['iframe1', 'iframe2', 'iframe3'];
            jQuery(window).scroll(function () {
                for (var i in iframes) {
                    var iframe = document.getElementById(iframes[i]);
                    if (is_in_view(iframe)) {
                        iframe.contentWindow.postMessage('start', '*');
                        iframes.splice(i,1);
                    }
                }
            });

            function is_in_view(el) {
                var elemTop    = el.getBoundingClientRect().top,
                    elemBottom = el.getBoundingClientRect().bottom;
                return (elemTop < window.innerHeight && elemBottom > 100);
            };
		</script><?php
	}
}