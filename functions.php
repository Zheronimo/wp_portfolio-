<?php 

/************* ACTIONS ***********************/

	// Подключаем скрипты и стили
	add_action('wp_enqueue_scripts', function() {
		// подключаем стили
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
		// подключаем скрипты
		wp_enqueue_script('libs', get_template_directory_uri() .'/js/libs.min.js', array(), null, true );
		wp_enqueue_script('main', get_template_directory_uri() .'/js/main.js', array(), null, true );
	});

	// Регистрируем поддержку новых возможностей темы в WordPress (поддержка миниатюр, форматов записей и т.д.)
	add_action('after_setup_theme', function() {
		// Добавляем возможность загружать миниатюры в посты и страницы
		add_theme_support('post-thumbnails');

		// Добавляем возможность задать цвет фона сайта в настройках
		add_theme_support('custom-background');

		// Регистрируем зону под меню (для регистрации нескольких меню)
		register_nav_menus( [
			'header_menu' => 'Меню в шапке',
			'footer_menu' => 'Меню в подвале'
		]);
	});

	// Регистрируем зону под sidebar (для регистрации нескольких меню register_sidebars)
	add_action( 'widgets_init', function(){
		register_sidebar( [
			'name'          => 'Боковая колонка для постов',
			'id'            => 'sidebar-post-single',
			'description'   => '',
			'class'         => '',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => "</li>\n",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
		]);
	});


	/************* FILTERS ***********************/

	
	// Фильтры для кастомизации пунктов меню

	//добавляем класс тегам <li></li> 
	add_filter( 'nav_menu_css_class', function( $classes, $item, $args, $depth ) {
		$newClasses = [];
		// в зависимости от меню присваиваем классы
		if($args->theme_location === 'footer_menu'):
			$newClasses[] = 'nav-menu__item';
		else:
			$newClasses[] = 'ham-menu__item';
		endif;
		/* Добавляем класс active тегам <li>/li>  
			if(in_array('current-menu-item', $classes)){
				$newClasses[] = 'active';
		} */
		return $newClasses; 
	}, 10, 4 );

	//обнуляем значение id тегам <li>/li>
	add_filter( 'nav_menu_item_id', function( $menu_id, $item, $args, $depth ) {
		return ''; 
	}, 10, 4 );

	//добавляем класс тегам <a></a> 
	add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args, $depth ){
		// в зависимости от меню присваиваем классы
		if($args->theme_location === 'footer_menu'):
			if (!isset($atts['class'])):
				$atts['class'] = '';
			endif;
			$atts['class'] .= ' nav-menu__link';
		else:
			$atts['class'] .= ' ham-menu__link';
		endif;
		// Для подсветки активного пункта
		if($atts['aria-current'] === 'page') {
			$atts['class'] .= ' active';
		}
		$atts['class'] = trim($atts['class']);
		return $atts;
	}, 10, 4 );

