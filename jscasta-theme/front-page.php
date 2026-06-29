<?php
/**
 * Homepage template.
 *
 * @package JSCASTA
 */

get_header();
?>

    <main id="main">
      <?php
      get_template_part( 'template-parts/hero' );
      get_template_part( 'template-parts/services' );
      get_template_part( 'template-parts/work' );
      get_template_part( 'template-parts/about' );
      get_template_part( 'template-parts/philosophy' );
      get_template_part( 'template-parts/testimonials' );
      get_template_part( 'template-parts/resources' );
      get_template_part( 'template-parts/contact' );
      ?>
    </main>

<?php
get_footer();
