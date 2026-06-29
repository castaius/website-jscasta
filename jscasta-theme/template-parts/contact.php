<?php
/**
 * Homepage contact section.
 *
 * @package JSCASTA
 */
?>
      <section class="contact section-dark" id="contact" aria-labelledby="contact-title">
        <div class="container contact-grid">
          <div class="section-intro reveal">
            <p class="eyebrow">Contact</p>
            <h2 id="contact-title">Let's Create Something Impossible</h2>
            <p>
              Tell us about your event, audience, and goals. JSCASTA will review your inquiry and
              respond with the best next step.
            </p>
            <div class="contact-links">
              <!-- Social link placeholders: verify final YouTube, Instagram, TikTok, and LinkedIn URLs before publishing. -->
              <a href="mailto:booking@jscasta.com">booking@jscasta.com</a>
              <a href="https://www.instagram.com/jscasta/" target="_blank" rel="noreferrer">Instagram</a>
              <a href="https://www.youtube.com/@jscasta" target="_blank" rel="noreferrer">YouTube</a>
              <a href="https://www.tiktok.com/@jscasta" target="_blank" rel="noreferrer">TikTok</a>
              <a href="https://www.linkedin.com/" target="_blank" rel="noreferrer">LinkedIn</a>
            </div>
          </div>

          <form class="contact-form reveal" action="#" method="post">
            <label>
              <span>Name</span>
              <input type="text" name="name" autocomplete="name" required />
            </label>
            <label>
              <span>Email</span>
              <input type="email" name="email" autocomplete="email" required />
            </label>
            <label>
              <span>Company</span>
              <input type="text" name="company" autocomplete="organization" />
            </label>
            <label>
              <span>Event type</span>
              <select name="event-type" required>
                <option value="">Select one</option>
                <option>Corporate Magic Show</option>
                <option>Private Event</option>
                <option>Keynote / Workshop</option>
                <option>Brand Activation</option>
                <option>Virtual Show</option>
                <option>Virtual Stagecraft</option>
                <option>Media / Collaboration</option>
                <option>Other</option>
              </select>
            </label>
            <label>
              <span>Event date</span>
              <input type="date" name="date" />
            </label>
            <label>
              <span>Location</span>
              <input type="text" name="location" autocomplete="address-level2" />
            </label>
            <label>
              <span>Estimated audience size</span>
              <input type="number" name="audience" min="1" inputmode="numeric" />
            </label>
            <label>
              <span>Budget range</span>
              <select name="budget">
                <option value="">Select one</option>
                <option>Under $2,500</option>
                <option>$2,500 - $5,000</option>
                <option>$5,000 - $10,000</option>
                <option>$10,000+</option>
                <option>Not sure yet</option>
              </select>
            </label>
            <label class="full">
              <span>Message</span>
              <textarea name="message" rows="5" required></textarea>
            </label>
            <button class="button button-primary full" type="submit">Send Inquiry</button>
            <p class="form-note" data-form-note aria-live="polite"></p>
          </form>
        </div>
      </section>
