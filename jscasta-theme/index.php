<?php
/**
 * Main template file.
 *
 * @package JSCASTA
 */

get_header();
?>

    <main id="main">
      <section class="section-light contact">
        <div class="container">
          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : ?>
              <?php the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class( 'about-copy' ); ?>>
                <p class="eyebrow dark"><?php esc_html_e( 'Latest', 'jscasta' ); ?></p>
                <h1><?php the_title(); ?></h1>
                <?php if ( has_post_thumbnail() ) : ?>
                  <div class="portrait-frame"><?php the_post_thumbnail( 'large' ); ?></div>
                <?php endif; ?>
                <?php the_excerpt(); ?>
                <a class="button button-dark" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'jscasta' ); ?></a>
              </article>
            <?php endwhile; ?>
            <?php the_posts_pagination(); ?>
          <?php else : ?>
            <div class="about-copy">
              <p class="eyebrow dark"><?php esc_html_e( 'No posts', 'jscasta' ); ?></p>
              <h1><?php esc_html_e( 'Nothing found', 'jscasta' ); ?></h1>
            </div>
          <?php endif; ?>
        </div>
      </section>
    </main>

<?php
get_footer();
