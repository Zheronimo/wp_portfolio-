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

			<?php get_template_part('template-parts/menu-header') ?>
			
      </div>
			<section class="section hero" data-speed="2">
        <ul class="socials">
          <li class="socials__item"><a class="socials__link socials__link_fb" href="#">
              <svg class="icon icon-fb hero-icon">
                <use xlink:href="static/img/svg/symbol/sprite.svg#fb"></use>
              </svg></a></li>
          <li class="socials__item"><a class="socials__link socials__link_gh" href="#">
              <svg class="icon icon-gh hero-icon">
                <use xlink:href="static/img/svg/symbol/sprite.svg#gh"></use>
              </svg></a></li>
          <li class="socials__item"><a class="socials__link socials__link_in" href="#">
              <svg class="icon icon-in hero-icon">
                <use xlink:href="static/img/svg/symbol/sprite.svg#in"></use>
              </svg></a></li>
        </ul>
        <div class="hero__title">
          <div class="user hero__user-block">
            <div class="user__photo">
              <div class="user__photo-avatar"><img src="static/img/avatar.jpg" alt=""/></div>
            </div>
            <h2 class="title user__name user__name-blog">Блог</h2>
            <div class="user__desc">Статьи</div>
          </div>
        </div>
      </section>