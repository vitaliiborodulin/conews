<?php get_header(); ?>

  <section class="quiz">
    <div class="container">

      <style>.content__caption:before {content: '<?php echo mb_substr(get_the_title(),0,1); ?>';}</style>
      <h1 class="section-caption content__caption quiz__caption">Калькулятор расчета числа сеансов лазерного удаления тату</h1>

      <div class="quiz__over-modal">
        <h2>Ориентировочное число необходимых сеансов: <span id="total"></span></h2>
        <div class="quiz__comments"></div>

        <div class="quiz__over-wrapper">
          <div class="quiz__share">
            <div class="quiz__share-title">Понравился тест? Поделись!</div>
            <script async src="https://yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,facebook,telegram,whatsapp"></div>
          </div>
          <button id="quiz-try-again" class="btn btn-quiz">Попробуй снова</button>
        </div>
        
        <div class="quiz__disclaimer">* Приведенный выше расчет носит условный характер и произведен на основе указанных вами параметров. Реальное количество сеансов может иметь отличия от расчета и зависит от типа используемого оборудования, выбранных настроек и методик воздействия лазером. Приведенные в расчете сведения предназначены исключительно для информирования пользователя, прямо не указывают на возможность получения положительного результата, не являются указанием к действиям для пользователя. Информация из расчета не выступает в качестве публичной оферты, порядок акцепта которой предусматривается ст. 437 ГК РФ. Обратите внимание, что к получению медицинских услуг, включая методы профилактики и диагностики, последующей реабилитации, предусматривается наличие возможных медицинских противопоказаний. Перед проведением процедуры нужно ознакомиться с имеющимися противопоказаниями, получить консультацию специалиста по вопросам получения интересующих вас медицинских услуг. Информация из расчета не является основой для самостоятельной постановки диагноза и применения лечения, она неспособна заменить консультацию врача в очной форме. Расчет осуществлен на основе указанных вами данных и применения шкалы Кирби Дезай.</div>
      </div>

      <div class="quiz-container">

        <h2 class="quiz__question quiz__question--alt">
          <div class="quiz__number">Вопрос
            <span class="quiz__number-of-question"></span> из
            <span class="quiz__number-of-all-questions"></span>.
          </div>
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