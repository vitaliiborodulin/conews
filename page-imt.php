<?php get_header(); ?>

<section class="quiz">
    <div class="container">

      <div class="quiz__top quiz__top--alter">
        <h1 class="section-caption content__caption quiz__caption">Расчет идеального веса через Индекс Массы Тела (ИМТ)</h1>
        <p>Многие люди из-за своего неудовлетворения отражением в зеркале стараются скорее сесть на диету и бороться с лишним весом. Изнуряющие организм диеты могут быть не нужны, потому что на самом деле окажется, что терять вес и вовсе не нужно. Прежде всего, определите свой идеальный вес, который выстраивается из показателей роста, веса и телосложения. Результат теста подскажет точно, что нужно делать со своим телом: садиться на диету или оставить все как есть. Если все-таки лишние килограммы присутствуют, то калькулятор поможет рассчитать ту цифру на весах, к которой нужно стремиться.</p>
      </div>

      <div class="quiz__over-modal">
        <h2>Ваш текущий ИМТ: <span id="total"></span></h2>
        <div class="quiz__norma">Норма веса: <span id="imt-min"></span> - <span id="imt-max"></span></div>
        <div class="quiz__final"></div>
        <div class="quiz__comments quiz__comments--alter">
          <p>Необходимый показатель индекса рассчитывается следующим образом. Необходимо разделить массу тела человека на показатель роста в квадрате и в метрах. Полученный результат нужно соотнести с данными в таблице:</p>
          <ul>
            <li>Менее 16 – существенный недостаток массы тела;</li>
            <li>От 16 до 18,5 – недостаточный вес тела;</li>
            <li>От 18,5 до 25 – нормальный вес тела;</li>
            <li>От 25 до 30 – превышение нормы веса человека;</li>
            <li>От 30 до 35 – 1-ая степень ожирения, у вас избыточный вес тела;</li>
            <li>От 35 до 40 – 2-ая степень, у вас избыточный вес тела;</li>
            <li>От 40 и далее – 3-ая степень, у вас избыточный вес тела. Необходимо срочно задуматься о коррекции веса, так как нарушается работа многих органов и систем человека.</li>
          </ul>
          <p>Для того, чтобы рассчитать свою идеальную массу, нужно исходить из значений нормы. Нужно помнить о том, что полученный показатель является приближенным и дает лишь предположительный результат для взрослого человека.</p>
        </div>

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

            <div class="quiz__content">
                <p class="quiz__inp-wrapper"> 
                    <label for="height">Рост (сантиметры)</label>
                    <input type="number" id="height" placeholder="175" min="100" max="300">
                    <input type="range" min="100" max="300" id="height-range" value="0">
                </p>
                <p class="quiz__inp-wrapper">
                    <label for="weight">Вес (килограммы)</label>
                    <input type="number" id="weight" placeholder="75" min="30" max="300">
                    <input type="range" min="30" max="300" id="weight-range" value="0">
                </p>
            </div>

            <button id="quiz-next" class="btn btn-quiz" disabled>Рассчитать</button>

        </div>

        <div class="comments">
          <h2 class="comments__title">Комментарии</h2>
          <?php echo do_shortcode('[wpdiscuz_comments]'); ?>
        </div>


    </div>
  </section>

<?php get_footer(); ?>