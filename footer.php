<footer class="footer">
	<div class="container">
		<div class="footer__content">
			
      <div class="footer__left">
        <a class="footer__logo" href="<?php echo home_url(); ?>">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/svg/logo.svg" alt="" width="219" height="101">
        </a>
        <div class="footer__slogan">Мы не храним секретов красоты</div>
        <div class="form footer__form">
          <?php echo do_shortcode('[contact-form-7 id="10" title="Контактная форма в подвале"]') ?>
        </div>
      </div>

      <div class="footer__center">
        <?php wp_nav_menu([
          'theme_location'  => 'footer-1',
          'container'       => null,
          'menu_class'      => 'footer__menu'
        ]);?>
      </div>

      <div class="footer__right">
        <?php wp_nav_menu([
          'theme_location'  => 'footer-2',
          'container'       => null,
          'menu_class'      => 'footer__menu'
        ]);?>
      </div>

      <!-- user panel -->
      <?php get_template_part( 'template-parts/share' ); ?>
      <!-- .user panel -->

		</div>
</div>
</footer>

  <?php wp_footer(); ?>
</body>

</html>