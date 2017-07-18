<?php
include_once('breadcrumbs.php')
?>
<section class="blog-content__wrapper">
  <div class="row">
      <? foreach ($article as $articlesItem): ?>
    <div class="small-10 small-offset-1 medium-6 medium-offset-0 large-4 columns">
      <div class="b-information b-information__post b-information_masonry">
        <div class="post">
          <div class="b-information__content">
            <img class="b-information__image information__image_align_center" src="<?= $articlesItem['preview'] ?>"
                 alt="blog post photo">
            <p class="tag text-center">
              <a href="#" class="link c-shopping"><i class="fa fa-tag "></i> Food</a>
            </p>
            <h2 class="b-information__header blog__header text-center">
              <a href="article.php?id=<?= $articlesItem['id'] ?>"><?= $articlesItem['title'] ?></a>
            </h2>
            <p class="b-information__date text-center"><?= $articlesItem['date'] ?></p>
            <p class="b-information__description blog__description"><?= $articlesItem['content'] ?>
            </p>
            <div class="b-information__data">
              <span class="b-information__comments fa fa-comments">13</span> <?= getMessage('COMMENTS'); ?>
              <div class="footer__networks footer__networks_align_right">
                <ul class="list">
                  <li class="list__item">
                    <a href="https://plus.google.com/?hl=ru" class="link" target="_blank">
                      <span class="icon icon__google-plus fa fa-google-plus" aria-hidden="true"></span>
                    </a>
                  </li>
                  <li class="list__item">
                    <a href="https://www.facebook.com/" class="link" target="_blank">
                      <span class="icon icon__facebook fa fa-facebook" aria-hidden="true"></span>
                    </a>
                  </li>
                  <li class="list__item">
                    <a href="https://www.instagram.com/" class="link" target="_blank">
                      <span class="icon icon__instagram fa fa-instagram" aria-hidden="true"></span>
                    </a>
                  </li>
                  <li class="list__item">
                    <a href="https://ru.pinterest.com/" class="link" target="_blank">
                      <span class="icon icon__pinterest fa fa-pinterest" aria-hidden="true"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php endforeach ?>

  </div>
</section>
