		<footer id="footer">
			<!-- CLIENT FOOTER HTML CODE GOES HERE -->
		</footer>

	</div>

	<?php wp_footer(); ?>

<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- share this javascript -->
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-aab18389-9d85-48ec-1960-460aabcad4c1"}); </script>

<!-- custom javascirpt functions -->
<script src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>

<script language="javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.tweet.js" type="text/javascript"></script>

<script type='text/javascript'>
	jQuery(function($){
		$(".tweet").tweet({
			username: "contentlead",
			avatar_size: 48,
			count: 3,
			loading_text: "loading tweets...",
			template: "{avatar} {time} {text} {retweet_action}"
		});
	}).bind("loaded", function(){
		$(this).find("a.tweet_action").click(function(ev) {
		  window.open(this.href, "Retweet",
					  'menubar=0,resizable=0,width=550,height=420,top=200,left=400');
		  ev.preventDefault();
		});
	  });
</script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
	
</body>

</html>
