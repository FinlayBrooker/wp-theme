<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package yellowtractor
 */

get_header();
?>

<div id="primary" class="content-area">
 <main id="main" class="site-main">
  <section class="error-404 not-found">
			<div class="banner-red">
		  <div class="projectLead">
		   <div class="centerParent">
			  <div class="centerChild">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! wandered off a bit...', 'yellowtractor' ); ?></h1>
				</header><!-- .page-header -->
			  </div>
	     </div>
      </div>
     </div>
      <div class="wrap page-content wrap--med">
		    <div class="container width-800 p-bot-50">
			    <div class="row">

					     <h3><?php esc_html_e( 'Why not try one of the links above or a search?', 'yellowtractor' ); ?></h3>

					     <?php
						   get_search_form();
				    	 ?>

          </div>
         </div>
				</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
