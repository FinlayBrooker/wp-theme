<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yellowtractor
 */

get_header(); ?>
 <div class="page-archive">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="banner-blue">
    			<div class="projectLead">
    				<div class="centerParent">
    					<div class="centerChild">
    						<?php if ( have_posts() ) : ?>

    							<header class="page-header">
    								<?php
    									the_archive_title( '<h1 class="page-title">', '</h1>' );
    									the_archive_description( '<span class="text-highlight">', '</span>' );
    								?>
    							</header><!-- .page-header -->
    						</div>
    					</div>
    				</div>
    			</div>



    				<div class="wrap--bw">
    				 <div class="container">
    					 <article>
    						 <div class="article-content">

    							<?php
    							/* Start the Loop */
    							while ( have_posts() ) : the_post();

    								/*
    								 * Include the Post-Format-specific template for the content.
    								 * If you want to override this in a child theme, then include a file
    								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
    								 */
    								get_template_part( 'template-parts/content', get_post_format() );

    							endwhile;

    							the_posts_navigation();

    						else :

    							get_template_part( 'template-parts/content', 'none' );

    						endif; ?>


    		 			 		</div>
    						</article>
    		 			 	</div>
    		 			</div>


		</main><!-- #main -->
	</div><!-- #primary -->
</div>


<?php
get_footer();
