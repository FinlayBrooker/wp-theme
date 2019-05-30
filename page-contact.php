<?php
/**
 * Template name: Get in Touch Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yellowtractor
 */


get_header(); ?>
<div class="page-contact">
     <div class="wrap">
		 <div class="banner-contact">
<iframe class="top-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.800911311418!2d-2.0972242840151223!3d57.1404656809472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e3a061c3c99%3A0x4fbdc8c531bc8633!2sAdmiral+Court%2C+Poynernook+Rd%2C+Aberdeen+AB11+5QX!5e0!3m2!1sen!2suk!4v1535642625524" frameborder="0" style="border:0" allowfullscreen></iframe>
		 </div>
	 </div>

   <div class="wrap wrap--x-sm">
     <div class="container">
       <div class="row">
           <div class="col col--7-of-12">
             <div class="intro txt-side--l">
               <h1>Get in Touch</h1>



                <?php
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/content', 'page-fw' );

                endwhile; // End of the loop.
                ?>
            </div>
        </div>

        <div class="col col--5-of-12">
          <div class="sidebar-menu">
            <img src="">

          <div class="address-wrap">
          <p><i class="fas fa-home"></i><strong>Office</strong></p>
                    <div class="address-block">
                    <address>Address 1<br /> Address 2<br />city,<br />Postcode</address>
                    </div>



                <p><i class="fas fa-envelope"></i><a href"mailto:someone.co.uk">someone@somewhere.co.uk</a></p>

                <p><i class="fas fa-phone"></i>00000 000000</p>
            </div>


                <div class="featured-box bg-cream">
                  <div class="featured-box-text">
                <p><i class="fas fa-home"></i><strong>Featured</strong></p>
                          <div class="address-block">
                           <address>Address 1<br /> Address 2<br />city,<br />Postcode</address>
                          </div>
                </div>
                <iframe class="sidebar-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.800911311418!2d-2.0972242840151223!3d57.1404656809472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e3a061c3c99%3A0x4fbdc8c531bc8633!2sAdmiral+Court%2C+Poynernook+Rd%2C+Aberdeen+AB11+5QX!5e0!3m2!1sen!2suk!4v1535642625524" frameborder="0" style="border:0" allowfullscreen></iframe>

              </div>
                <div class="address-wrap">
              <a href=""><i class="fas fa-file-alt"></i><strong>Privacy Policy</strong></a>


            </div>
          </div>
        </div>


     </div>
   </div>
    </div>

  </div>
<?php
get_footer();
