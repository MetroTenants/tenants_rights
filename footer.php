<?php
/**
 * Template part for footer
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mto_custom
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="footer-container container-fluid no-row-margins">
    <div class="row">
      <div class="col-md-6 col-md-offset-1 title">
        <h2>Join the Cause</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-1">
        <p>Please consider donating, becoming a member, or becoming a part of the MTO team.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 center-items no-row-margins">
        <div class="row">
          <div class="footer-cta col-sm-3">
            <a href="#" class="footer-cta">Donate</a>
          </div>
          <div class="footer-cta col-sm-3 col-sm-offset-2">
            <a href="/get-involved/become-a-member/" class="footer-cta">Membership</a>
          </div>
          <div class="footer-cta col-sm-3 col-sm-offset-2">
            <a href="/get-involved/volunteer/" class="footer-cta">Volunteer</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="cta-arrow-link">
          <a href="/get-involved/">
            <svg class="arrow-icon medium right"
             sversion="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
             viewBox="0 0 110 110" xml:space="preserve">
            <circle cx="55" cy="55" r="50"/>
            <path d="M74.3,52.9L55.1,30.1C55,30,55,30,54.9,30.1L35.7,52.9l19-22.7c0.1-0.1,0.2,0,0.2,0.1V80"/>
          </svg> Get involved</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1 no-row-margins">
        <div class="row">
          <div class="col-sm-4 no-row-margins">
            <div class="row">
              Sign up to receive updates from the Metropolitan Tenants Organization
            </div>
            <div class="row">
              <form class="email-form">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Your email address" name="newsletter-email" id="newsletter-email" />
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <svg class="arrow-icon medium right"
												 sversion="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
												 viewBox="0 0 110 110" xml:space="preserve">
												<circle cx="55" cy="55" r="50"/>
												<path d="M74.3,52.9L55.1,30.1C55,30,55,30,54.9,30.1L35.7,52.9l19-22.7c0.1-0.1,0.2,0,0.2,0.1V80"/>
											</svg>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div class="row">
              <div id="footer-contact">
                <?php
                  if(is_active_sidebar('footer-contact')){
                    dynamic_sidebar('footer-contact');
                  }
                ?>
              </div>
            </div>
            <div class="row">
              <div id="recent_comments">
                  <?php dynamic_sidebar(7); ?>
              </div>
            </div>
          </div>
          <div class="col-sm-2 footer-links hidden-sm hidden-xs">
            <a href="#">About</a>
            <a href="#">Mission</a>
            <a href="#">History</a>
            <a href="#">Plan &amp; Principles</a>
            <a href="#">Staff &amp; Volunteers</a>
          </div>
          <div class="col-sm-2 footer-links hidden-sm hidden-xs">
            <a href="#">Services</a>
            <a href="#">Building Organizing</a>
            <a href="#">Healthy Homes Program</a>
            <a href="#">Legislation</a>
            <a href="#">Tenant's Rights Hotline</a>
            <a href="#">Tenant Congress</a>
            <a href="#">Squared Away</a>
          </div>
          <div class="col-sm-2 footer-links hidden-sm hidden-xs">
            <a href="#">Partnerships</a>
            <a href="#">Partner Organizations</a>
            <a href="#">Building Organizations</a>
            <a href="#">City of Chicago</a>
            <a href="#">National Partners</a>
          </div>
          <div class="col-sm-2 footer-links hidden-sm hidden-xs">
            <a href="#">Resources</a>
            <a href="#">Guides</a>
            <a href="#">Programs</a>
            <a href="#">Articles</a>
            <a href="#">F.A.Q.</a>
            <a href="#">Media</a>
            <a href="#">Toolkit</a>
            <a href="#">Comments</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
