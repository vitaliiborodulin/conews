<?php get_header(); ?>

<section class="quiz">
    <div class="container">

      <div class="quiz__top quiz__top--alter">
        <h1 class="section-caption content__caption quiz__caption">Тест Джиллиан Майклс на определение типа метаболизма</h1>
        <p>Этот тест взят из книги Джиллиан Майклс «Making the cut». В каждом вопросе выберите наиболее подходящий для себя один из трёх вариантов ответа. Не торопитесь с ответом на поставленный вопрос, будьте честны с собой в каждом утверждении.</p>
      </div>

      <div class="quiz__over-modal">
        <h2>Ваш метаболизм</h2>
        <div class="quiz__comments quiz__comments--alter"></div>

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

        <h2 class="quiz__question quiz__question--alt">
            <span class="quiz__number">Вопрос
                <span class="quiz__number-of-question"></span> из
                <span class="quiz__number-of-all-questions"></span>.
            </span>
            <span class="quiz__name"></span>
        </h2>

        <div class="quiz__content quiz__content--alter"></div>
        <button id="quiz-next" class="btn btn-quiz" disabled>Далее</button>

      </div>

      <!-- <div class="comments">
        <h2 class="comments__title">Комментарии</h2>
        <?php //echo do_shortcode('[wpdiscuz_comments]'); ?>
      </div> -->

    </div>
  </section>

<?php get_footer(); ?>