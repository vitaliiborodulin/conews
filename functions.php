<?php

add_filter('show_admin_bar', '__return_false');

//подключаем стили и скрипты
include_once('inc/css_js.php');

add_theme_support( 'html5', [ 
  'search-form',
	'comment-list',
	'comment-form',
	'search-form',
	'gallery',
	'caption',
	'script',
	'style',
] );

// Полное Удаление версии WP
remove_action('wp_head', 'wp_generator'); // из заголовка
add_filter('the_generator', '__return_empty_string'); // из фидов и URL

// Отключим возможность редактировать файлы в админке для тем, плагинов
// define('DISALLOW_FILE_EDIT', true);

add_action('after_setup_theme', function(){
	register_nav_menu('header', 'Боковое');
	register_nav_menu('header-bottom', 'Верхнее');
	register_nav_menu('footer-1', 'Нижнее-1');
	register_nav_menu('footer-2', 'Нижнее-2');
	
	add_theme_support('post-thumbnails', ['post']);
	add_theme_support('title-tag');
  // add_theme_support('post-formats', ['aside', 'gallery']);
  // add_theme_support('custom-logo');
  //add_image_size('nc_news', 280, 228, true);
  //add_image_size('nc_same', 344, 300, true);
  //add_image_size('nc_slider', 300, 400, true);
  //add_image_size('nc_blog_news', 378, 300, true);//378, 280 news
  add_image_size('nc_blog_first', 608, 483, true);//наверно лучше по-дефолту перейти на это
  add_image_size('nc_blog', 160, 130, true);
});

//Удаление конструкции [...] на конце
add_filter('excerpt_more', function($more) {
	return '...';
	// return '';
});

//Изменение текста в подвале админ-панели
add_filter('admin_footer_text', 'footer_admin_func');
function footer_admin_func () {
	echo 'Написать программисту: <a href="mailto:vitaliiborodulin@yandex.ru" target="_blank">Виталию Бородулину</a>';
}


//Произвольный виджет в консоли в админ-панели
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
function my_custom_dashboard_widgets() {
	wp_add_dashboard_widget('custom_help_widget', 'Сообщение от разработчика', 'custom_dashboard_help');
}

function custom_dashboard_help() {
	echo '<p style="background-color: red; color: white">Полезная информация:<p>
	<ol>
		<li>Чтобы появилось автоматическое содержимое в статьях поменяйте заголовки на h2</li>
		<li>Изучите редактор гутенберг, например <a href="https://youtu.be/-n5ZbySq-2k?t=150" target="_blank">по ссылке</a></li>
		<li>Две колонки делаются в разделе Оформление (Колонки) при добавлении блока</li>
		<li>Чтобы появилось оформление заключения - добавьте класс <b>final</b> последнему блоку заголовка и примыкающему к нему блоку
    (Блок - Дополнительно - Дополнительные классы CSS). <b>Классы добавляются только к блокам!</b></li>
    	<li>добавьте класс <b>final2</b> к последнему блоку если нету заголовка</li>
    	<li>Не забывайте настраивать правильную сео-информацию внизу каждой статьи</li>
		<li>Не забывайте прогонять фоточки через оптимизатор (<a href="https://tinypng.com/">Например такой</a>) до загрузки на сайт, экономьте место и время, это важно!</li>
		<li>Для анимирования блока при прокрутке добавьте ему класс title-animation-idle</li>
		<li>Не создавайте тэги с таким же названием как и категории, у тегов другой смысл (структурировать статьи плоской таксономией). Иначе страница категории и тега имеет одинаковый title и считается поисковыми роботами <b>дублями одной страницы</b></li>
	</ol>
	';
}

include_once( 'inc/dimox_breadcrumbs.php' );
include_once( 'inc/kama_postviews.php');

// wpdiscuz comments plugin shortcode
function my_wpdiscuz_shortcode() {
    $html = "";
    if (file_exists(ABSPATH . "wp-content/plugins/wpdiscuz/themes/default/comment-form.php")) {
        ob_start();
        include_once ABSPATH . "wp-content/plugins/wpdiscuz/themes/default/comment-form.php";
        $html = ob_get_clean();
    }
    return $html;
}
add_shortcode("wpdiscuz_comments", "my_wpdiscuz_shortcode");

//fix autoptimize lazyload (style not allowed as child of element)
add_filter( 'autoptimize_filter_imgopt_lazyload_cssoutput', '__return_false' );
add_action( 'wp_head', function() { echo '<style>.lazyload,.lazyloading{opacity:0;}.lazyloaded{opacity:1;transition:opacity 300ms;}</style>'; }, 2147483647 );


//redirect attachments to their page
function conews_redirect_attachment_page() {
    if ( is_attachment() ) {
        global $post;
        if ( $post && $post->post_parent ) {
            wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
            exit;
        } else {
            wp_redirect( esc_url( home_url( '/' ) ), 301 );
            exit;
        }
    }
}
add_action( 'template_redirect', 'conews_redirect_attachment_page' );

// Дополним базовый robots.txt
// -1 before wp-sitemap.xml
// add_action( 'robots_txt', 'wp_kama_robots_txt_append', -1 );

// function wp_kama_robots_txt_append( $output ){

// 	$str = '
// 	Disallow: /cgi-bin             # Стандартная папка на хостинге.
// 	Disallow: /?                   # Все параметры запроса на главной.
// 	Disallow: *?s=                 # Поиск.
// 	Disallow: *&s=                 # Поиск.
// 	Disallow: /search              # Поиск.
// 	Disallow: /author/             # Архив автора.
// 	Disallow: */embed              # Все встраивания.
// 	Disallow: */xmlrpc.php         # Файл WordPress API
// 	Disallow: *utm*=               # Ссылки с utm-метками
// 	Disallow: *openstat=           # Ссылки с метками openstat
// 	User-agent: Yandex
// 	Clean-param: preview /dir/bookname
// 	';

// 	$str = trim( $str );
// 	$str = preg_replace( '/^[\t ]+(?!#)/mU', '', $str );
// 	$output .= "$str\n";

// 	return $output;
// }

// remove users from sitemap
// add_filter( 'wp_sitemaps_add_provider', 'truemisha_remove_user_sitemap', 25, 2 );
 
// function truemisha_remove_user_sitemap( $provider, $name ) {
 
// 	if ( 'users' === $name ) { // если архивы пользователей, то отключаем
// 		return false;
// 	}
// 	return $provider;
 
// }