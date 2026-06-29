<?php
/**
 * Archive template.
 *
 * @package JSCASTA
 */

get_header();
?>

    <main id="main">
      <section class="section-light contact">
        <div class="container">
          <div class="section-intro reveal">
            <p class="eyebrow dark"><?php esc_html_e( 'Archive', 'jscasta' ); ?></p>
            <h1><?php the_archive_title(); ?></h1>
            <?php the_archive_description( '<p>', '</p>' ); ?>
          </div>

          <?php if ( have_posts() ) : ?>
            <div class="testimonial-grid">
              <?php while ( have_posts() ) : ?>
                <?php the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'testimonial-card reveal' ); ?>>
                  <h2><?php the_title(); ?></h2>
                  <?php the_excerpt(); ?>
                  <a class="button button-dark" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'jscasta' ); ?></a>
                </article>
              <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(); ?>
          <?php endif; ?>
        </div>
      </section>
    </main>

<?php
get_footer();
