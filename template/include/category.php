
<section class="product">
  <div class="row">

      <? foreach ($product as $productItem): ?>
        <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
          <div class="b-information b-information_masonry b-information__columns" data-equalizer-watch="test-eq">
            <img class="b-information__image" src="<?=$productItem['preview']?>" alt="blog post photo">
            <div class="b-information__content">
              <a href="#" class="link"><span class="b-information__header blog__header"><?=$productItem['title']?></span></a>
              <p class="b-information__description blog__description"><?=$productItem['content']?>
              </p>
              <div class="b-information__data">
                <span class="b-information__date fa fa-calendar" aria-hidden="true"> <?=$productItem['date']?></span>
                <span  class="b-information__comments fa fa-comments">4</span>
                <a href="<?=SITE_DIR?>blog/product.php?id=<?=$productItem['id']?>" class="link link__more link_align_right btn-link" data-title="<?=getMessage('MORE');?>"><span><?=getMessage('MORE');?></span></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
  </div>
</section>