<!DOCTYPE html>
<html <?php bloginfo('language') ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="/img/fav_forest.png" type="image/png">
    <title><?php the_title() ?></title>
		<?php wp_head() ?>
  </head>
  <body>
    <div class="wrapper">
      <section class="section preloader">
        <div class="preloader__percents">0%</div>
        <svg class="icon icon-forest preloader__icon">
          <use xlink:href="static/img/svg/symbol/sprite.svg#forest"></use>
        </svg>
      </section>
      <div class="humburger-menu__btn">
        <button class="humburger-btn"><span class="humburger-btn__line"></span><span class="humburger-btn__line"></span><span class="humburger-btn__line"></span></button>
      </div>
      <div class="humburger-menu__ham-menu">
        <!-- <nav class="ham-menu">
          <ul class="ham-menu__list">
            <li class="ham-menu__item"><a class="ham-menu__link" href="works.html">Мои работы</a></li>
            <li class="ham-menu__item"><a class="ham-menu__link" href="about.html">Обо мне</a></li>
            <li class="ham-menu__item"><a class="ham-menu__link" href="blog.html">Блог</a></li>
            <li class="ham-menu__item"><a class="ham-menu__link" href="index.html">Авторизация</a></li>
          </ul>
        </nav> -->
				<?php wp_nav_menu([
					'theme_location' => 'header_menu',
					'container' => 'nav',
					'container_class' => 'ham-menu',
					'menu_class' => 'ham-menu__list'
				]) ?>
      </div>