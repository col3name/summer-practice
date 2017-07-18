<section class="post">
  <div class="row">
    <div class="small-8 small-offset-2 columns">
      <div class="b-information">
        <div class="b-information__content">
          <p class="tag text-center">
            <a href="#" class="link c-shopping text-center"><i class="fa fa-tag "></i> Travel</a>
          </p>
          <h4 class="b-information__header blog__header text-center"><?=$article['title'] ?></h4>
          <button data-toggle="postPhoto">
            <img class="b-information__image b-information__image_align_center" src="<?=$article['photo'] ?>" alt="blog post photo">
          </button>

          <p class="b-information__date text-center"><?=$article['date'] ?></p>
          <p class="b-information__description blog__description text-center">
              <?=$article['content'] ?>
          </p>
          <h4 class="text-center" style="margin:15px 0;"><?=getMessage('RECIPE')?></h4>
          <div class="row">
            <div class="small-10 small-offset-1 columns">
              <p class="b-information__description blog__description text-center" style="margin:10px 0 45px; line-height: 32px;">
                  <?=$article['recipe'] ?>
              </p>
            </div>
          </div>
          <div class="b-information__data">
            <span class="b-information__date fa fa-calendar" aria-hidden="true"><?=$article['date'] ?></span>
            <span class="b-information__comments fa fa-comments">4</span>
            <a href="/<?=LANGUAGE_ID?>/blog" class="link link__more link_align_right btn-link" data-title="<?=getMessage('BLOG')?> Claude Monet">
              <span><?=getMessage('BLOG')?> Claude Monet</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="row">
  <div class="reveal" id="postPhoto" data-reveal data-close-on-click="true" data-animation-in="someAnimationIn" data-animation-out="someAnimationOut">
    <img class="b-information__image b-information__image_align_center" src="<?=$article['photo'] ?>"
         alt="blog post photo">
  </div>
</div>