<?php wp_nav_menu([
	'theme_location' => 'footer_menu',
	'container' => false,
	'menu_class' => 'nav-menu footer__nav-menu',
	'items_wrap' => '<ul class="%2$s">%3$s</ul>' // убираем id у тега <ul>
]) ?>