<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yellowtractor
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-fin', get_post_type() );

			//echo get_fin_post_navigation();

			?>
			<div id="post-nav" class="row container">
				<div class="col col--6-of-12">
				<?php $nextPost = get_next_post();

				if($nextPost) {
					$args = array(
						'posts_per_page' => 1,
						'include' => $nextPost->ID


					);
				$nextPost = get_posts($args);
				foreach ($nextPost as $post) {
				setup_postdata($post);
			?>

				<div class="post-previous box">
					<div class="box-wrap">
					<a href="<?php the_permalink(); ?>">

							<?php if ( has_post_thumbnail() ) {
							fins_small_post_thumbnail();
							} else { ?>
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/hex-clement-default-unsplash-173x150.png" alt="<?php the_title(); ?>" />
							<?php } ?>

							</a>
								<div class="box-1">
						<!--a class="previous" href="<?php //the_permalink(); ?>">&laquo; Previous Post</a-->

						<h4><a href="<?php the_permalink(); ?>"><?php ?>&laquo;<?php the_title(); ?></a></h4>
						<small><?php echo meks_time_ago(); ?></small>
					</div>
				</div>
			</div>

			<?php
			wp_reset_postdata();
			} //end foreach
			} // end if
		//endif;?>
			</div>
			<div class="col col--6-of-12">
			<?php

			$prevPost = get_previous_post();
			if($prevPost) {
				$args = array(
				'posts_per_page' => 1,
				'include' => $prevPost->ID
			);
			$prevPost = get_posts($args);
			foreach ($prevPost as $post) {
				setup_postdata($post);
				?>

				<div class="post-next box">
					<div class="box-wrap">
				<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) {
					fins_small_post_thumbnail();
					} else { ?>
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/hex-clement-default-unsplash-173x150.png" alt="<?php the_title(); ?>" />
					<?php } ?></a>
					<div class="box-2">
						<!--a class="next" href="<?php //the_permalink(); ?>">Next Post &raquo;</a-->
						<h4><a href="<?php the_permalink(); ?>"><?php the_title();?>&raquo;</a></h4>
						<small><?php echo meks_time_ago(); ?></strong>
					</div>
				</div>
			</div>

				<?php
				wp_reset_postdata();
			} //end foreach
			} // end if
		//endif;
		?>
	</div><?php
			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
				//comments_template();
			//endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
