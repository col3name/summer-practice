
<?php
include_once('breadcrumbs.php')
?>
<section class="gallery">
  <div class="row">
    <div class="columns">
      <h2 class="title text-center"><?=getMessage('OUR_REST');?></h2>
    </div>
  </div>
  <div class="row">
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
      <img src="/template/src/images/gallery/1.jpg" alt="photo">
    </div>
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
      <img src="/template/src/images/gallery/2.jpg" alt="photo">
    </div>
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 end columns">
      <img src="/template/src/images/gallery/3.jpg" alt="photo">
    </div>
  </div>
  <div class="row">
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
      <img src="/template/src/images/gallery/4.jpg" alt="photo">
    </div>
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
      <img src="/template/src/images/gallery/5.jpg" alt="photo">
    </div>
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 end columns">
      <img src="/template/src/images/gallery/6.jpg" alt="photo">
    </div>
  </div>
</section>

<section class="reservation">
  <div class="row ">
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
      <div class="about-company__inner text-right">
        <a href="tel:+7 800 333 7874" class="link">
          <span class="service-menu__telephone">+7 800 333 7874</span>
        </a>
        <span class="company-feature"><i class="fa fa-envelope bg-shopping"></i><?=getMessage('TELEPHONE');?></span>
      </div>
    </div>
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
      <div class="about-company__inner text-right">
        <a href="mailto:support@cakefactory.com" class="link">
          <span class="service-menu__email">support@cakefactory.com</span>
        </a>
        <span class="company-feature"><i class="fa fa-phone bg-alert"></i><?=getMessage('EMAIL');?></span>
      </div>
    </div>
    <div class="small-10 small-offset-1 medium-6 medium-offset-3 large-4 end columns"><div class="about-company__inner text-right">
        <address class="about-company__inner text-right">
          <span class="service-menu__mail"><?=getMessage('ADDR');?></span>
          <span class="company-feature"><i class="fa fa-globe bg-success"></i><?=getMessage('LOCATION');?></span>
        </address>
      </div>
  </div>
</section>
