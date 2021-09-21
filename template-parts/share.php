<ul class="share">
  <li>
    <a class="click search__click" href="#" title="Поиск"><img src="<?php bloginfo('template_url'); ?>/assets/images/svg/search.svg" alt="" width="20" height="20"></a>
    <div class="popup form search__form search__popup">
      <?php get_search_form(); ?>
    </div>
  </li>
  <!-- <li>
    <a class="click share__click" href="#" title="Написать в соцсети"><img src="<?php bloginfo('template_url'); ?>/assets/images/svg/share.svg" alt="" width="20" height="20"></a>
    <div class="popup share__popup">
      <ul>
        <li><a href="https://www.instagram.com/newscosmetology/" title="Instagram" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/svg/insta.svg" alt="" width="30" height="30"></a></li>
        <li><a href="https://vk.com/newscosmetology" title="Vkontakte" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/svg/vk.svg" alt="" width="30" height="30"></a></li>
        <li><a href="https://www.facebook.com/Newscosmetology-104488135228150" title="Facebook" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/svg/facebook.svg" alt="" width="30" height="30"></a></li>
        <li><a href="https://vm.tiktok.com/ZSJG5jrv4/" title="Tiktok" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/svg/tiktok.svg" alt="" width="30" height="30"></a></li>
      </ul>
    </div>
  </li> -->
  <li>
    <a class="click subscribe__click" href="#" title="Подписаться на рассылку"><img src="<?php bloginfo('template_url'); ?>/assets/images/svg/star.svg" alt="" width="20" height="20"></a>
    <div class="popup form subscribe__form subscribe__popup">
      <?php echo do_shortcode('[contact-form-7 id="10" title="Контактная форма в подвале"]') ?>
    </div>
  </li>
  <!-- <li>
    <a class="click login__click" href="#" title="Войти"><img src="<?php //bloginfo('template_url'); ?>/assets/images/svg/member.svg" alt="" width="20" height="20"></a>
    <div class="popup form login__form login__popup">
      <form action="#">
        <input class="form__input" type="text" name="your-name" placeholder="Имя" required>
        <input class="form__input" type="password" name="your-pass" placeholder="Пароль" required>
        <input class="btn btn-submit form__submit" type="submit" value="Войти">
      </form>
    </div>
  </li> -->
</ul>