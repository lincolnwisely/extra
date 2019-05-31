<?php
/*
Template Name: Vince
*/
get_header();
?>

<div class="container">
  <div class="row">
  <div class="col-md-9">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'teaser' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
  </div><!-- #primary -->

  <?php
get_sidebar();
get_footer();
