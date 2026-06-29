<?php
/**
 * Homepage service gateway section.
 *
 * @package JSCASTA
 */
?>
      <section class="services section-dark" id="shows" aria-labelledby="services-title">
        <div class="container">
          <span class="section-anchor" id="workshops" aria-hidden="true"></span>
          <div class="services-header reveal">
            <div class="section-intro">
              <p class="eyebrow">Experience Options</p>
              <h2 id="services-title">Experiences Designed for Impact</h2>
              <p>
                Choose the path that fits your audience: live performance, team learning, virtual experiences, or brand-driven moments.
              </p>
              <div class="services-kicker" role="tablist" aria-label="Experience section views">
                <button class="is-active" type="button" role="tab" aria-selected="true" aria-controls="offer-panel" data-service-tab="offer">What We Offer</button>
                <button type="button" role="tab" aria-selected="false" aria-controls="case-panel" data-service-tab="cases">Case Studies</button>
              </div>
            </div>
            <aside class="services-guidance" aria-label="Event guidance call to action">
              <p>Not sure what fits your event?</p>
              <strong>Tell us about your audience and we'll suggest the right format.</strong>
              <a class="button button-secondary" href="#contact">Get Guidance</a>
            </aside>
          </div>

          <div class="service-panel is-active" id="offer-panel" role="tabpanel" data-service-panel="offer">
          <div class="service-gateway-grid">
            <a class="service-gateway reveal" href="<?php echo esc_url( home_url( '/shows/' ) ); ?>">
              <!-- Replace with assets/images/services/shows-card.webp -->
              <img src="<?php echo esc_url( jscasta_asset_uri( 'images/services/shows-card.webp' ) ); ?>" alt="JSCASTA live and corporate magic show" loading="lazy" data-fallback-image />
              <span class="service-label">Live & Corporate Magic</span>
              <h3>Shows</h3>
              <p>Interactive magic and mentalism for conferences, celebrations, launches, executive events, and private experiences.</p>
              <b>Explore Shows</b>
            </a>

            <a class="service-gateway reveal" href="<?php echo esc_url( home_url( '/workshops/' ) ); ?>">
              <!-- Replace with assets/images/services/workshops-card.webp -->
              <img src="<?php echo esc_url( jscasta_asset_uri( 'images/services/workshops-card.webp' ) ); ?>" alt="JSCASTA creativity keynote and workshop experience" loading="lazy" data-fallback-image />
              <span class="service-label">Creativity & Keynotes</span>
              <h3>Workshops</h3>
              <p>Magic, psychology, and storytelling combined to help teams think differently, reconnect with curiosity, and explore creativity.</p>
              <b>Explore Workshops</b>
            </a>

            <a class="service-gateway reveal" href="<?php echo esc_url( home_url( '/virtual-experiences/' ) ); ?>">
              <!-- Replace with assets/images/services/virtual-experiences-card.webp -->
              <img src="<?php echo esc_url( jscasta_asset_uri( 'images/services/virtual-experiences-card.webp' ) ); ?>" alt="JSCASTA virtual and hybrid experience with cinematic presentation design" loading="lazy" data-fallback-image />
              <span class="service-label">Online & Hybrid</span>
              <h3>Virtual Experiences</h3>
              <p>High-production online shows, hybrid events, and Virtual Stagecraft using OBS, interaction, custom visuals, and camera presence.</p>
              <b>Explore Virtual</b>
            </a>
          </div>

          <div class="service-secondary-links reveal" aria-label="Additional service paths">
            <span>Specialized Formats</span>
            <a href="<?php echo esc_url( home_url( '/brand-activations/' ) ); ?>">
              Brand Activations &amp; Content
              <small>Custom magic-driven moments for campaigns, launches, and social content.</small>
            </a>
            <a href="<?php echo esc_url( home_url( '/virtual-experiences/#stagecraft' ) ); ?>">
              Virtual Stagecraft
              <small>OBS-powered presentation design for webinars, sales calls, classes, and hybrid events.</small>
            </a>
          </div>
          </div>

          <div class="service-panel" id="case-panel" role="tabpanel" data-service-panel="cases" hidden>
            <div class="service-gateway-grid case-study-grid">
              <a class="service-gateway case-study-card reveal" href="<?php echo esc_url( home_url( '/case-study-brand-activations/' ) ); ?>">
                <img src="<?php echo esc_url( jscasta_asset_uri( 'images/brands/coca-cola-project.webp' ) ); ?>" alt="Brand activation case study placeholder" loading="lazy" data-fallback-image />
                <span class="service-label">Case Study</span>
                <h3>Brand Activations</h3>
                <p>Campaigns, launches, and social content shaped around magic-driven moments.</p>
                <b>View Case Study</b>
              </a>
              <a class="service-gateway case-study-card reveal" href="<?php echo esc_url( home_url( '/case-study-media-tv/' ) ); ?>">
                <img src="<?php echo esc_url( jscasta_asset_uri( 'images/brands/warner-pikachu-project.webp' ) ); ?>" alt="Media and TV appearance case study placeholder" loading="lazy" data-fallback-image />
                <span class="service-label">Case Study</span>
                <h3>Media &amp; TV Appearances</h3>
                <p>Television segments, interviews, and screen-based appearances.</p>
                <b>View Case Study</b>
              </a>
              <a class="service-gateway case-study-card reveal" href="<?php echo esc_url( home_url( '/case-study-viral-magic-videos/' ) ); ?>">
                <img src="<?php echo esc_url( jscasta_asset_uri( 'images/selected-work/torn-restored-paper-tiktok.webp' ) ); ?>" alt="Viral magic video case study placeholder" loading="lazy" data-fallback-image />
                <span class="service-label">Case Study</span>
                <h3>Viral Magic Videos</h3>
                <p>Short-form magic and visual moments that reached millions online.</p>
                <b>View Case Study</b>
              </a>
              <a class="service-gateway case-study-card reveal" href="<?php echo esc_url( home_url( '/case-study-virtual-experiences/' ) ); ?>">
                <img src="<?php echo esc_url( jscasta_asset_uri( 'images/services/virtual-experiences-card.webp' ) ); ?>" alt="Virtual experience case study placeholder" loading="lazy" data-fallback-image />
                <span class="service-label">Case Study</span>
                <h3>Virtual Experiences</h3>
                <p>Online and hybrid experiences using OBS, interaction, and cinematic staging.</p>
                <b>View Case Study</b>
              </a>
              <a class="service-gateway case-study-card reveal" href="<?php echo esc_url( home_url( '/case-study-corporate-events/' ) ); ?>">
                <img src="<?php echo esc_url( jscasta_asset_uri( 'images/services/shows-card.webp' ) ); ?>" alt="Corporate event case study placeholder" loading="lazy" data-fallback-image />
                <span class="service-label">Case Study</span>
                <h3>Corporate Events</h3>
                <p>Live performances for companies, private groups, and executive audiences.</p>
                <b>View Case Study</b>
              </a>
              <a class="service-gateway case-study-card reveal" href="<?php echo esc_url( home_url( '/case-study-educational-content/' ) ); ?>">
                <img src="<?php echo esc_url( jscasta_asset_uri( 'images/selected-work/magic-tutorial-youtube.webp' ) ); ?>" alt="Educational content case study placeholder" loading="lazy" data-fallback-image />
                <span class="service-label">Case Study</span>
                <h3>Educational Content</h3>
                <p>Tutorials, cardistry, and lessons that introduce people to magic and attention.</p>
                <b>View Case Study</b>
              </a>
            </div>
          </div>
        </div>
      </section>
