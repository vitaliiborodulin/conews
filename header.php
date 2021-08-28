<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
  <link rel="icon" href="/favicon.svg" sizes="any" type="image/svg+xml">

  <meta name="description" content="<?php bloginfo('description');  ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="container">
		<div class="header__content">

      <button class="header__menu-toggle" type="button" title="Меню"><img src="<?php bloginfo('template_url'); ?>/assets/images/svg/menu.svg" alt="" width="26" height="19"></button>

      <div class="header__menu">

        <div class="header__search">
          <?php get_search_form(); ?>
        </div>

        <?php wp_nav_menu([
          'theme_location' => 'header',
          'depth'          => 4,
          'link_before'    => '<div class="header__nav-link">',
          'link_after'     => '</div>',
          'container'      => false,
          'fallback_cb'    => false,
          'items_wrap'     => '<nav class="header__nav"><ul>%3$s</ul></nav>',
        ]); ?>

        <!-- <div class="header__subscribe">
          <p class="header__slogan">Мы не храним секретов красоты</p>
          <?php //echo do_shortcode('[contact-form-7 id="10" title="Контактная форма в подвале"]') ?>
        </div> -->
        
      </div>

      <a href="<?php echo home_url(); ?>" class="header__logo"><img src="<?php bloginfo('template_url'); ?>/assets/images/svg/logo.svg" alt="" width="219" height="101"></a>

      <!-- user panel -->
      <?php get_template_part( 'template-parts/share' ); ?>
      <!-- .user panel -->

		</div>

    <div class="header__bottom">
      <div class="container">

          <?php wp_nav_menu([
            'theme_location'  => 'header-bottom',
            'container'       => null,
            'menu_class'      => 'header__bottom-menu'
          ]);?>

      </div>
    </div>

	</div>
</header>