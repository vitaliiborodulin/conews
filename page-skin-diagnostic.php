<?php get_header(); ?>

<section class="quiz">
    <div class="container">

      <style>.content__caption:before {content: '<?php echo mb_substr(get_the_title(),0,1); ?>';}</style>
      <div class="quiz__top">
        <h1 class="section-caption content__caption quiz__caption">ТЕСТ: Какой у вас тип кожи?</h1>
        <p>Хотите определить свой тип кожи лица? Пройдите наш бесплатный тест и получите советы по уходу за Вашим типом кожи.</p>
      </div>

      <div class="quiz__over-modal">
        <h2>Тип вашей кожи: <span id="total"></span></h2>
        <div class="quiz__comments"></div>

        <div class="quiz__over-wrapper">
          <div class="quiz__share">
            <div class="quiz__share-title">Понравился тест? Поделись!</div>
            <script async src="https://yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,facebook,telegram,whatsapp"></div>
          </div>
          <button id="quiz-try-again" class="btn btn-quiz">Попробуй снова</button>
        </div>

      </div>

      <div class="quiz-container">

        <h2 class="quiz__question">
          <span class="quiz__number">Вопрос
            <span class="quiz__number-of-question"></span> из
            <span class="quiz__number-of-all-questions"></span>.
          </span>
          <span class="quiz__name"></span>
        </h2>

        <div class="quiz__content"></div>
        <button id="quiz-next" class="btn btn-quiz" disabled>Далее</button>

      </div>

      <div class="comments">
        <h2 class="comments__title">Комментарии</h2>
        <?php echo do_shortcode('[wpdiscuz_comments]'); ?>
      </div>

    </div>
  </section>

<?php get_footer(); ?>