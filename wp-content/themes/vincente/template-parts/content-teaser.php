<?php
/**
 * Template part for displaying teasers of posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vincente
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class('article-teaser'); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

			?>

	</header><!-- .entry-header -->


	<div class="entry-content">

    <?php
        foreach((get_the_category()) as $category) {
          echo '<a href="' . $category->cat_slug . '">' . $category->cat_name . '</a>' . ' ';
      }
    ?>

  	<?php if ( has_post_thumbnail() ) {
	          the_post_thumbnail('medium_large');
          }
    ?>
      <p class="teaser-description">
    <?php
    $mykey_values = get_post_custom_values( 'standard_seo_post_meta_description' );
    if (!empty($mykey_values)) {
      foreach ( $mykey_values as $key => $value ) {
        echo $value;
      }
    }
    ?>
    </p>

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
