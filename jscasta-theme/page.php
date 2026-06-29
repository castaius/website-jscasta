<?php
/**
 * Page template.
 *
 * @package JSCASTA
 */

get_header();
?>

    <main id="main">
      <section class="section-light contact">
        <div class="container contact-grid">
          <div class="about-copy">
            <?php while ( have_posts() ) : ?>
              <?php the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <p class="eyebrow dark"><?php esc_html_e( 'JSCASTA', 'jscasta' ); ?></p>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
              </article>
            <?php endwhile; ?>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </section>
    </main>

<?php
get_footer();
