<?php
/**
 * Homepage resource paths and final booking CTA.
 *
 * @package JSCASTA
 */
?>
      <section class="resource-paths section-light" id="tutorial" aria-labelledby="resources-title">
        <div class="container resource-grid">
          <div class="section-intro reveal">
            <p class="eyebrow dark">Free Resources</p>
            <h2 id="resources-title">Start Exploring Wonder</h2>
            <p>
              Begin with a simple lesson or discover the creative mask that shapes how you approach
              magic, attention, and imagination.
            </p>
          </div>

          <article class="resource-card reveal" id="tutorial-signup">
            <h3>Learn a Piece of the Impossible</h3>
            <p>
              Get a short magic or cardistry lesson from JSCASTA and start exploring how attention,
              timing, and wonder work.
            </p>
            <!-- Future integration: connect this to Mailchimp, ConvertKit, FluentCRM, Brevo, or a WordPress form plugin. -->
            <form class="tutorial-form compact" action="#" method="post" data-tutorial-form>
              <label><span>First name</span><input type="text" name="first-name" autocomplete="given-name" required /></label>
              <label><span>Email</span><input type="email" name="tutorial-email" autocomplete="email" required /></label>
              <label>
                <span>Tutorial preference</span>
                <select name="tutorial-topic">
                  <option>Learn a simple magic trick</option>
                  <option>Learn a cardistry flourish</option>
                  <option>Learn attention and misdirection</option>
                  <option>Learn a virtual presentation tip</option>
                </select>
              </label>
              <button class="button button-primary full" type="submit">Get the Free Tutorial</button>
              <p class="form-note" data-tutorial-note aria-live="polite"></p>
            </form>
          </article>

          <article class="resource-card reveal">
            <h3>Find Your Magic Archetype</h3>
            <p>
              Take the archetype test and discover which creative mask is guiding your curiosity right now.
            </p>
            <!-- Future WordPress: Magical Thinking can become the public-facing content hub for essays, archetypes, tutorials, and Abracadaula. -->
            <a class="button button-dark" href="<?php echo esc_url( home_url( '/magical-thinking/' ) ); ?>">Take the Test</a>
          </article>
        </div>
      </section>
