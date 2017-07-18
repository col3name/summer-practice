<?php
  include_once('breadcrumbs.php')
?>
<section class="about-restaurant">
  <div class="row row__welcome">
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 end columns">
      <h2 class="title title_align-center">
          <?= getMessage('ABOUT_OUR'); ?><span class="c-success"><?= getMessage('HERO_FIRST_TITLE'); ?></span>
      </h2>
      <h3 class="subtitle subtitle_align-center"><?= getMessage('OUR_LITTLE_STORY'); ?></h3>
      <p class="description text-center medium-text-right">
          <?= getUserText('about-rest') ?>
      </p>
      <div class="row">
        <div class="small-12 large-6 columns">
          <div class="about-company__inner text-right">
            <span class="company-feature">
              <span class="timer" data-from="0" data-to="15" data-speed="4000" data-refresh-interval="20"></span>
                <?= getMessage('LOCATION'); ?>
              <i class="fa fa-globe bg-shopping"></i>
            </span>
          </div>
        </div>
        <div class="small-12 large-6 columns">
          <div class="about-company__inner text-right">
            <span class="company-feature">
              <span class="timer" data-from="0" data-to="1543" data-speed="5000"
                    data-refresh-interval="20"></span> <?= getMessage('CLIENTS'); ?>
              <i class="fa fa-building-o bg-success"></i>
            </span>
          </div>
        </div>
        <div class="small-12 large-6 columns">
          <div class="about-company__inner text-right">
            <span class="company-feature">
              <span class="timer" data-from="0" data-to="147" data-speed="5000"
                    data-refresh-interval="20"></span> <?= getMessage('DISHES'); ?>
              <i class="fa fa-shopping-cart bg-alert"></i>
            </span>
          </div>
        </div>
        <div class="small-12 large-6 columns">
          <div class="about-company__inner text-right">
            <span class="company-feature">
              <span class="timer" data-from="0" data-to="104" data-speed="5000"
                    data-refresh-interval="20"></span> <?= getMessage('AWARDS'); ?>
              <i class="fa fa fa-trophy bg-warning"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 end columns">
      <img class="welcome__image welcome__image_border_circle" src="/template/src/images/chef/chef.jpg" alt="chef">
    </div>
  </div>
</section>

<?
  include_once('our-team.php');
?>
