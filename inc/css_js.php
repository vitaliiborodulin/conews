<?php

add_action('wp_enqueue_scripts', function(){
  if ( is_front_page() && !is_paged()){
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', false, null, true);
  }
  
	wp_enqueue_style('style', get_stylesheet_uri());

  // wp_enqueue_script( 'jquery' );
  // отменяем зарегистрированный jQuery
	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');

	// регистрируем
	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true );

	// подключаем
	wp_enqueue_script( 'jquery' );

  wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true);

  if(is_page( 14564 )){
	  wp_enqueue_script('kirby', get_template_directory_uri() . '/assets/js/kirby.js', ['jquery'], null, true);
  }

  if(is_page( 15091 )){
	  wp_enqueue_script('skin-diagnostic', get_template_directory_uri() . '/assets/js/skin-diagnostic.js', ['jquery'], null, true);
  }

  if(is_page( 15811 )){
	  wp_enqueue_script('imt', get_template_directory_uri() . '/assets/js/imt.js', ['jquery'], null, true);
  }
  
});