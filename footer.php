<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Professional
 */
?>

	</div><!-- #content -->
</div><!-- #page -->

<?php get_template_part('sidebar', 'footer'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info col-md-4">
            <a href="https://github.com/CodeForAfrica/StarReports.WP.Theme" target="_blank"><img src="<?php echo get_template_directory_uri()."/defaults/images/github.png"; ?>" style="height:20px;margin-right:10px">
            <i>Code is Open Source and available on Github</i></a>
		</div><!-- .site-info -->
		<div class="footer-menu col-md-8">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</div>	
	</div><!--.container-->	
</footer><!-- #colophon -->

<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44795600-11', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
