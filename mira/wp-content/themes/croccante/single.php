<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package croccante
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true" title="%title">' . esc_html__( 'Next Post', 'croccante' ) . '<i class="fa fa-lg fa-long-arrow-right spaceLeft"></i></span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Next post:', 'croccante' ) . '</span> ' ,
				'prev_text' => '<span class="meta-nav" aria-hidden="true" title="%title"><i class="fa fa-lg fa-long-arrow-left spaceRight"></i>' . __( 'Previous Post', 'croccante' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'croccante' ) . '</span> ' ,
			) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_sidebar('push');
get_footer();
