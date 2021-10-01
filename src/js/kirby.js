const questions = [{
        question: 'Тип кожи:',
        options: [{
                name: 'Всегда сгорает. Никогда не загорает',
                points: 1,
                image: '/wp-content/themes/conews/assets/images/kirby/skin-1.svg',
                comment: 'У вас самый светлый I тип кожи (кельтский фототип кожи) по шкале Фитцпатрика. Это наиболее удачный тип кожи для удаления тату. Нет ограничений по применению длин волн 1064нм и 532нм'
            },
            {
                name: 'Преимущественно сгорает. Редко загорает',
                points: 2,
                image: '/wp-content/themes/conews/assets/images/kirby/skin-2.svg',
                comment: 'У вас светлый II тип кожи (нордический фототип кожи) по шкале Фитцпатрика. Это удачный тип кожи для удаления тату. Нет ограничений по применению длин волн 1064нм и 532нм'
            },
            {
                name: 'Иногда сгорает. Умеренно загорает',
                points: 3,
                image: '/wp-content/themes/conews/assets/images/kirby/skin-3.svg',
                comment: 'У вас умеренно светлый III тип кожи (темный европейский фототип кожи) по шкале Фитцпатрика. Это подходящий тип кожи для удаления тату. Нет ограничений по применению длин волн 1064нм и 532нм. '
            },
            {
                name: 'Редко сгорает. Обычно загорает',
                points: 4,
                image: '/wp-content/themes/conews/assets/images/kirby/skin-4.svg',
                comment: 'У вас светло-коричневый IV тип кожи (средиземноморский фототип кожи) по шкале Фитцпатрика. Этот тип кожи имеет ограничение по применению длины волн 532нм'
            },
            {
                name: 'Почти никогда не сгорает. Отлично загорает',
                points: 5,
                image: '/wp-content/themes/conews/assets/images/kirby/skin-5.svg',
                comment: 'У вас коричневый V тип кожи (индонезийский фототип кожи) по шкале Фитцпатрика. Этот тип кожи имеет ограничение по применению длины волн 532нм'
            },
            {
                name: 'Никогда не сгорает. Всегда загорелая',
                points: 6,
                image: '/wp-content/themes/conews/assets/images/kirby/skin-6.svg',
                comment: 'У вас темно-коричневый VI тип кожи (афроамериканский фототип кожи) по шкале Фитцпатрика. Этот тип кожи имеет ограничение по применению длины волн 532нм. Также есть необходимость снижать плотность энергии при работе длиной волны 1064нм.'
            }
        ]
    },
    {
        question: 'Расположение тату:',
        options: [{
                name: 'Голова, шея, лицо',
                points: 1,
                image: '/wp-content/themes/conews/assets/images/kirby/location-1.svg',
                comment: 'Расположение татуировки на голове, шее или лице требует обычно меньшее число сеансов по сравнению с другими локациями.'
            },
            {
                name: 'Торс, плечи',
                points: 2,
                image: '/wp-content/themes/conews/assets/images/kirby/location-2.svg',
                comment: 'Расположение тату на торсе и плечах требует обычно меньшее число сеансов чем тату на нижней и более дистальных частях тела.'
            },
            {
                name: 'Область таза, бедра',
                points: 3,
                image: '/wp-content/themes/conews/assets/images/kirby/location-3.svg',
                comment: 'Тату в области таза и бедер удаляются медленнее, чем на верхней половине тела, однако быстрее чем на голенях и стопах.'
            },
            {
                name: 'Предплечья, голени',
                points: 4,
                image: '/wp-content/themes/conews/assets/images/kirby/location-4.svg',
                comment: 'Татуировки на предплечьях и голенях обычно требуют большего числа сеансов, чем тату расположенные ближе центру тела.'
            },
            {
                name: 'Кисти, стопы',
                points: 5,
                image: '/wp-content/themes/conews/assets/images/kirby/location-5.svg',
                comment: 'Татуировки расположенные на кистях и стопах при прочих равных условиях будут требовать большее число сеансов чем, расположенные ближе к центру тела.'
            },
        ]
    },
    {
        question: 'Плотность пигмента:',
        options: [{
                name: 'Мало, легкая тень',
                points: 1,
                image: '/wp-content/themes/conews/assets/images/kirby/ink-1.svg',
                comment: 'Малое количество пигмента улучшает прогноз полного удаления тату.'
            },
            {
                name: 'Меньше среднего',
                points: 2,
                image: '/wp-content/themes/conews/assets/images/kirby/ink-2.svg',
                comment: 'Количество пигмента меньше среднего обычно характерно для любительских и непрофессиональных татуировок, для их удаления обычно требуется меньше сеансов чем для профессиональных.'
            },
            {
                name: 'Средне, обыкновенная',
                points: 3,
                image: '/wp-content/themes/conews/assets/images/kirby/ink-3.svg',
                comment: 'Среднее количество пигмента, обыкновенная татуировка. Обычно требует большего числа сеансов, чем слабый прокрас или старые бледные тату.'
            },
            {
                name: 'Плотный цвет',
                points: 4,
                image: '/wp-content/themes/conews/assets/images/kirby/ink-4.svg',
                comment: 'Плотный цвет тату потребует дополнительных сеансов удаления. Не ждите быстрых результатов. Удаление тату это марафон, а не спринт.'
            }
        ]
    },
    {
        question: 'Наслоение пигмента:',
        options: [{
                name: 'Один слой',
                points: 0,
                image: '/wp-content/themes/conews/assets/images/kirby/layering-1.svg',
                comment: 'Вам повезло, что ваша тату выполнена в один слой, это уменьшает число необходимых сеансов лазерного удаления.'
            },
            {
                name: 'Больше одного слоя',
                points: 2,
                image: '/wp-content/themes/conews/assets/images/kirby/layering-2.svg',
                comment: 'Больше одного слоя - это означает, что вы уже пытались перекрыть тату без удаления. Идея не самая лучшая, поэтому теперь придется делать дополнительные сеансы, чтобы очистить кожу от двух татуировок.'
            }
        ]
    },
    {
        question: 'Состояние кожи:',
        options: [{
                name: 'Здоровая кожа',
                points: 0,
                image: '/wp-content/themes/conews/assets/images/kirby/scarring-1.svg',
                comment: 'Здоровая кожа - это отлично! Татуировку вам делал профессионал и не повредил ее. Это облегчает удаление пигмента лазером! Обязательно найдите хорошего специалиста, чтобы не получить рубцы во время удаления тату!'
            },
            {
                name: 'Слегка травмированная',
                points: 1,
                image: '/wp-content/themes/conews/assets/images/kirby/scarring-2.svg',
                comment: 'Слегка травмированная кожа - это признак повреждений полученных при нанесении тату или при попытках удаления! Это затруднит процесс очищения кожи от пигмента!'
            },
            {
                name: 'Отчетливо травмированная',
                points: 3,
                image: '/wp-content/themes/conews/assets/images/kirby/scarring-3.svg',
                comment: 'Отчетливо травмированная кожа - это признак повреждений полученных при нанесении тату или при попытках удаления! Это прилично затруднит процесс очищения кожи от пигмента!'
            },
            {
                name: 'Сильно травмированная',
                points: 5,
                image: '/wp-content/themes/conews/assets/images/kirby/scarring-4.svg',
                comment: 'Сильно травмированная кожа - это признак повреждений полученных при нанесении тату или при попытках удаления! Это значительно затруднит процесс очищения кожи от пигмента!'
            }
        ]
    },
    {
        question: 'Цвета тату:',
        options: [{
                name: 'Только черный',
                points: 1,
                image: '/wp-content/themes/conews/assets/images/kirby/colors-1.svg',
                comment: 'Только черный цвет - это идеальная ситуация для удаления тату! Хорошие шансы удалить такую тату полностью до чистой кожи!'
            },
            {
                name: 'В основном черный с добавлением красного',
                points: 2,
                image: '/wp-content/themes/conews/assets/images/kirby/colors-2.svg',
                comment: 'В основном черный с добавлением красного - это неплохой вариант для удаления Nd:YAG Q-switch лазером. Эти цвета достаточно хорошо поддаются длинам волн 1064нм 532нм!'
            },
            {
                name: 'Черный, красный и немного других цветов',
                points: 3,
                image: '/wp-content/themes/conews/assets/images/kirby/colors-3.svg',
                comment: 'Черный, красный и немного других цветов - это означает, что некоторые части тату могут до конца не уйти под действием Nd:YAG Q-switch лазера и потребуется большее число сеансов.'
            },
            {
                name: 'Многоцветная татуировка',
                points: 4,
                image: '/wp-content/themes/conews/assets/images/kirby/colors-4.svg',
                comment: 'Многоцветная татуировка - это тяжелая работа для Nd:YAG Q-switch лазера. Часть цветов точно не получится удалить и возможно придется воздействовать другими длинами волн и другими лазерными системами для полного удаления такой тату!'
            }
        ]
    },
];

let score = 0;
let indexOfPage = 0;

const numberOfQuestion = $('.quiz__number-of-question'),
    numberOfAllQuestions = $('.quiz__number-of-all-questions');

const question = $('.quiz__name'),
    options = $('.quiz__content');

const btnNext = $('#quiz-next');

const totalScore = $('#total'),
    btnTryAgain = $('#quiz-try-again'),
    quizOverModal = $('.quiz__over-modal'),
    quizComments = document.querySelector('.quiz__comments');

numberOfAllQuestions.html(questions.length);

options.on('click', '.quiz__item', function() {
    $(this).addClass('quiz__item--choose').siblings().removeClass('quiz__item--choose');
    btnNext.prop("disabled", false);
});

function render(indexOfQuestion) {

    if (indexOfPage >= 1) {
        $('.quiz__caption').slideUp();
        // $('.quiz__top p').slideUp();
    }

    if (indexOfPage == questions.length) {
        quizOver();
        return;
    }

    question.html(questions[indexOfQuestion].question);

    //вычисляем сколько вариантов ответа нужно
    let optionsNumber = questions[indexOfQuestion].options.length;

    //генерируем нужное количество вариантов ответа
    for (let i = 0; i < optionsNumber; i++) {

        let name = questions[indexOfQuestion].options[i].name;
        let $name = $('<div class="quiz__descr">' + name + '</div>');

        let image = questions[indexOfQuestion].options[i].image;
        let $image = $('<div class="quiz__image"><img src="' + image + '" alt=""></div>');

        let optionScore = questions[indexOfQuestion].options[i].points;
        let comment = questions[indexOfQuestion].options[i].comment;

        $('<div class="quiz__item"></div>')
            .append($image)
            .append($name)
            .attr('data-score', optionScore)
            .attr('data-comment', comment)
            .appendTo(options);
    }

    numberOfQuestion.html(indexOfQuestion + 1);
}

function validate() {
    let disableNext = options.children().hasClass('quiz__item--choose');

    if (!disableNext) {
        alert('Выберите вариант ответа!')
    } else {
        options.children().each(function(index, element) {
            if ($(element).hasClass('quiz__item--choose')) {
                //суммируем баллы с выбранным вариантом
                score += parseInt($(element).data('score'));
                //добавляем комментарии выбранного варианта на финальный экран
                let currentComment = $(element).data('comment');
                $('<div></div>')
                    .append(currentComment)
                    .appendTo(quizComments);
            }
        });

        //стираем варианты от предыдущего вопроса
        options.html('');
        indexOfPage++;
        render(indexOfPage);
        btnNext.prop('disabled', true)

        if ($(window).width() < 500) {
            $('body,html').animate({ scrollTop: 0 }, 800);
        }
    }
}


function quizOver() {
    $('.quiz-container').hide();
    totalScore.html(score);
    quizOverModal.show();
    // $('.ya-share2').attr('data-title', 'Для удаления моей тату может потребоваться ' + score + ' сеансов');
}

function tryAgain() {
    window.location.reload();
}

btnNext.on('click', validate);
btnTryAgain.on('click', tryAgain);

$(function() {
    render(indexOfPage);
});