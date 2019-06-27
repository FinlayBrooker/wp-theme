<?php
/**
 * Template name: Home Page
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

get_header(home);
?>


<div class="page-home">
  <div class="lead-section">
    <h1 class="lead">Finlay Dixon Brooker</h1>
    <p class="sub-lead">Designer || Coder || Cook</p>
  </div>
  <div class="grid-container">
    <div class="grid-item1 grid-right grid-small">
      <div class="hex bg-dark">
          <div class="hex-bit1 bg-dark"></div>
          <div class="hex-bit2 bg-dark"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-hex.svg" alt="">
      </div>
    </div>
    <div class="grid-item2 grid-left grid-small">
      <div class="hex bg-dark">
        <div class="hex-bit1 bg-dark"></div>
        <div class="hex-bit2 bg-dark"></div>
        <p>My name is Finlay Brooker. I am a coder extraordinaire</p>
        <div class="btn--gold">More</div>
      </div>
    </div>
    <div class="grid-item3 grid-right grid-small">
      <div class="hex bg-dark">
        <div class="hex-bit1 bg-dark"></div>
        <div class="hex-bit2 bg-dark"></div>

        <?php
    		if( is_active_sidebar('sidebar-2')): ?>
        <aside class="latest">
          <?php dynamic_sidebar('sidebar-2');?>
    		<?php endif;?>
      </div>
    </div>
  </div>

</div>

<?php

get_footer();
