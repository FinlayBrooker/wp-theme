<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package yellowtractor
 */

if ( ! function_exists( 'yellowtractor_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function yellowtractor_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'yellowtractor' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'yellowtractor_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function yellowtractor_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'yellowtractor' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'yellowtractor_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function yellowtractor_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			//$categories_list = get_the_category_list( esc_html__( ', ', 'yellowtractor' ) );
			//if ( $categories_list ) {
				/* translators: 1: list of categories. */
				//var_dump($categories_list);
				//$categories_list2=str_replace(' ', '',strip_tags($categories_list));
				//var_dump($categories_list2);
				//$cat_array = explode(',', $categories_list2);
				//var_dump($cat_array);
				//$size = count($cat_array);

				//for($i=0;$i<$size;$i++){
				//	$categories_list = str_replace('>'.$cat_array[$i],'class="category-'.strtolower($cat_array[$i]).'">'.$cat_array[$i],$categories_list);

				//}

				//printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'yellowtractor' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			//}
			?><span class="cat-links"> Posted in <?php
			$categories = get_the_category();
  		$separator = ' , ';
  		$output = '';
  		if($categories){
    		foreach($categories as $category) {
        		$rl_category_color = rl_color($category->cat_ID);
        		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ).'"class="category-'.$category->slug .'">'.$category->cat_name.'</a>'.$separator;//. '" style="color:'.$rl_category_color
    		}
    	echo trim($output, $separator);
		}?></span>
		<?php

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'yellowtractor' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'yellowtractor' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		//if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		//	echo '<span class="comments-link">';
		//	comments_popup_link(
		//		sprintf(
		//			wp_kses(
		//				/* translators: %s: post title */
		//				__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'yellowtractor' ),
		//				array(
		//					'span' => array(
		//						'class' => array(),
		//					),
		//				)
		//			),
		//			get_the_title()
		//		)
		//	);
		//	echo '</span>';
		//}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'yellowtractor' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'yellowtractor_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function yellowtractor_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'fins_small_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function fins_small_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="thumbnail">
				<?php the_post_thumbnail('hex-thumb');?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			//the_post_thumbnail( 'thumbnail', array(
			//	'alt' => the_title_attribute( array(
			//		'echo' => false,
			//	) ),
			//) );
			//get the url for the featured image
			$url = get_the_post_thumbnail_url(null, 'hex-thumb');
			//separate the / parts
			$path_parts = explode('/', $url);
			$i = count($path_parts)-1;
			// find the last entry and add hex- to the file name
			$path_parts[$i] = 'hex-'.$path_parts[$i];
			// change file type to png
			$path_parts[$i] = str_replace('.jpg','.png',$path_parts[$i]);
			// reforge url
			$new_url=join('/',$path_parts);?>
			<img src="<?php echo $new_url?>"
			class="attachment-thumbnail size-hex-thumb wp-post-image"
			alt="<?php the_title_attribute( array(
					'echo' => false,
				) )?>"
			srcset="<?php echo $new_url?> 150w,
			<?php echo $new_url?> 45w"
			sizes="(max-width: 173px) 100vw, 150px"
			width="173" height="150">

		</a>

		<?php

		endif; // End is_singular().
	}
endif;
