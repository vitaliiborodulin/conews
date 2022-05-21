<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#F6E3E4">
  <?php wp_head(); ?>
  <link rel="icon" href="/favicon.svg" sizes="any" type="image/svg+xml">
  <style>.content__caption:before {content: '<?php echo mb_substr(get_the_title(),0,1); ?>';}</style>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="container">
		<div class="header__content">

      <button class="header__menu-toggle" type="button" title="Меню">
				<svg width="27" height="19" viewBox="0 0 27 19" xmlns="http://www.w3.org/2000/svg">
					<path d="M25.5768 0C25.9804 0 26.3076 0.327165 26.3076 0.730769C26.3076 1.13437 25.9804 1.46154 25.5768 1.46154H0.730694C0.327101 1.46154 -7.43866e-05 1.13437 -7.43866e-05 0.730769C-7.43866e-05 0.327165 0.327101 0 0.730694 0H25.5768ZM25.5768 8.76923C25.9804 8.76923 26.3076 9.0964 26.3076 9.5C26.3076 9.9036 25.9804 10.2308 25.5768 10.2308H0.730694C0.327101 10.2308 -7.43866e-05 9.9036 -7.43866e-05 9.5C-7.43866e-05 9.0964 0.327101 8.76923 0.730694 8.76923H25.5768ZM25.5768 17.5385C25.9804 17.5385 26.3076 17.8656 26.3076 18.2692C26.3076 18.6728 25.9804 19 25.5768 19H0.730694C0.327101 19 -7.43866e-05 18.6728 -7.43866e-05 18.2692C-7.43866e-05 17.8656 0.327101 17.5385 0.730694 17.5385H25.5768Z" />
				</svg>
			</button>

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

        <div class="menu__soc">
          <h2>Newscosmetology в соцсетях</h2>
          <!-- socials -->
          <?php get_template_part( 'template-parts/blocks/socials' ); ?>
          <!-- end socials -->
        </div>
        
      </div>

      <div>
        <a href="<?php echo home_url(); ?>" class="header__logo">
          <img class="header__logo--w" src="<?php bloginfo('template_url'); ?>/assets/images/svg/logo-2.svg" alt="" width="201" height="101">
          <img class="header__logo--b" src="<?php bloginfo('template_url'); ?>/assets/images/svg/logo-2b.svg" alt="" width="201" height="101">
        </a>

        <!-- socials -->
        <?php get_template_part( 'template-parts/blocks/socials' ); ?>
        <!-- end socials -->

      </div>

      <!-- user panel -->
      <?php get_template_part( 'template-parts/share' ); ?>
      <!-- end socials-->

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