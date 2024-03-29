<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Professional
 */

get_header(); ?>
<div class="col-md-12">
<div class="col-md-4 col-sm-4 showcase" style="display: block;">1</div>
<div class="col-md-4 col-sm-4 showcase" style="display: block;">2</div>
<div class="col-md-4 col-sm-4 showcase" style="display: block;">3</div>
</div>
	<div id="primary" class="content-area col-md-12">
		<div id="home-title">
			<?php _e('Latest User Submissions', 'professional'); ?>
		</div>
		<main id="main" class="site-main" role="main">
		<?php $count = 0; ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					if($count == 0)
						echo "<div class='row'>" ;
					elseif($count%2 == 0)
						echo "</div><!--.row--><div class='row'>";
					 
					if (isset($option_setting['logo'])) :
						get_template_part( 'content', 'grid2' );
					else :
						get_template_part( 'defaults/content', 'grid2-d' );
					endif;
					$count++;
				?>
			<?php endwhile; ?>
			<?php echo "</div><!--.row-->"; ?>
			
			<?php professional_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>