</main>
<div class="footer-space"></div>
<!-- begin footer-->
<footer class="footer">
  <div class="row row__footer-top">
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
      <div class="logo service-menu__logo">
        <a href="<?=SITE_DIR?>" rel="first" class="link">
          <h1 class="logo__header footer__logo">Claude Monet</h1>
        </a>
      </div>
      <p class="company-description company-description_align_left">
          <?=getUserText('about-company');?>
      </p>
      <a href="<?=SITE_DIR?>about" class="link link__more link_align_left btn-link" data-title="<?=getMessage('MORE');?>"><span><?=getMessage('MORE');?></span>
      </a>
    </div>

    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
      <h3 class="footer__title"><?=getMessage('LATEST_POST');?></h3>
      <a href="<?=SITE_DIR?>blog" class="b-information b-information_align_left">
        <div class="b-information__visible b-information__visible_align-left">
          <button class="thumb thumb_border-circle" >
            <i class="thumb__image sprite sprite-launch_second"></i>
            <span class="thumb__overlay"></span>
          </button>
        </div>
        <div class="b-information__content b-information__content_align_left">
          <h4 class="b-information__header"><?=getUserText('footer-b-info-title-second')?></h4>
          <p class="b-information__description">13 <?=getMessage('JUNE')?> 2017</p>
        </div>
      </a>
      <a href="<?=SITE_DIR?>blog" class="b-information b-information_align_left">
        <div class="b-information__visible b-information__visible_align-left">
          <button class="thumb thumb_border-circle" >
            <i class="thumb__image sprite sprite-drinks_second"></i>
            <span class="thumb__overlay"></span>
          </button>
        </div>
        <div class="b-information__content b-information__content_align_left">
          <h4 class="b-information__header"><?=getUserText('footer-b-info-title-first')?></h4>
          <p class="b-information__description">25 <?=getMessage('JUNE')?> 2017</p>
        </div>
      </a>
    </div>

    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
      <h3 class="footer__title"><?=getMessage('OPEN_HOURS');?></h3>
      <p class="work"><?=getMessage('TUE_THU');?></p>
      <p class="work"><?=getMessage('FRI_SAT');?></p>
      <p class="work"><?=getMessage('SUNDAY');?></p>
    </div>

    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 end columns">
      <h3 class="footer__title"><?=getMessage('CONTACT');?></h3>
      <address class="address"><?=getMessage('ADDR');?></address>
      <a class="link link_align_left service-menu__item" href="mailto:support@cakefactory.com" title="mail" rel="contact">
        <span class="service-menu__mail">
        <i class="fa fa-envelope service-menu__fa" aria-hidden="true"></i> support@cakefactory.com</span>
      </a>
      <a class="link link_align_left service-menu__item" href="tel:01 0180 495 593" title="phone" rel="contact">
        <span class="service-menu__telephone">
        <i class="fa fa-phone service-menu__fa" aria-hidden="true"></i>+7 800 333 7874</span>
      </a>
    </div>
  </div>
  <div class="row row__footer-bottom">
    <div class="small-12 columns">
      <?
         include_once('networks.php')
      ?>
      <p class="copyright text-center">© <?=getMessage('HERO_FIRST_TITLE');?> "Claude Monet" 1899-20<? echo(date("y")) ?>.</p>
    </div>
  </div>
</footer>
<!-- end footer-->

<a id="roll_up" class="scroll-to-top">
  <span class="scroll-to-top__sign fa fa-angle-up" aria-hidden="true"></span>
</a>
</div>
</div>
</div>

<div class="reveal" id="menuToday" data-reveal>
  <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul id="orbitMenuToday" class="orbit-container">
      <button class="orbit-previous"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
      <button class="orbit-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>

      <li class="is-active orbit-slide">
        <img class="orbit-image" src="/template/src/images/modal-menu/menu-slide-coffee-cat.jpg" alt="Space">
        <figcaption class="orbit-caption">Латте</figcaption>
      </li>

      <li class="orbit-slide">
        <img class="orbit-image" src="/template/src/images/dish/dish_eighteenth.jpg" alt="Space">
        <figcaption class="orbit-caption">Пирог cholera</figcaption>
      </li>

      <li class="orbit-slide">
        <img class="orbit-image" src="/template/src/images/dish/dish_nineteenth.jpg" alt="Space">
        <figcaption class="orbit-caption">Салат с халуми</figcaption>
      </li>

      <li class="orbit-slide">
        <img class="orbit-image" src="/template/src/images/dish/dish_eleventh.jpg" alt="Space">
        <figcaption class="orbit-caption">Outta This World</figcaption>
      </li>

    </ul>
  </div>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


<div  class="full reveal login" id="sign-in" data-reveal>
  <form action="" method="post">
    <fieldset class="clearfix">
      <p>
        <span class="fontawesome-user"></span>
        <input type="text" placeholder="<?=getMessage('LOGIN')?>" required>
      </p>
      <p>
        <span class="fontawesome-lock"></span>
        <input type="password" placeholder="<?=getMessage('PASSWORD')?>" required>
      </p>
      <p><input type="submit" placeholder="<?=getMessage('SIGN_IN')?>"></p>
    </fieldset>
  </form>
  <p>
      <?=getMessage('NO_ACCOUNT')?>? &nbsp;&nbsp;
  </p>
  <p><button class="button" data-open="sign-up"><?=getMessage('SIGN_UP')?></button></p>
  <p><a><?=getMessage('SIGN_IN')?></a><span class="fontawesome-arrow-right"></span></p>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


<div class="full reveal" id="sign-up" data-reveal>
  <form action="" method="post">
    <fieldset class="clearfix">
      <p>
        <span class="fontawesome-user"></span>
        <input type="text" placeholder="Логин" required>
      </p>
      <p>
        <span class="fontawesome-lock"></span>
        <input type="password" placeholder="Пароль" required>
      </p>
      <p><input type="submit" placeholder="ВОЙТИ"></p>
    </fieldset>
  </form>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>