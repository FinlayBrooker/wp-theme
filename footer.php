<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yellowtractor
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
	     <div class="wrap wrap--x-sm">
			<div class="container">
				<div class="row">
					<div class="center">


						 </div>

				</div>
					 <div class="row">


						 <div class="col col--3-of-12">




				 		</div>

								 <div class="col col--6-of-12">

									 <div class="txt-white centered footer-links">
										 Contact Me</br>
										 <a href="https://www.facebook.com/profile.php?id=100008379486858">
											 <i class="fab fa-facebook-square facebook icon"></i>
											</a>
											<a href="https://www.linkedin.com/in/finlay-brooker-999309144/">
												<i class="fab fa-linkedin linkedin icon"></i>
											</a>
											<a href="<?php echo get_permalink( get_page_by_title( 'Contact' ) )?>">
												<i class="fas fa-envelope-square mail icon"></i>
											</a>
									</div>


							 </div>

							 <div class="col col--3-of-12">




						 </div>

						 </div>
				 </div>
			 </div>

				<div class="sub-footer-wrap">


					<div class="row">
						<div class="container">


									<div class="col col--5-of-12">
										<p class="copyright">© Copyright Company 2018</p>
									</div>

									<div class="col col--7-of-12">
										<p class="design">Design: <a href="http://www.yellowtractor.co.uk">Yellow Tractor</a></p>


									</div>




					 </div><!-- .container -->
				 </div><!-- .row -->
			 </div><!-- .sub-footer wrap-->


	 </div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
