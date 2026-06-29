<?php
/**
 * Homepage hero, video, and proof sections.
 *
 * @package JSCASTA
 */
?>
      <section class="hero section-dark" id="home" aria-labelledby="hero-title">
        <div class="hero-atmosphere" aria-hidden="true">
          <span class="orb orb-one"></span>
          <span class="orb orb-two"></span>
          <span class="particle particle-one"></span>
          <span class="particle particle-two"></span>
          <span class="particle particle-three"></span>
        </div>

        <div class="container hero-grid">
          <div class="hero-copy reveal">
            <p class="eyebrow">Magic / Psychology / Storytelling / Virtual Production</p>
            <h1 id="hero-title">Impossible Moments.<br />Real Connection.</h1>
          </div>

          <div class="hero-central-action reveal" aria-label="Primary homepage actions">
            <a class="hero-booking-object" href="#contact" aria-label="Book JSCASTA">
              <span class="hero-booking-icon" aria-hidden="true">&#10022;</span>
              <span class="hero-booking-text">Book JSCASTA</span>
              <span class="hero-booking-arrow" aria-hidden="true">&rarr;</span>
            </a>
            <a class="hero-explore-link" href="#shows">Explore Experiences &rarr;</a>
          </div>

          <div class="hero-support reveal">
            <p class="hero-subhead">
              Premium magic, mentalism, storytelling, and virtual experiences for companies,
              brands, and audiences around the world.
            </p>
            <p class="cred-line">
              Professional magician &middot; Psychologist &middot; Musician &middot; Creative Industries MA &middot;
              International performer
            </p>
          </div>

          <div class="hero-visual reveal" aria-label="Cinematic portrait artwork of JSCASTA">
            <img class="hero-image" src="<?php echo esc_url( jscasta_asset_uri( 'images/hero-performance.svg' ) ); ?>" alt="JSCASTA performing on a cinematic stage" fetchpriority="high" />
            <div class="stamp" aria-hidden="true">
              <span>Live &middot; Virtual</span>
              <strong>Hybrid</strong>
            </div>
          </div>
        </div>

        <a class="scroll-indicator" href="#videos" aria-label="Scroll to video section">
          <span></span>
          Scroll
        </a>
      </section>

      <section class="video-section section-dark" id="videos" aria-labelledby="video-title">
        <div class="container video-grid">
          <div class="section-intro reveal">
            <p class="eyebrow">Watch reel</p>
            <h2 id="video-title">Watch the Experience</h2>
            <p>
              A glimpse into the performances, reactions, and impossible moments that make
              JSCASTA's work unforgettable.
            </p>
            <div class="button-row">
              <a class="button button-primary" href="#videos" data-video-open>Watch Reel</a>
              <a class="button button-secondary" href="#media">See More Videos</a>
            </div>
          </div>

          <button class="video-frame reveal" type="button" data-video-button aria-label="Play JSCASTA video preview">
            <img src="<?php echo esc_url( jscasta_asset_uri( 'images/video-thumbnail.svg' ) ); ?>" alt="Cinematic performance video thumbnail" loading="lazy" />
            <span class="play-button" aria-hidden="true"></span>
          </button>
        </div>
      </section>

      <section class="media-proof proof-merged section-dark" id="media" aria-labelledby="media-title">
        <div class="container proof-stack">
          <div class="proof-copy reveal">
            <p class="eyebrow">Proof of Work</p>
            <h2 id="media-title">Trusted by Brands, Media, and Audiences</h2>
            <p>
              From live stages to branded campaigns and viral magic videos, JSCASTA's work has
              reached millions online and connected with audiences across corporate events,
              television, press, and virtual experiences.
            </p>
          </div>

          <!-- Verify and update these stats before publishing. -->
          <div class="proof-stats" aria-label="JSCASTA proof statistics">
            <div class="proof-number-grid">
              <article class="stat-card stat-card-number reveal"><strong class="stat-number">90K+</strong><span>Instagram followers</span></article>
              <article class="stat-card stat-card-number reveal"><strong class="stat-number">45.5K+</strong><span>TikTok followers</span></article>
              <article class="stat-card stat-card-number reveal"><strong class="stat-number">10M+</strong><span>views online</span></article>
            </div>
            <div class="proof-credibility-grid">
              <article class="stat-card stat-card-credibility reveal"><strong class="stat-number stat-number--phrase">9 Countries</strong><span>Colombia &middot; USA &middot; Australia &middot; Argentina &middot; Venezuela &middot; Peru &middot; Brazil &middot; Korea &middot; Japan</span></article>
              <article class="stat-card stat-card-credibility reveal"><strong class="stat-number stat-number--phrase">TV + Press</strong><span>Tengo Talento Mucho Talento &middot; CityTV &middot; La Red &middot; D&iacute;a a D&iacute;a Caracol &middot; El Espectador &middot; Win Sports TV</span></article>
              <article class="stat-card stat-card-credibility reveal"><strong class="stat-number stat-number--phrase">Brand Work</strong><span>Mastercard &middot; DirecTV &middot; Warner Bros. Pictures &middot; Universal Music Group &middot; Samsung &middot; Coca-Cola</span></article>
            </div>
          </div>

          <div class="proof-feature-row">
            <article class="featured-project-card reveal" data-featured-brand-project>
              <!-- Replace # with the real Warner Bros. Pictures / Detective Pikachu project link when available. -->
              <a href="#" target="_blank" rel="noopener noreferrer" data-project-link>
                <span class="featured-project-media">
                  <img src="<?php echo esc_url( jscasta_asset_uri( 'images/brands/warner-pikachu-project.webp' ) ); ?>" alt="Detective Pikachu interview project thumbnail" loading="lazy" data-project-image data-fallback-image />
                  <span class="media-fallback" data-project-fallback><small>Project Preview</small><strong>Warner Bros. Pictures</strong><span>Detective Pikachu Interview</span><em>Media / Film Interview</em></span>
                </span>
                <span class="featured-project-body">
                  <small data-project-brand>Warner Bros. Pictures</small>
                  <strong data-project-title>Detective Pikachu Interview</strong>
                  <em data-project-type>Media / Film Interview</em>
                  <span data-project-description>An entertainment media appearance connected to the Detective Pikachu release, featuring JSCASTA interviewing Justice Smith.</span>
                  <b>View Project</b>
                </span>
              </a>
            </article>

            <aside class="proof-cta reveal" aria-label="Proof section call to action">
              <p>Bring this kind of attention to your audience.</p>
              <a class="button button-primary" href="#contact">Start an Inquiry</a>
              <a class="text-link" href="#videos" data-video-open>Watch Reel</a>
            </aside>
          </div>

          <!-- Replace text placeholders with SVG logos when available. Example: <img src="assets/images/brands/mastercard-logo-white.svg" alt="Mastercard"> -->
          <p class="brand-rail-label reveal">Selected Brand Collaborations</p>
          <div class="brand-rail reveal" aria-label="Brand collaboration examples" tabindex="0" data-drag-rail>
            <div class="brand-track">
              <button class="brand-item" type="button" data-brand-project data-brand="Mastercard" data-title="Corporate Magic Experience" data-type="Corporate Event" data-description="A premium magic experience for a corporate audience." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/mastercard-project.webp' ) ); ?>" data-link="#"><span>Mastercard</span></button>
              <button class="brand-item" type="button" data-brand-project data-brand="DirecTV" data-title="Brand Experience" data-type="Corporate / Brand Activation" data-description="A branded audience experience built around live interaction, surprise, and event energy." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/directv-project.webp' ) ); ?>" data-link="#"><span>DirecTV</span></button>
              <button class="brand-item is-active" type="button" data-brand-project data-brand="Warner Bros. Pictures" data-title="Detective Pikachu Interview" data-type="Media / Film Interview" data-description="An entertainment media appearance connected to the Detective Pikachu release, featuring JSCASTA interviewing Justice Smith." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/warner-pikachu-project.webp' ) ); ?>" data-link="#"><span>Warner Bros. Pictures</span></button>
              <button class="brand-item" type="button" data-brand-project data-brand="Universal Music Group" data-title="Entertainment Collaboration" data-type="Brand / Music" data-description="Entertainment collaboration connected to music, performance, and audience engagement." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/universal-music-group-project.webp' ) ); ?>" data-link="#"><span>Universal Music Group</span></button>
              <button class="brand-item" type="button" data-brand-project data-brand="Esso" data-title="Project details coming soon" data-type="Brand Collaboration" data-description="Replace this placeholder with verified project details." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/esso-project.webp' ) ); ?>" data-link="#"><span>Esso</span></button>
              <button class="brand-item" type="button" data-brand-project data-brand="KitKat" data-title="Project details coming soon" data-type="Brand Collaboration" data-description="Replace this placeholder with verified project details." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/kitkat-project.webp' ) ); ?>" data-link="#"><span>KitKat</span></button>
              <!-- Replace # with the real project URL for each brand when available. -->
              <button class="brand-item" type="button" data-brand-project data-brand="LG" data-title="Project details coming soon" data-type="Brand Collaboration" data-description="Replace this placeholder with verified project details." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/lg-project.webp' ) ); ?>" data-link="#"><span>LG</span></button>
              <button class="brand-item" type="button" data-brand-project data-brand="AXE" data-title="Project details coming soon" data-type="Brand Collaboration" data-description="Replace this placeholder with verified project details." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/axe-project.webp' ) ); ?>" data-link="#"><span>AXE</span></button>
              <button class="brand-item" type="button" data-brand-project data-brand="Samsung" data-title="Brand Experience" data-type="Technology / Brand Event" data-description="A branded experience designed around attention, interaction, and live audience impact." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/samsung-project.webp' ) ); ?>" data-link="#"><span>Samsung</span></button>
              <button class="brand-item" type="button" data-brand-project data-brand="Coca-Cola" data-title="Brand Magic Moment" data-type="Brand Campaign" data-description="A brand-facing magic moment designed to create attention, emotion, and social memory." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/coca-cola-project.webp' ) ); ?>" data-link="#"><span>Coca-Cola</span></button>
              <button class="brand-item" type="button" data-brand-project data-brand="Decameron" data-title="Project details coming soon" data-type="Brand Collaboration" data-description="Replace this placeholder with verified project details." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/decameron-project.webp' ) ); ?>" data-link="#"><span>Decameron</span></button>
              <button class="brand-item" type="button" data-brand-project data-brand="J&auml;germeister" data-title="Project details coming soon" data-type="Brand Collaboration" data-description="Replace this placeholder with verified project details." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/jagermeister-project.webp' ) ); ?>" data-link="#"><span>J&auml;germeister</span></button>
              <button class="brand-item" type="button" data-brand-project data-brand="Trident" data-title="Project details coming soon" data-type="Brand Collaboration" data-description="Replace this placeholder with verified project details." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/trident-project.webp' ) ); ?>" data-link="#"><span>Trident</span></button>
              <button class="brand-item" type="button" data-brand-project data-brand="Colgate" data-title="Project details coming soon" data-type="Brand Collaboration" data-description="Replace this placeholder with verified project details." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/colgate-project.webp' ) ); ?>" data-link="#"><span>Colgate</span></button>
              <button class="brand-item" type="button" data-brand-project data-brand="Cine Colombia" data-title="Project details coming soon" data-type="Brand Collaboration" data-description="Replace this placeholder with verified project details." data-image="<?php echo esc_url( jscasta_asset_uri( 'images/brands/cine-colombia-project.webp' ) ); ?>" data-link="#"><span>Cine Colombia</span></button>
            </div>
          </div>
        </div>
      </section>
