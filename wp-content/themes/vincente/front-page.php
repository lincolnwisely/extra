<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vincente
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

		<!-- <div class="hero" style="background-image: url('https://images.unsplash.com/photo-1445262801997-d50c1f12cb4d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=1c5eea68b09b03659193401c54300ac7&auto=format&fit=crop&w=1950&q=80')">
			<div class="hero-overlay">
				<div class="position-relative overflow-hidden p-3 p-md-5 text-center" >
					<div class="col-md-8 p-lg-5 mx-auto my-5">
						<h1 class="display-4 font-weight-normal">Arin Webber-Wisely</h1>
						<p>St. Louis Realtor</p>
					</div>
				</div>
			</div>
		</div> -->

  <!-- <div class="row"> -->
  <div id="sticky-on-front">
    <?php
    // $sticky = get_option( 'sticky_posts' );
    // $query = new WP_Query( 'p=' . $sticky[0] );
    //   if ( $query->have_posts() ) {
    //     $query->the_post();
    //     // display your sticky post here (however you like to do it)
    // } else {
    //   the_header_image_tag();
    // }
    $sticky = get_option( 'sticky_posts' );
if ( !empty( $sticky ) ) {  // don't show anything if there are no sticky posts
    $args = array(
        'posts_per_page' => -1,  // show all sticky posts
        'post__in'  => $sticky,
        'ignore_sticky_posts' => 1
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) {
        $query->the_post();
        // display your sticky post here (however you like to do it)
    }
}
    ?>

<?php
/**
 * Exclude sticky posts from home page.
 */
// IDK WHAT IM DOING ....
add_action('pre_get_posts', 'vincente_ignore_sticky_posts');
 ?>

    </div>

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'teaser' );

		endwhile; // End of the loop.
		?>
  </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
