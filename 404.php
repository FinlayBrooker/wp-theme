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

      <div class="wrap page-content wrap--med">
		    <div class="hex-container">
          <div class="hex bg-dark">
            <div class="display-404">
            <h1 class="title-404">404</h1>
            <p class="message-404">Something has gone wrong here, the page you are trying to find does not exsits.</p>
            <p class="message-404">Try finding your way back home.</p>
          </div>
            <div class="nav-404">
              <a class="link-home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <div class="btn--green">Take me home</div>
              </a>
          </div>
            <div class="hex-bit1 bg-dark"></div>
            <div class="hex-bit2 bg-dark"></div></div>

         </div>
				</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
