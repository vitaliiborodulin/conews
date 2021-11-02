const questions = [{
        question: ' Часто ли вы испытываете тягу к новым впечатлениям, к тому, чтобы отвлечься, испытывать сильные ощущения?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Часто ли вы чувствуете, что нуждаетесь в друзьях, которые могут вас понять, ободрить или посочувствовать?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Считаете ли вы себя беззаботным человеком?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Очень ли трудно вам отказываться от своих намерений?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Обдумываете ли вы свои дела не спеша и предпочитаете ли подождать, прежде чем действовать?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Всегда ли вы сдерживаете свои обещания, даже если это вам невыгодно?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Часто ли у вас бывают спады и подъёмы настроения?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    },
    {
        question: 'Быстро ли вы обычно действуете и говорите, не тратите ли много времени на обдумывание?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Возникало ли у вас когда-нибудь чувство, что вы несчастны, хотя никакой серьёзной причины для этого не было?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Верно ли, что на спор вы способны решиться на всё?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Смущаетесь ли вы, когда хотите познакомиться с человеком противоположного пола, который вам симпатичен?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Бывает ли когда-нибудь, что, разозлившись, вы выходите из себя?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Часто ли бывает, что вы действуете необдуманно, под влиянием момента?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Часто ли вас беспокоят мысли о том, что вам не следовало чего-либо делать или говорить?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Предпочитаете ли вы чтение книг встречам с людьми?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Верно ли, что вас легко задеть?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Любите ли вы часто бывать в компании?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Бывают ли иногда у вас такие мысли, которыми вам не хотелось бы делиться с другими людьми?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Верно ли, что иногда вы настолько полны энергии, что все горит в руках, а иногда чувствуете сильную вялость?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Стараетесь ли вы ограничить круг своих знакомых небольшим числом самых близких друзей?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Много ли вы мечтаете?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Когда на вас кричат, отвечаете ли вы тем же?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Часто ли вас беспокоит чувство вины?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Часто ли у вас появляется чувство, что вы в чем-то виноваты?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Способны ли вы иногда дать волю своим чувствам и беззаботно развлечься с весёлой компанией?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Можно ли сказать, что нервы у вас часто бывают натянуты до предела?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Слывёте ли вы за человека живого и весёлого?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'После того как дело сделано, часто ли вы мысленно возвращаетесь к нему и думаете, что могли бы сделать лучше?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Чувствуете ли вы себя неспокойно, находясь в большой компании?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Бывает ли, что вы передаёте слухи?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Бывает ли, что вам не спится из-за того, что в голову лезут разные мысли?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Если хотите узнать что-либо, то вы предпочитаете найти это в книге, Интернете, чем спросить у друзей, знакомых?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Бывают ли у вас сильные сердцебиения?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Нравится ли вам работа, требующая сосредоточения?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Бывают ли у вас приступы дрожи?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Всегда ли вы говорите только правду?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Бывает ли вам неприятно находиться в компании, где все подшучивают друг над другом?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Раздражительны ли вы?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Нравится ли вам работа, требующая быстрого действия?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Верно ли, что вам часто не дают покоя мысли о разных неприятностях и «ужасах», которые могли бы произойти, хотя все кончилось благополучно?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Верно ли, что вы неторопливы в движениях и несколько медлительны?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Опаздывали ли вы когда-нибудь на работу или на встречу с кем-либо?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Вам часто снятся кошмары?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Верно ли, что вы так любите поговорить, что не упускаете любого удобного случая побеседовать с новым человеком?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Беспокоят ли вас какие-нибудь боли?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Огорчились бы вы, если бы долго не могли видеться со своими друзьями?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Можете ли вы назвать себя нервным человеком?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Есть ли среди ваших знакомых такие, которые вам явно не нравятся?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Могли бы вы сказать, что вы уверенный в себе человек?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Легко ли вас задевает критика ваших недостатков или вашей работы?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Трудно ли вам получить настоящее удовольствие от мероприятий, в которых участвует много народа?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Беспокоит ли вас чувство, что вы чем-то хуже других?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: ' Сумели бы вы внести оживление в скучную компанию?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Бывает ли, что вы говорите о вещах, в которых совсем не разбираетесь?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Беспокоитесь ли вы о своём здоровье?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Любите ли вы подшутить над другими?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    }, {
        question: 'Страдаете ли вы бессонницей?',
        options: [{
            name: 'Да',
            points: 1
        }, {
            name: 'Нет',
            points: 0
        }]
    },

];

let answers = [];
let indexOfPage = 0;
// let finalTitle = 'Тип баланса не определён';
let comment = 'Тип не определён';

const numberOfQuestion = $('.quiz__number-of-question'),
    numberOfAllQuestions = $('.quiz__number-of-all-questions');

const question = $('.quiz__name'),
    options = $('.quiz__content');

const btnNext = $('#quiz-next');

const finalHeader = $('.quiz__over-modal h2'),
    btnTryAgain = $('#quiz-try-again'),
    quizOverModal = $('.quiz__over-modal'),
    quizFinal = $('.quiz__final'),
    quizCommentsFinal = $('.quiz__comments ');

numberOfAllQuestions.html(questions.length);

options.on('click', '.quiz__item', function() {
    $(this).addClass('quiz__item--choose').siblings().removeClass('quiz__item--choose');
    btnNext.prop("disabled", false);
});

function render(indexOfQuestion) {

    if (indexOfPage >= 1) {
        $('.quiz__caption').slideUp();
        $('.quiz__top p').slideUp();
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
        let $image = $('<div class="quiz__image quiz__image--skin"></div>');
        let optionScore = questions[indexOfQuestion].options[i].points;

        $('<div class="quiz__item"></div>')
            .append($image)
            .append($name)
            .attr('data-score', optionScore)
            .appendTo(options);
    }

    numberOfQuestion.html(indexOfQuestion + 1);
}

function validate() {
    let disableNext = options.children().hasClass('quiz__item--choose');

    if (!disableNext) {
        alert('Выберите вариант ответа!');
    } else {
        options.children().each(function(index, element) {
            if ($(element).hasClass('quiz__item--choose')) {
                //тут надо проверить индекс выбранного элемента и добавить его в массив ответов
                answers.push(parseInt($(element).data('score')));
            }
        });

        //стираем варианты от предыдущего вопроса
        options.html('');
        indexOfPage++;
        render(indexOfPage);
        btnNext.prop('disabled', true);

        if ($(window).width() < 500) {
            $('body,html').animate({ scrollTop: 0 }, 800);
        }
    }
}


function quizOver() {
    $('.quiz-container').hide();

    // comment = '';

    let lieAnswers = 0;
    let extraverAnswers = 0;
    let neuroAnswers = 0;

    answers.forEach(function(item, i) {
        // проверка на ложь - да
        if (i == 5 || i == 23 || i == 35) {
            if (item == 1) {
                lieAnswers++;
            }
        }
        // проверка на ложь - нет
        else if (i == 11 || i == 17 || i == 29 || i == 41 || i == 47 || i == 53) {
            if (item == 0) {
                lieAnswers++;
            }
        }
        // проверка на экстраверта - да
        else if (i == 0 || i == 2 || i == 7 || i == 9 || i == 12 || i == 16 || i == 21 || i == 24 || i == 26 || i == 38 || i == 43 || i == 45 || i == 48 || i == 52) {
            if (item == 1) {
                extraverAnswers++;
            }
        }
        // проверка на экстраверта - нет
        else if (i == 4 || i == 14 || i == 19 || i == 28 || i == 31 || i == 33 || i == 36 || i == 40 || i == 50) {
            if (item == 0) {
                extraverAnswers++;
            }
        }
        // проверка на нейротизм - да
        else if (i == 1 || i == 3 || i == 6 || i == 8 || i == 10 || i == 13 || i == 15 || i == 18 || i == 20 || i == 22 || i == 25 || i == 27 || i == 30 || i == 32 || i == 34 || i == 37 || i == 39 || i == 42 || i == 44 || i == 46 || i == 49 || i == 51 || i == 54 || i == 56) {
            if (item == 1) {
                neuroAnswers++;
            }
        }
    });

    if (lieAnswers > 4) {
        comment = 'Неискренность в ответах, свидетельствующая также о некоторой демонстративности поведения и ориентированности испытуемого на социальное одобрение.'
    } else {

        if (extraverAnswers >= 12 && neuroAnswers < 12) {
            comment = 'Вы сангвиник. Сангвиник быстро адаптируется к новым условиям. Благодаря общительности, легко находит контакт с людьми. Подвержен эмоциональным переживаниям. Чувства легко «загораются», но обычно неглубокие. Характерна подвижная, выразительная мимика. Сангвиник немного непоседлив и нуждается в новых эмоциях, впечатлениях. Ему сложно регулировать собственные импульсы, а поэтому часто не придерживается выбранного ритма жизни, нарушает режим работы. Ему сложно выполнять дело, которое требуется усидчивости, концентрации и терпения. Если отсутствуют серьезные цели и замыслы, наблюдается непостоянство и поверхностный подход к решению поставленных задач. Легко реализует себя в творчестве.';
        } else if (extraverAnswers >= 12 && neuroAnswers >= 12) {
            comment = 'Вы холерик. Холерик отличается повышенной возбудимостью. Часто он действует прерывисто, эмоционально. Главные черты темперамента – импульсивность, резкость, стремительность. Холерику свойственны выраженные эмоциональные переживания. Если увлекся делом, то работает изо всех сил, часто не контролирует процесс, истощается. В общественных интересах проявляет принципиальность и инициативность, энергично подходит к решению поставленных задач. При отсутствии духовной жизни у холерика проявляется несдержанность и вспыльчивость. Он нередко демонстрирует неспособность контролировать эмоциональные переживания, проявляет раздражительность к окружающим людям.';
        } else if (extraverAnswers < 12 && neuroAnswers >= 12) {
            comment = 'Вы меланхолик. Меланхолик имеет глубину и устойчивость чувств даже при слабом их выражении. Реакция на раздражитель обычно не соответствует его силе. Меланхолику сложно на чем-то сосредоточиться. При сильном внешнем воздействии у него часто опускаются руки, запускается тормозная реакция. Ему свойственны робость, застенчивость, нерешительность. В мимике и речи наблюдается сдержанность и заторможенность. В нормальных условиях может быть хорошим тружеником и хорошо справляться с жизненными условиями. При неблагоприятных условиях меланхолик превращается в очень ранимого, замкнутого и боязливого человека. Он сильно страдает от эмоциональных переживаний, значительно больше, чем этого заслуживает.';
        } else if (extraverAnswers < 12 && neuroAnswers < 12) {
            comment = 'Вы флегматик. Флегматик характеризуется относительно низким уровнем активности поведения. У него медленно формируются новые формы поведения, хотя и становятся устойчивыми. Важная черта – медлительность, которая присутствует в действиях, мимике и речи. Флегматик отличается ровностью и постоянством, он испытывает глубокие и постоянные чувства. Настойчивый и упорный труженик всегда доводи дело до конца, поскольку умеет распределять свои силы. Стабилен в отношениях, в меру общительный, но не любит попусту болтать. Предпочитает экономить силы, а не растрачивать их на глупости. В зависимости от ситуации флегматик характеризуется с положительной стороны постоянством, стабильностью, глубиной мыслей, но с другой стороны он отличается вялостью, безучастием к окружающему миру и ленью. Он склонен выполнять только одни и те же действия, для него характерны слабые и бедные эмоции.';
        }
    }
    // let stat = `Ложь: ${lieAnswers}/9 Экстраверсия: ${extraverAnswers}/23 Нейротизм: ${neuroAnswers}/24`;

    // quizFinal.html(answers.join(','));
    // quizFinal.append(stat);
    quizCommentsFinal.html(comment);
    quizOverModal.show();
}

function tryAgain() {
    window.location.reload();
}

btnNext.on('click', validate);
btnTryAgain.on('click', tryAgain);

$(function() {
    render(indexOfPage);
});