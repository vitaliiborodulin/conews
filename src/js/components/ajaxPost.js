// ajax posts
if ($('div.more').length) {
  $('body').on('click', '.btn-more:not(.loading)', function () {
    var more = $(this);
    var container = $(this).closest('div.more').prev('div');
    var defaultText = more.html();
    var offset = more.data('offset');
    var items = more.data('items');
    var max = more.data('max');
    var theme = more.data('theme');
    var query = 'offset=' + offset + '&items=' + items;
    if (more.data('cat')) query = query + '&cat=' + more.data('cat');
    if (more.data('search')) query = query + '&s=' + more.data('search');
    if (more.data('template')) query = query + '&template=' + more.data('template');//передаем шаблон чтоб вёрстку не переделывать
    more.addClass('loading').text(more.data('loading'));
    $.ajax({
      url: '/wp-content/themes/' + theme + '/ajax-posts.php?' + query
    }).done(function (html) {
      container.append(html);
      more.data('offset', offset + items).removeClass('loading').html(defaultText);
      // $('html, body').animate({scrollTop: $('div.news__content .js-item-scroll-to:last()').offset().top - 30 }, 700);
      if (more.data('offset') >= max) more.parent().remove();
    });
  });
}