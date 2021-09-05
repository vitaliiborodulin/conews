const height = $('#height'),
    heightRange = $('#height-range'),
    weight = $('#weight'),
    weightRange = $('#weight-range'),
    calcBtn = $('#quiz-next');

const totalScore = $('#total'),
    quizOverModal = $('.quiz__over-modal'),
    imtMin = $('#imt-min'),
    imtMax = $('#imt-max'),
    quizCommentsFinal = $('.quiz__final'),
    btnTryAgain = $('#quiz-try-again');

let score, minImt, maxImt = 0;
let comment = '';

function calcCurrentImt(height, weight) {
    return ((parseInt(weight) * 10000) / (parseInt(height) * parseInt(height))).toFixed(1);
}

function calcImtMin(height) {
    return ((parseInt(height) * parseInt(height) * 18.5) / 10000).toFixed(1);
}

function calcImtMax(height) {
    return (parseInt(height) * parseInt(height) * 25 / 10000).toFixed(1);
}

function quizOver() {
    $('.quiz-container').hide();
    score = calcCurrentImt(height.val(), weight.val());

    if (score >= 0 && score < 16) {
        comment = 'выраженный дефицит массы тела';
    } else if (score >= 16 && score < 18.5) {
        comment = 'недостаточная масса тела';
    } else if (score >= 18.5 && score < 25) {
        comment = 'норма';
    } else if (score >= 25 && score < 30) {
        comment = 'избыточная масса тела';
    } else if (score >= 30 && score < 35) {
        comment = 'ожирение первой степени';
    } else if (score >= 35 && score < 40) {
        comment = 'ожирение второй степени';
    } else if (score >= 40) {
        comment = 'ожирение третьей степени';
    } else {
        comment = 'некорректные данные, попробуйте еще раз';
    }

    quizCommentsFinal.html('Ваш результат: ' + comment);
    totalScore.html(score);
    imtMin.html(calcImtMin(height.val()));
    imtMax.html(calcImtMax(height.val()));
    quizOverModal.show();
}

function tryAgain() {
    $('body,html').animate({ scrollTop: 0 }, 800);
    setTimeout(window.location.reload(), 1000);
}

function validate() {
    if (parseInt(height.val()) > 100 && parseInt(height.val()) < 300 && parseInt(weight.val()) > 30 && parseInt(weight.val()) < 300) {
        calcBtn.prop("disabled", false);
    } else {
        calcBtn.prop("disabled", true);
    }
}

height.on('input', function () {
    heightRange.val(height.val());
    validate();
});

weight.on('input', function () {
    weightRange.val(weight.val());
    validate();
});

heightRange.on('input', function () {
    height.val(heightRange.val());
    validate();
});

weightRange.on('input', function () {
    weight.val(weightRange.val());
    validate();
});

calcBtn.on('click', quizOver);
btnTryAgain.on('click', tryAgain);