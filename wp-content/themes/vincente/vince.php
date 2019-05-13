<?php
/*
Template Name: Vince
*/
get_header();
?>

<h1>VINCE</h1>
<img src="https://scontent-atl3-1.cdninstagram.com/vp/0690a298e7bc85affa86541355c50c9c/5D5B7642/t51.2885-15/e35/27573711_978169459004522_1894171712447053824_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com"/>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

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
get_footer();
