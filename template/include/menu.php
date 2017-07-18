<?php
include_once('breadcrumbs.php')
?>
<section class="menu">
  <div class="row">
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
      <div class="b-information b-information_masonry b-information__columns" data-equalizer-watch="test-eq">
        <img class="b-information__image" src="<?= $productItem['preview'] ?>" alt="blog post photo">
        <div class="b-information__content">
          <a href="#" class="link"><span class="b-information__header blog__header"><?= $productItem['title'] ?></span>
          </a>
          <p class="b-information__description blog__description"><?= $productItem['content'] ?>
          </p>
          <div class="b-information__data">
            <span class="b-information__date fa fa-calendar" aria-hidden="true"> <?= $productItem['date'] ?></span>
            <span class="b-information__comments fa fa-comments">4</span>
            <a href="<?= SITE_DIR ?>blog/product.php?id=<?= $productItem['id'] ?>"
               class="link link__more link_align_right btn-link" data-title="<?= getMessage('MORE'); ?>">
              <span><?= getMessage('MORE'); ?></span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="small-10 small-offset-1 medium-4 medium-offset-0 columns">
      <div class="b-information b-information__columns">
        <h4 class="b-information__header blog__header"><?= $productItem['dish'] ?></h4>
        <img class="b-information__image b-information__image_padding_bottom"
             src="/template/src/images/blog/blog_third.jpg" alt="blog post photo">
        <div class="b-information__content">
          <ul class="menu-list">
            <li class="menu-list__item">
              <h4 class="b-information__header">special coffee <span class="b-information__price">$5.79</span></h4>
              <p class="b-information__description">pellentesque enim. Aliquam tempor</p>
            </li>
            <li class="menu-list__item">
              <h4 class="b-information__header">special coffee <span class="b-information__price">$5.79</span></h4>
              <p class="b-information__description">pellentesque enim. Aliquam tempor</p>
            </li>
            <li class="menu-list__item">
              <h4 class="b-information__header">special coffee <span class="b-information__price">$5.79</span></h4>
              <p class="b-information__description">pellentesque enim. Aliquam tempor</p>
            </li>
            <li class="menu-list__item">
              <h4 class="b-information__header">special coffee <span class="b-information__price">$5.79</span></h4>
              <p class="b-information__description">pellentesque enim. Aliquam tempor</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>