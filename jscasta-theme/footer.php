<?php
/**
 * Theme footer.
 *
 * @package JSCASTA
 */
?>
    <div
      class="video-modal"
      id="video-modal"
      role="dialog"
      aria-modal="true"
      aria-labelledby="video-modal-title"
      aria-hidden="true"
      data-video-modal
    >
      <div class="video-modal-backdrop" data-video-close></div>
      <div class="video-modal-panel" role="document">
        <button class="video-modal-close" type="button" aria-label="<?php esc_attr_e( 'Close video', 'jscasta' ); ?>" data-video-close>Close</button>
        <div class="video-modal-frame">
          <h2 id="video-modal-title">JSCASTA Reel</h2>
          <p>JSCASTA reel placeholder. Replace this area with YouTube, Vimeo, or a hosted video embed.</p>
        </div>
      </div>
    </div>

    <footer class="site-footer section-dark">
      <div class="container footer-grid">
        <div>
          <p class="footer-kicker"><?php esc_html_e( 'Thank you for visiting', 'jscasta' ); ?></p>
          <a class="footer-brand" href="<?php echo esc_url( home_url( '/#home' ) ); ?>">JSCASTA</a>
          <p><?php esc_html_e( 'Magic / Psychology / Storytelling / Virtual Production', 'jscasta' ); ?></p>
        </div>

        <nav aria-label="<?php esc_attr_e( 'Footer navigation', 'jscasta' ); ?>">
          <?php
          wp_nav_menu( array(
          	'theme_location' => 'footer',
          	'container'      => false,
          	'items_wrap'     => '%3$s',
          	'fallback_cb'    => 'jscasta_fallback_footer_menu',
          	'depth'          => 1,
          ) );
          ?>
          <!-- Future WordPress: this can become the blog/archive label instead of showing the word "Blog" publicly. -->
          <a href="<?php echo esc_url( home_url( '/magical-thinking/' ) ); ?>">Magical Thinking</a>
        </nav>

        <div class="footer-socials" aria-label="<?php esc_attr_e( 'Social links', 'jscasta' ); ?>">
          <a href="https://www.instagram.com/jscasta/" target="_blank" rel="noreferrer">Instagram</a>
          <a href="https://www.tiktok.com/@jscasta" target="_blank" rel="noreferrer">TikTok</a>
          <a href="https://www.youtube.com/@jscasta" target="_blank" rel="noreferrer">YouTube</a>
          <a href="https://www.linkedin.com/" target="_blank" rel="noreferrer">LinkedIn</a>
        </div>
      </div>

      <?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
        <div class="container footer-widgets">
          <?php dynamic_sidebar( 'footer-widgets' ); ?>
        </div>
      <?php endif; ?>

      <p class="copyright">
        <?php
        printf(
        	esc_html__( '%1$s JSCASTA. All rights reserved.', 'jscasta' ),
        	esc_html( gmdate( 'Y' ) )
        );
        ?>
      </p>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
