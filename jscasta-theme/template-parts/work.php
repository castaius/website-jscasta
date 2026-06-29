<?php
/**
 * Homepage latest work carousel.
 *
 * @package JSCASTA
 */
?>
      <section class="selected-work-section section-dark" id="work" aria-labelledby="selected-work-title">
        <div class="container">
          <div class="selected-work reveal">
            <div class="proof-subhead">
              <p class="eyebrow">Watch the Work</p>
              <h3 id="selected-work-title">JSCASTA in Action</h3>
              <p>A curated look at viral videos, performances, media moments, tutorials, and branded magic.</p>
            </div>
            <!-- Future WordPress solution: use oEmbed, a plugin, or server-side fetch to populate TikTok and Instagram thumbnails. -->
            <div class="work-carousel" data-work-carousel>
              <button class="work-control work-control-prev" type="button" aria-label="Previous latest item" data-work-prev>&larr;</button>
              <div class="work-viewport" tabindex="0">
                <div class="work-grid" data-work-track>
                  <a class="work-card work-card-large" href="https://www.tiktok.com/@jscasta/video/6854335830396374278" target="_blank" rel="noopener noreferrer" data-local-fallback="<?php echo esc_url( jscasta_asset_uri( 'images/selected-work/torn-restored-paper-tiktok.webp' ) ); ?>" data-external-thumbnail=""><span class="media-fallback">TikTok / Viral Magic</span><div class="work-card__overlay"><span>TikTok / Viral Magic</span><h3>Torn and Restored Paper</h3><p>2.5M+ views</p><b>Watch on TikTok</b></div></a>
                  <a class="work-card" href="https://www.tiktok.com/@jscasta/video/7198592740236496133" target="_blank" rel="noopener noreferrer" data-local-fallback="<?php echo esc_url( jscasta_asset_uri( 'images/selected-work/visual-magic-moment-tiktok.webp' ) ); ?>" data-external-thumbnail=""><span class="media-fallback">TikTok / Performance</span><div class="work-card__overlay"><span>TikTok / Performance</span><h3>Visual Magic Moment</h3><b>Watch on TikTok</b></div></a>
                  <a class="work-card" href="https://www.instagram.com/p/DQg_26vgPp1/" target="_blank" rel="noopener noreferrer" data-local-fallback="<?php echo esc_url( jscasta_asset_uri( 'images/selected-work/recent-instagram-feature.webp' ) ); ?>" data-external-thumbnail=""><span class="media-fallback">Instagram / Performance</span><div class="work-card__overlay"><span>Instagram / Performance</span><h3>Recent Instagram Feature</h3><b>View on Instagram</b></div></a>
                  <a class="work-card" href="#" target="_blank" rel="noopener noreferrer" aria-label="Brand or media appearance placeholder" data-local-fallback="<?php echo esc_url( jscasta_asset_uri( 'images/selected-work/media-appearance.webp' ) ); ?>" data-external-thumbnail=""><span class="media-fallback">Media / Interview</span><div class="work-card__overlay"><span>Media / Interview</span><h3>Brand / Media Appearance</h3><b>View Project</b></div></a>
                  <a class="work-card" href="https://www.instagram.com/p/DQFvHurD75A/" target="_blank" rel="noopener noreferrer" data-local-fallback="<?php echo esc_url( jscasta_asset_uri( 'images/selected-work/cardistry-tutorial-instagram.webp' ) ); ?>" data-external-thumbnail=""><span class="media-fallback">Instagram / Tutorial</span><div class="work-card__overlay"><span>Instagram / Tutorial</span><h3>Cardistry Tutorial</h3><b>View on Instagram</b></div></a>
                  <a class="work-card work-card-wide" href="https://www.youtube.com/watch?v=fMuPKOOQeJo&t=2s" target="_blank" rel="noopener noreferrer"><img src="https://img.youtube.com/vi/fMuPKOOQeJo/hqdefault.jpg" data-local-fallback="<?php echo esc_url( jscasta_asset_uri( 'images/selected-work/magic-tutorial-youtube.webp' ) ); ?>" alt="Magic Tutorial on YouTube" loading="lazy" data-fallback-image /><span class="media-fallback">YouTube / Tutorial</span><div class="work-card__overlay"><span>YouTube / Tutorial</span><h3>Magic Tutorial</h3><b>Watch on YouTube</b></div></a>
                </div>
              </div>
              <button class="work-control work-control-next" type="button" aria-label="Next latest item" data-work-next>&rarr;</button>
            </div>
          </div>
        </div>
      </section>
