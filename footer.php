<footer class="footer" itemscope itemtype="http://schema.org/WPFooter">
  <meta itemprop="copyrightYear" content="<?php date("Y") ?>">
  <meta itemprop="copyrightHolder" content="Newscosmetology.com">

	<div class="container">
		<div class="footer__content">
			
      <div class="footer__left">
        <a class="footer__logo" href="<?php echo home_url(); ?>">
					<img class="footer__logo--w" src="<?php bloginfo('template_url'); ?>/assets/images/svg/logo-2.svg" alt="" width="201" height="101">
          <img class="footer__logo--b" src="<?php bloginfo('template_url'); ?>/assets/images/svg/logo-2b.svg" alt="" width="201" height="101">
        </a>

        <!-- socials -->
        <?php get_template_part( 'template-parts/blocks/socials' ); ?>
        <!-- end socials -->

        <div class="footer__slogan">
					<p class="footer__slogan--first">Мы не храним секретов красоты</p>
					<p>Подписывайся на новости нашего сайта, <br>чтобы быть в курсе последних событий</p>
				</div>
        <div class="form footer__form">
          <?php echo do_shortcode('[contact-form-7 id="10" title="Контактная форма в подвале"]') ?>
        </div>
      </div>

      <div class="footer__center">

        <div id="yandex_rtb_R-A-873318-1"></div>
        <script>window.yaContextCb.push(()=>{
          Ya.Context.AdvManager.render({
            renderTo: 'yandex_rtb_R-A-873318-1',
            blockId: 'R-A-873318-1'
          })
        })</script>

      </div>

      <div class="footer__right">
        
        <?php wp_nav_menu([
          'theme_location'  => 'footer-1',
          'container'       => null,
          'menu_class'      => 'footer__menu'
        ]);?>

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

<div id="scroll-button">
    <div id="scroll-button_up" class="scroll-action_up">
        <svg aria-hidden="true" data-icon="arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M6.101 261.899L25.9 281.698c4.686 4.686 12.284 4.686 16.971 0L198 126.568V468c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12V126.568l155.13 155.13c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 35.515c-4.686-4.686-12.284-4.686-16.971 0L6.101 244.929c-4.687 4.686-4.687 12.284 0 16.97z" fill="' . $webnavoz_button_button_color . '"></path>
        </svg>
    </div>
    <div id="scroll-button_middle">
        <span class="scroll-action_perc"></span>
    </div>
    <div id="scroll-button_down" class="scroll-action_down">
        <svg aria-hidden="true" data-prefix="far" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M441.9 250.1l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L250 385.4V44c0-6.6-5.4-12-12-12h-28c-6.6 0-12 5.4-12 12v341.4L42.9 230.3c-4.7-4.7-12.3-4.7-17 0L6.1 250.1c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"></path>
        </svg>
    </div>
</div>

  <?php wp_footer(); ?>
</body>

</html>