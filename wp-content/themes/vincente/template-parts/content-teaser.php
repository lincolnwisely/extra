<?php
/**
 * Template part for displaying teasers of posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vincente
 */

?>



<article id="post-<?php the_ID(); ?>"
<?php if(is_sticky()){
  post_class('article-teaser col-12');
} else {
  post_class('article-teaser col-sm-6 col-md-4 col-12');
}
?>>
	<header class="entry-header">
  <div class="category-link">
    <?php the_category(' | ') ?>
    </div>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

			?>
	</header><!-- .entry-header -->


	<div class="entry-content">
    <div class="teaser-img">
      <?php if ( has_post_thumbnail() ) : ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php if(is_sticky()){
            the_post_thumbnail('full');
          } else {
            the_post_thumbnail('medium-large');
          }
          ?>
          </a>
      <?php endif; ?>

    </div>
    <!-- <p class="teaser-description">
    <?php
    $mykey_values = get_post_custom_values( 'standard_seo_post_meta_description' );
    if (!empty($mykey_values)) {
      foreach ( $mykey_values as $key => $value ) {
        echo $value;
      }
    }
    ?>
    </p> -->

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
