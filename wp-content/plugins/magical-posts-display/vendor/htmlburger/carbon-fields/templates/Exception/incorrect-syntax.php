<style>a.carbon-errors-dismiss { float: right; margin: 5px; text-decoration: none; color: #0073aa; }
	a.carbon-errors-dismiss span.dashicons-dismiss { font-size: 14px; line-height: 20px; color: #b4b9be }
	a.carbon-errors-dismiss:hover span.dashicons-dismiss { color: #cc0000 }

	.carbon-errors-log .carbon-errors-more { display: none; }
	.carbon-errors-log.expanded .carbon-errors-more { display: block; }
	.carbon-errors-log.expanded .carbon-errors-expand { display: none; }</style>

<script>
	jQuery(function ($) {
		var $container = $('.carbon-errors-log');

		$('.carbon-errors-expand').on('click', function () {
			$container.addClass('expanded');
		});

		$('.carbon-errors-dismiss').on('click', function () {
			$container.slideUp();
			carbon.docCookies.setItem(<br />
<b>Warning<\/b>:  Undefined variable $hideErrorsCookieName in <b>C:\xampp\htdocs\brk\wp-content\plugins\magical-posts-display\vendor\htmlburger\carbon-fields\templates\Exception\incorrect-syntax.php<\/b> on line <b>21<\/b><br />
null, "1", Infinity);
		});
	})
</script>



<div class="error carbon-errors-log">
	<a href="#" class="carbon-errors-dismiss"><span class="dashicons dashicons-dismiss" style=" "></span>Dismiss</a>

	<p>Your site seems to be slightly misconfigured. </p>
<p><a href="#" class="carbon-errors-expand">Tell me more</a></p> 

	<div class="carbon-errors-more">
		<p>Carbon Fields library encountered errors that may prevent your custom fields or theme options to work properly. Here's a quick summary of the issue<br>
<b>Warning</b>:  Undefined variable $plural in <b>C:\xampp\htdocs\brk\wp-content\plugins\magical-posts-display\vendor\htmlburger\carbon-fields\templates\Exception\incorrect-syntax.php</b> on line <b>32</b><br>
: </p>

		<ol>
			<br>
<b>Warning</b>:  Undefined variable $errors in <b>C:\xampp\htdocs\brk\wp-content\plugins\magical-posts-display\vendor\htmlburger\carbon-fields\templates\Exception\incorrect-syntax.php</b> on line <b>35</b><br>
<br>
<b>Warning</b>:  foreach() argument must be of type array|object, null given in <b>C:\xampp\htdocs\brk\wp-content\plugins\magical-posts-display\vendor\htmlburger\carbon-fields\templates\Exception\incorrect-syntax.php</b> on line <b>35</b><br>
	
		</ol>

		<p>You might want to get in touch with a developer regarding the issue<br>
<b>Warning</b>:  Undefined variable $plural in <b>C:\xampp\htdocs\brk\wp-content\plugins\magical-posts-display\vendor\htmlburger\carbon-fields\templates\Exception\incorrect-syntax.php</b> on line <b>40</b><br>
. If you feel adventurous, try enabling <code>WP_DEBUG</code> in your wp-config.php. </p>
	</div>
</div>