<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alf
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="hero" style="background-image: url('https://images.unsplash.com/photo-1445262801997-d50c1f12cb4d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=1c5eea68b09b03659193401c54300ac7&auto=format&fit=crop&w=1950&q=80')">
			<div class="hero-overlay">
				<div class="position-relative overflow-hidden p-3 p-md-5 text-center" >
					<div class="col-md-8 p-lg-5 mx-auto my-5">
						<h1 class="display-4 font-weight-normal">Arin Webber-Wisely</h1>
						<p>St. Louis Realtor</p>
					</div>
				</div>
			</div>
		</div>


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
