<?php
/**
 * The Template for displaying all single posts
 *
 * @package Ribosome
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				
                <?php if(get_theme_mod('ribosome_show_nav_single', 1) == 1) { ?>
                
				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'ribosome' ); ?></h3>
					<div class="wrapper-navigation-below">
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'ribosome' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'ribosome' ) . '</span>' ); ?></span>
					</div><!-- .wrapper-navigation-below -->
				</nav><!-- .nav-single -->
                
                <?php } ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>