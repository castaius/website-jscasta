<?php
/**
 * Theme header.
 *
 * @package JSCASTA
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'jscasta' ); ?></a>
    <div class="custom-cursor" data-cursor aria-hidden="true"></div>

    <header class="site-header" data-header>
      <nav class="nav-shell" aria-label="<?php esc_attr_e( 'Primary navigation', 'jscasta' ); ?>">
        <a class="brand" href="<?php echo esc_url( home_url( '/#home' ) ); ?>" aria-label="<?php esc_attr_e( 'JSCASTA home', 'jscasta' ); ?>">
          <?php if ( has_custom_logo() ) : ?>
            <?php
            echo wp_get_attachment_image(
            	get_theme_mod( 'custom_logo' ),
            	'full',
            	false,
            	array(
            		'class' => 'custom-logo',
            		'alt'   => get_bloginfo( 'name' ),
            	)
            );
            ?>
          <?php else : ?>
            <img src="<?php echo jscasta_asset_uri( 'icons/mark.svg' ); ?>" alt="" width="34" height="34" />
            <span>JSCASTA</span>
          <?php endif; ?>
        </a>

        <button
          class="mobile-toggle"
          type="button"
          aria-label="<?php esc_attr_e( 'Open navigation menu', 'jscasta' ); ?>"
          aria-expanded="false"
          data-menu-toggle
        >
          <span></span>
          <span></span>
        </button>

        <div class="nav-panel" data-menu-panel>
          <?php
          wp_nav_menu( array(
          	'theme_location' => 'primary',
          	'container'      => false,
          	'menu_class'     => 'nav-links',
          	'fallback_cb'    => 'jscasta_fallback_primary_menu',
          	'depth'          => 2,
          ) );
          ?>
          <a class="button button-primary nav-cta" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">
            <?php esc_html_e( 'Book JSCASTA', 'jscasta' ); ?>
          </a>
          <div class="language-switcher" aria-label="<?php esc_attr_e( 'Language selector', 'jscasta' ); ?>">
            <a class="is-active" href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="en" aria-current="page">EN</a>
            <a href="<?php echo esc_url( home_url( '/index-es.html' ) ); ?>" hreflang="es">ES</a>
          </div>
        </div>
      </nav>
    </header>
