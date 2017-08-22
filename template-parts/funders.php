<?php
/**
 * Template part for displaying funders section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tenants_rights
 */

?>

<div class="funders container-fluid no-row-margins">
  <div class="row">
    <div class="left-section col-md-4 col-md-offset-1">
      <h2>Funders &amp; Partners Support</h2>
      <p>
        If your organization have interest in becoming a partner or supporter, 
        feel free to reach out to us.
      </p>
      <div class="cta-arrow-link">
        <a href="#">
          <svg class="arrow-icon medium right"
             sversion="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
             viewBox="0 0 110 110" xml:space="preserve">
            <circle cx="55" cy="55" r="50"/>
            <path d="M74.3,52.9L55.1,30.1C55,30,55,30,54.9,30.1L35.7,52.9l19-22.7c0.1-0.1,0.2,0,0.2,0.1V80"/>
          </svg> Let's Connect</a>
      </div>
    </div>
    <div class="right-section col-md-6 no-row-margins">
      <div class="row">
        <ul class="nav st-nav-tabs">
          <li class="active">
            <a href="#funder-tab1" data-toggle="tab">Funding</a>
          </li>
          <li>
            <a href="#funder-tab2" data-toggle="tab">Corporate</a>
          </li>
          <li>
            <a href="#funder-tab3" data-toggle="tab">Partners</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
            tempor incididunt ut labore dolore magna aliqua.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 tab-content">
          <div class="tab-pane active funder-img" id="funder-tab1">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logos/albert.jpg" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logos/ChicagoCommTrust.png" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logos/ChiFndWomen.png" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logos/PierceFamilyFnd.png" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logos/WoodsFund.png" />
            </div>
          </div>
          <div class="tab-pane funder-img" id="funder-tab2">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mv2.png" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logos/northern_trust2.png" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logos/polk-bros-stacked.png" />
            </div>
          </div>
          <div class="tab-pane funder-img" id="funder-tab3">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logos/chicago.png" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logos/cook.png" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logos/epa.png" />
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logos/ihda.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>