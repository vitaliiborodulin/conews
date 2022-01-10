//body arrow up - see btn.less for customizing
// $('<div>').addClass('arrowUpBtn').attr('title', 'Вернуться к началу').appendTo('body');

// var arrowUpBtn = $('.arrowUpBtn');

// function scrollBtn() {
// 	var top = $(this).scrollTop();

// 	if (top > 300) {
// 		arrowUpBtn.fadeIn(500);
// 	} else {
// 		arrowUpBtn.fadeOut(500);
// 	}
// }

// scrollBtn();

// $(window).on('scroll', scrollBtn);

// arrowUpBtn.on('click', function () {
// 	$('html, body').animate({
// 		scrollTop: 0
// 	}, 500);
// })

$('.scroll-action_down').click(function(e) {
    e.preventDefault();
    $('body,html').animate({
        scrollTop: $(document).height() - $(window).height()
    }, 1000)
});

$('.scroll-action_up').click(function(e) {
    e.preventDefault();
    $('body,html').animate({
        scrollTop: 0
    }, 1000)
});

function button_scroll() {
    let scrollPercent = $(window).scrollTop() / ($(document).height() - $(window).height()),
        scrollPercentRounded = Math.round(scrollPercent * 100);
    $('.scroll-action_perc').html(scrollPercentRounded + '%')
}

button_scroll();

$(window).scroll(function() {
    button_scroll()
});