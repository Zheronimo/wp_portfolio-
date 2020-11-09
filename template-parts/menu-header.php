<?php wp_nav_menu([
	'theme_location' => 'header_menu',
	'container' => 'nav',
	'container_class' => 'ham-menu',
	'menu_class' => 'ham-menu__list',
	'items_wrap' => '<ul class="%2$s">%3$s</ul>' // убираем id у тега <ul>
]) ?>