<!-- begin hero-->
<section class="hero">
  <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit
       data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
    <button class="orbit-previous">
      <i class="fa fa-angle-left" aria-hidden="true"></i>
    </button>
    <button class="orbit-next">
      <i class="fa fa-angle-right" aria-hidden="true"></i>
    </button>
    <ul id="js-hero-orbit-container" class="orbit-container">
      <li class="is-active orbit-slide orbit-slide__first">
        <h2 class="orbit-slide__title"><?= getMessage('HERO_FIRST_TITLE'); ?></h2>
        <p class="orbit-slide__description"><?= getMessage('HERO_FIRST_SUBTITLE'); ?></p>
      </li>
      <li class="orbit-slide orbit-slide__second">
        <h2 class="orbit-slide__title">Claude Monet</h2>
        <p class="orbit-slide__description"><?= getMessage('HERO_SECOND_SUBTITLE'); ?> Claude Monet</p>
      </li>
      <li class="orbit-slide orbit-slide__third">
        <h2 class="orbit-slide__title"><?= getMessage('HERO_THIRD_FIRST'); ?></h2>
      </li>
    </ul>
  </div>
</section><!-- end hero--><!-- begin welcome-->
<section class="welcome">
  <div class="row">
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 end columns">
      <img class="welcome__image welcome__image_border_circle" src="/template/src/images/chef/chef.jpg" alt="chef">
    </div>
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 end columns">
      <h2 class="title title_align-center"><?= getMessage('ANDREY'); ?> <span
          class="text-decorative"><?= getMessage('MAHOV'); ?></span></h2>
      <h3 class="subtitle subtitle_align-center"><?= getMessage('CHEF'); ?></h3>
      <p class="description"><?= getUserText('permanant') ?></p>
      <blockquote
        class="welcome__blockquote welcome__blockquote_align-center"><?= getUserText('blockquote') ?></blockquote>
      <img class="signature_align-center welcome__signature" src="/template/src/images/chef/sign.jpg"
           alt="chef signature ">
    </div>
  </div>
</section><!-- end welcome--><!-- begin promo-->
<section class="promo_rolf-baoumann">
  <div class="row">
    <div class="small-10 small-offset-1 large-offset-5 large-7 columns">
      <blockquote class="promo__blockquote">
        <p class="promo__quote">"<?= getUserText('yogi') ?> "
        </p>
        <cite class="promo__quote-author"><?= getMessage('YOGI_BERRA'); ?></cite>
      </blockquote>
    </div>
  </div>
</section><!-- end promo--><!-- begin today menu-->
<section class="today-menu">
  <div class="row">
    <div class="small-10 small-offset-1 columns">
      <h2 class="title title_align-center"><?= getMessage('TODAY_SPECIAL'); ?><span class="text-decorative">resto</span>
      </h2>
      <h3 class="subtitle subtitle_align-center"><?= getMessage('MENU_DAY'); ?></h3>
    </div>
  </div>
  <div class="row today-menu__content" data-equalizer="foo">
    <div class="small-12 small-offset-0 medium-10 medium-offset-1 large-6 large-offset-0 columns"
         data-equalizer-watch="foo">
      <ul class="tabs" data-tabs id="example-tabs">
        <li class="tabs-title is-active b-information-menu__tab">
          <a class="b-information-menu__tab-link" href="#panel1"><?= getMessage('DRINKS'); ?></a>
        </li>
        <li class="tabs-title b-information-menu__tab">
          <a class="b-information-menu__tab-link" href="#panel2"><?= getMessage('BREAKFAST'); ?></a>
        </li>
        <li class="tabs-title b-information-menu__tab">
          <a class="b-information-menu__tab-link" href="#panel3"><?= getMessage('DINNER'); ?></a>
        </li>
      </ul>
      <div class="tabs-content" data-tabs-content="example-tabs">
        <div class="tabs-panel is-active clearfix" id="panel1">
          <ul class="b-information-menu">
            <li class="b-information-menu__item clearfix">
              <div class="b-information">
                <div class="b-information__visible b-information__visible_align-left">
                  <a class="thumb thumb_border-circle" data-open="menuToday" target="_blank">
                    <i class="thumb__image sprite sprite-drinks_first"></i> <span class="thumb__overlay"></span>
                  </a>
                </div>
                <div class="b-information__content b-information__content_align_left">
                  <a href="#" class="link b-information__link">
                    <h4 class="b-information__header"><?= getMessage('TIRAMISU') ?> <span class="b-information__price">324 ₽</span>
                    </h4>
                    <p class="b-information__description"><?= getUserText('dessert') ?></p>
                  </a>
                </div>
              </div>
            </li>
            <li class="b-information-menu__item clearfix">
              <div class="b-information">
                <div class="b-information__visible b-information__visible_align-left">
                  <a class="thumb thumb_border-circle" data-open="menuToday" target="_blank">
                    <i class="thumb__image sprite sprite-drinks_second"></i> <span class="thumb__overlay"></span>
                  </a>
                </div>
                <div class="b-information__content b-information__content_align_left">
                  <a href="#" class="link b-information__link">
                    <h4 class="b-information__header">Сhateau d'armailhac 2009<span
                        class="b-information__price">8 554 ₽</span></h4>
                    <p class="b-information__description"><?= getUserText('wine') ?></p>
                  </a>
                </div>
              </div>
            </li>
            <li class="b-information__item clearfix">
              <div class="b-information__visible b-information__visible_align-left">
                <a class="thumb thumb_border-circle" data-open="menuToday" target="_blank">
                  <i class="thumb__image sprite sprite-launch_second"></i> <span class="thumb__overlay"></span>
                </a>
              </div>
              <div class="b-information__content b-information__content_align_left">
                <a href="#" class="link b-information__link">
                  <h4 class="b-information__header"><?= getMessage('ULUN') ?> <span
                      class="b-information__price">990 ₽</span></h4>
                  <p class="b-information__description"><?= getUserText('oolong') ?></p>
                </a>
              </div>
            </li>
            <li class="b-information__item clearfix">
              <div class="b-information__visible b-information__visible_align-left">
                <a class="thumb thumb_border-circle" data-open="menuToday">
                  <i class="sprite sprite-drinks_first"></i> <span class="thumb__overlay"></span>
                </a>
              </div>
              <div class="b-information__content b-information__content_align_left">
                <a href="#" class="link b-information__link">
                  <h4 class="b-information__header"><?= getMessage('JUICE') ?> <span
                      class="b-information__price">200 ₽</span></h4>
                  <p class="b-information__description"><?= getUserText('nectar') ?></p>
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div class="tabs-panel" id="panel2">
          <ul class="b-information">
            <li class="b-information__item clearfix">
              <div class="b-information__visible b-information__visible_align-left">
                <a class="thumb thumb_border-circle" data-open="menuToday" target="_blank">
                  <i class="thumb__image sprite sprite-dinner_second"></i> <span class="thumb__overlay"></span>
                </a>
              </div>
              <div class="b-information__content b-information__content_align_left">
                <a href="#" class="link b-information__link">
                  <h4 class="b-information__header"><?= getMessage('HALUMI') ?> <span class="b-information__price">450,00 ₽</span>
                  </h4>
                  <p class="b-information__description"><?= getUserText('salad') ?></p>
                </a>
              </div>
            </li>
            <li class="b-information__item clearfix">
              <div class="b-information__visible b-information__visible_align-left">
                <a class="thumb thumb_border-circle" data-open="menuToday" target="_blank">
                  <i class="thumb__image thumb__image sprite sprite-launch_second"></i> <span
                    class="thumb__overlay"></span>
                </a>
              </div>
              <div class="b-information__content b-information__content_align_left">
                <a href="#" class="link b-information__link">
                  <h4 class="b-information__header"><?= getMessage('PIE') ?> cholera <span class="b-information__price">1160 ₽</span>
                  </h4>
                  <p class="b-information__description"><?= getUserText('pie') ?></p>
                </a>
              </div>
            </li>
            <li class="b-information__item clearfix">
              <div class="b-information__visible b-information__visible_align-left">
                <a class="thumb thumb_border-circle" data-open="menuToday" target="_blank">
                  <i class="thumb__image sprite sprite-launch_third"></i> <span class="thumb__overlay"></span>
                </a>
              </div>
              <div class="b-information__content b-information__content_align_left">
                <a href="#" class="link b-information__link" target="_blank">
                  <h4 class="b-information__header"><?= getMessage('PUDDING') ?> <span class="b-information__price">1200 ₽</span>
                  </h4>
                  <p class="b-information__description"><?= getUserText('souffle') ?></p>
                </a>
              </div>
            </li>
            <li class="b-information__item clearfix">
              <div class="b-information__visible b-information__visible_align-left">
                <a class="thumb thumb_border-circle" data-open="menuToday">
                  <i class="sprite sprite-dinner_third"></i> <span class="thumb__overlay"></span>
                </a>
              </div>
              <div class="b-information__content b-information__content_align_left">
                <a href="#" class="link b-information__link">
                  <h4 class="b-information__header"><?= getMessage('UDON') ?> <span
                      class="b-information__price">189 ₽</span></h4>
                  <p class="b-information__description"><?= getUserText('turkey') ?></p>
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div class="tabs-panel" id="panel3">
          <ul class="b-information">
            <li class="b-information__item clearfix">
              <div class="b-information__visible b-information__visible_align-left">
                <a class="thumb thumb_border-circle" data-open="menuToday" target="_blank">
                  <i class="thumb__image sprite sprite-dinner_first"></i> <span class="thumb__overlay"></span>
                </a>
              </div>
              <div class="b-information__content b-information__content_align_left">
                <a href="#" class="link b-information__link">
                  <h4 class="b-information__header"><?= getMessage('PASTA') ?> <span
                      class="b-information__price">470 ₽</span></h4>
                  <p class="b-information__description"><?= getUserText('spaghetti') ?></p>
                </a>
              </div>
            </li>
            <li class="b-information__item clearfix">
              <div class="b-information__visible b-information__visible_align-left">
                <a class="thumb thumb_border-circle" data-open="menuToday" target="_blank">
                  <i class="thumb__image sprite sprite-dinner_second"></i> <span class="thumb__overlay"></span>
                </a>
              </div>
              <div class="b-information__content b-information__content_align_left">
                <a href="#" class="link b-information__link">
                  <h4 class="b-information__header"><?= getMessage('HERRING') ?> <span class="b-information__price">567 ₽</span>
                  </h4>
                  <p class="b-information__description"><?= getUserText('herring-under') ?></p>
                </a>
              </div>
            </li>
            <li class="b-information__item clearfix">
              <div class="b-information__visible b-information__visible_align-left">
                <a class="thumb thumb_border-circle" data-open="menuToday" target="_blank">
                  <i class="thumb__image sprite sprite-dinner_third"></i> <span class="thumb__overlay"></span>
                </a>
              </div>
              <div class="b-information__content b-information__content_align_left">
                <a href="#" class="link b-information__link" target="_blank">
                  <h4 class="b-information__header"><?= getMessage('KINOA') ?> <span
                      class="b-information__price">680 ₽</span></h4>
                  <p class="b-information__description"><?= getUserText('andean-crap') ?></p>
                </a>
              </div>
            </li>
            <li class="b-information__item clearfix">
              <div class="b-information__visible b-information__visible_align-left">
                <a class="thumb thumb_border-circle" data-open="menuToday">
                  <i class="thumb__image sprite sprite-dinner_fourth"></i> <span class="thumb__overlay"></span>
                </a>
              </div>
              <div class="b-information__content b-information__content_align_left">
                <a href="#" class="link b-information__link">
                  <h4 class="b-information__header"><?= getMessage('PEPPER') ?> <span
                      class="b-information__price">609 ₽</span></h4>
                  <p class="b-information__description"><?= getUserText('crisp') ?></p>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="small-12 small-offset-0 medium-10 medium-offset-1 large-6 large-offset-0 end columns"
         data-equalizer-watch="foo">
      <div class="today-menu__full today-menu__full-border">
        <a href="<?= SITE_DIR ?>menu"
           class="button large black today-menu__button today-menu__button_uppercase"><?= getMessage('MENU'); ?></a>
      </div>
    </div>
  </div>
</section><!-- end today menu--><!-- begin winning-->
<section class="winning">
  <div class="winning-wrapper">
    <div class="row winning__row">
      <div class="small-10 small-offset-1 medium-8 medium-offset-2 columns">
        <h2 class="winning__header"><?= getMessage('HISTORY'); ?></h2>
        <p class="winning__description"><?= getUserText('history') ?></p>
      </div>
    </div>
  </div>
</section><!-- end winning--><!-- begin latest blog-->
<section class="latest-blog">
  <div class="row">
    <div class="small-10 small-offset-1 columns">
      <h2 class="title title_align-center"><?= getMessage('LATEST_BLOG'); ?> <span class="text-decorative">Claude</span>
      </h2>
    </div>
  </div>
  <div class="row row__latest-blog" data-equalizer data-equalize-on="medium" id="test-eq">
      <? foreach ($article as $articlesItem): ?>
        <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
          <div class="b-information b-information_masonry b-information__columns" data-equalizer-watch="test-eq">
            <img class="b-information__image" src="<?= $articlesItem['preview'] ?>" alt="blog post photo">
            <div class="b-information__content">
              <a href="#" class="link"><span
                  class="b-information__header blog__header"><?= $articlesItem['title'] ?></span></a>
              <p class="b-information__description blog__description"><?= $articlesItem['content'] ?>
              </p>
              <div class="b-information__data">
                <span class="b-information__date fa fa-calendar" aria-hidden="true"> <?= $articlesItem['date'] ?></span>
                <span class="b-information__comments fa fa-comments">4</span>
                <a href="<?= SITE_DIR ?>blog/article.php?id=<?= $articlesItem['id'] ?>"
                   class="link link__more link_align_right btn-link" data-title="<?= getMessage('MORE'); ?>">
                  <span><?= getMessage('MORE'); ?></span></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
  </div>
</section><!-- end latest blog-->
<?
include_once('our-team.php');
?>
<!-- begin client feedback-->
<section class="client-feedback">
  <div class="row">
    <div class="small-10 small-offset-1 columns">
      <h2 class="title title_align-center"><?= getMessage('FEEDBACK'); ?> <span class="text-decorative">Cluade</span>
      </h2>
      <h3 class="subtitle subtitle_align-center"><?= getMessage('SAY'); ?></h3>
    </div>
  </div>
  <div class="row">
    <div class="small-10 small-offset-1 medium-8 medium-offset-2 columns">
      <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit
           data-options="animOutToLeft:fade-out; animOutToRight:fade-out;">
        <ul id="js-client-orbit-container" class="orbit-container">
          <li class="is-active orbit-slide">
            <blockquote class="feedback">
              <p class="feadback__client">
                  <?= getUserText('feadback-1') ?>
              </p>
              <i class="feedback__photo-client-center photo-client_align_center sprite sprite-client-avatar_first"></i>
              <cite class="client"><?= getMessage('CUST_FIRST'); ?>
              </cite>
              <div class="ratting">
                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                  class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                  class="fa fa-star-half-o" aria-hidden="true"></i>
              </div>
            </blockquote>
          </li>
          <li class="orbit-slide">
            <blockquote class="feedback">
              <p class="feadback__client">
                  <?= getUserText('feadback-2') ?>
              </p>
              <i class="feedback__photo-client-center photo-client_align_center sprite sprite-client-avatar_second"></i>
              <cite class="client"><?= getMessage('CUST_SECOND'); ?></cite>
              <div class="ratting">
                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                  class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                  class="fa fa-star-half-o" aria-hidden="true"></i>
              </div>
            </blockquote>
          </li>
          <li class="orbit-slide">
            <blockquote class="feedback">
              <p class="feadback__client">
                  <?= getUserText('feadback-3') ?>
              </p>
              <i class="feedback__photo-client-center sprite sprite-client-avatar_third"></i> <cite
                class="client"><?= getMessage('CUST_THIRD'); ?></cite>
              <div class="ratting">
                <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                  class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                  class="fa fa-star-half-o" aria-hidden="true"></i>
              </div>
            </blockquote>
          </li>
        </ul>
        <nav class="orbit-bullets">
          <div class="client-feedback__orbit-bullets-wrapper">
            <button class="orbit-bullets__button is-active" data-slide="0"></button>
            <button class="orbit-bullets__button" data-slide="1"></button>
            <button class="orbit-bullets__button" data-slide="2"></button>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section><!-- end client feedback-->