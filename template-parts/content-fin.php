<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yellowtractor
 */

?>
<div class="single-work-post">
<div class="post-image-wrap">
	<?php if ( has_post_thumbnail() ) {
		yellowtractor_post_thumbnail();
	}
	else { ?>
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/clement-default-unsplash.jpg" alt="<?php the_title(); ?>" />
	<?php
	} ?>

	<div class="text-cover">
	<?php if ( is_singular() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
	else :
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;
	?>
</div>
</div>
<div class="container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php


		if ( 'post' === get_post_type() ) :
			?>

		<?php endif; ?>
	</header><!-- .entry-header -->



	<div class="entry-meta">
		<?php

		?>
		<i class="far fa-clock" aria-hidden="true"></i>
		<time class="font--s font--l"><?php echo meks_time_ago(); ?> </time>
		<span class="cat-links">
			<?php //the_category(' ');
			//$cat_ID;
			$categories = get_the_category();
  		$separator = ' , ';
  		$output = '';
  		if($categories){
    		foreach($categories as $category) {
        		$rl_category_color = rl_color($category->cat_ID);
       		 $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ).'"class="category-fin-'.$category->slug .'">'.$category->cat_name.'</a>'.$separator;//. '" style="color:'.$rl_category_color
    		}
    	echo trim($output, $separator);
		}
			 ?>
		</span>
	</div><!-- .entry-meta -->

	<div class="entry-content">

		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'yellowtractor' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yellowtractor' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<?php yellowtractor_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>
