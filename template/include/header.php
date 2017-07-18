<div class="off-canvas-wrapper">
    <div class="off-canvas-absolute position-right off-canvas-fixed" id="offCanvasRight" data-off-canvas>
        <button class="close-button" aria-label="Close menu" type="button" data-close>
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="menu-bar service-menu__menu-bar menu-bar_padding_left text-center">
            <li class="menu-bar__item menu-bar__item_size_full">
                <a href="<?=SITE_DIR?>" class="link menu-bar__link">
                    <span class="link__text link__text_text-transform_uppercase btn-link" data-title="<?=getMessage('HOME');?>"><span><?=getMessage('HOME');?></span></span>
                </a>
            </li>

            <li class="menu-bar__item menu-bar__item_size_full">
                <a href="<?=SITE_DIR?>menu" class="link menu-bar__link">
                    <span class="link__text link__text_text-transform_uppercase btn-link" data-title="<?=getMessage('MENU');?>"><span><?=getMessage('MENU');?></span></span>
                </a>
            </li>

            <li class="menu-bar__item menu-bar__item_size_full">
                <a href="<?=SITE_DIR?>blog" class="link menu-bar__link">
                    <span class="link__text link__text_text-transform_uppercase btn-link" data-title="<?=getMessage('BLOG');?>"><span><?=getMessage('BLOG');?></span></span>
                </a>
            </li>

            <li class="menu-bar__item menu-bar__item_size_full">
                <a href="<?=SITE_DIR?>about" class="link menu-bar__link">
                    <span class="link__text link__text_text-transform_uppercase btn-link" data-title="<?=getMessage('ABOUT_US');?>"><span><?=getMessage('ABOUT_US');?></span></span>
                </a>
            </li>
          <li class="menu-bar__item menu-bar__item_size_full">
                <a href="<?=SITE_DIR?>contact" class="link menu-bar__link">
                    <span class="link__text link__text_text-transform_uppercase btn-link" data-title="<?=getMessage('CONTACT');?>"><span><?=getMessage('CONTACT');?></span></span>
                </a>
            </li>
            <li class="menu-bar__item menu-bar__item_size_full">
              <ul class="dropdown menu" data-dropdown-menu>
                <li>
                  <a href="#" class="link menu-bar__link"><?=getMessage('LANGUAGE');?></a>
                  <ul class="menu">
                    <li>
                      <?
                        $path = str_replace("/".LANGUAGE_ID."/", "", $_SERVER["REQUEST_URI"]);
                      ?>
                      <a href="<?='/ru/' . $path?>"><img src="/template/src/images/icon/icon-russia.png" alt="russia flag"></a>
                    </li>
                    <li>
                      <a href="<?='/en/' . $path?>"><img src="/template/src/images/icon/icon-englsih.png" alt="english flag"></a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
        </ul>
    </div>


    <div class="off-canvas-content" style="min-height: 300px;" data-off-canvas-content>
        <div id="foo" class="page-wrapper">

            <!--begin header-->
            <header id="header" class="header topbar-sticky-shrink-header">

                <div data-sticky-container>
                    <div class="full" data-sticky data-margin-top="0">
                        <div class="top-bar topbar-sticky-shrink">
                            <nav class="header-bottom">
                                <div class="row">
                                    <div class="small-12 small columns">
                                        <div class="logo service-menu__logo">
                                            <a href="<?=SITE_DIR?>" rel="first" class="link">
                                                <h1 class="logo__header">Claude Monet</h1>
                                            </a>
                                        </div>
                                        <button class="burg-wrapper burg-wrapper_align_right" data-toggle="offCanvasRight">
                                            <span class="burg"></span>
                                        </button>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!--end header-->
            <main class="main">