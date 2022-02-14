(function($) {

    $.fn.visible = function(partial) {

        var $t = $(this),
            $w = $(window),
            viewTop = $w.scrollTop(),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

    };

})(jQuery);

(function($) {

    $(function() {

        $(".title-animation-idle").each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("activate-animation");
            }
        });
        $(".text-animation-idle").each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("activate-animation");
            }
        });
        
        $(window).scroll(function(event) {
            $(".title-animation-idle").each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                    el.addClass("activate-animation");
                }
            });
        
            $(".text-animation-idle").each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                    el.addClass("activate-animation");
                }
            });
        });
        var menuToggle = 'button.header__menu-toggle';
        var navToMenu = 'div.header__menu';
        
        if ( $(navToMenu).length ) {
          $(menuToggle).click(function() {
            $('html').addClass('menu-active');
          });
        
          $('body').append('<div class="menu-overlay"></div><div class="menu"><div class="menu__inner">' + $(navToMenu).html() + '</div></div>');
        
          var menu = $('div.menu__inner')
            .before('<div class="menu__close"></div>')
            .prepend('<div class="menu__topbar"><div class="menu__back"></div><div class="menu__title"></div></div>')
          ;
          $('div.menu-overlay, div.menu__close').click(function() {
            $('html').removeClass('menu-active');
          });
        
          var topbar = $('div.menu__topbar', menu);
          var back = $('div.menu__back', menu);
          var title = $('div.menu__title', menu);
        
          menu
            .find('li').removeAttr('class id').end()
            .find('ul')
              .removeAttr('class id')
              .addClass('menu__item')
              .first().addClass('menu__topmenu active').attr('id', 'm-0')
            .find('a:not(:last-child)').each(function(i) {
              i++;
              var link = $(this);
              var submenu = link.next('ul').removeClass('sub-menu').addClass('menu__submenu').attr('id', 'm-' + i);
              var parent = submenu.closest('li').closest('ul').attr('id');
              submenu.data('parent', parent);
              link.after('<div class="menu__show-submenu" data-id="m-' + i + '"></div>');
            })
          ;
          menu.find('ul').appendTo(menu);
          menu.find('ul.menu__item:not(.menu__topmenu):not(.menu__submenu)').each(function() {
            menu.find('ul.menu__topmenu').append( $(this).html() );
            $(this).remove();
          });
          menu.find('nav').remove();
          menu
            .on('click', 'div.menu__show-submenu', function() {
              topbar.addClass('active');
              var arrow = $(this);
              arrow.closest('ul').removeClass('active').addClass('hidden');
              var id = arrow.data('id');
              $('#' + id).addClass('active');
              var parent = $('#' + id).data('parent');
              back.data('show', parent).data('hide', id);
              title.text( arrow.siblings('a').text() );
            })
            .on('click', 'div.menu__back', function() {
              var back = $(this);
              var show = back.data('show');
              var hide = back.data('hide');
              if ( show === 'm-0' ) {
                menu.find('ul.menu__topmenu').addClass('active');
                topbar.removeClass('active');
              }
              back.data( 'show', $('#' + show).data('parent') ).data('hide', show);
              title.text( menu.find('[data-id="' + show + '"]').siblings('a').text() );
              $('#' + show).addClass('active').removeClass('hidden');
              $('#' + hide).removeClass('active');
            })
          ;
        }
        const tooltipElements = $('.menu__topmenu .menu__show-submenu');
        let isStorageSupport = true;
        let show = null;
        
        // Check localStorage support
        try {
            show = localStorage.getItem('show');
        } catch (err) {
            isStorageSupport = false;
        }
        
        if (isStorageSupport) {
            if (show === null) {
                tooltipElements.addClass('menu-pulse');
            }
        }
        
        tooltipElements.on('click', function () {
            tooltipElements.removeClass('menu-pulse');
        
            if (isStorageSupport) {
                localStorage.setItem('show', 'no');
            }
        });
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
        $('.click').on('click', function(e){
          e.preventDefault();
          $('.click').not(this).next().hide();
          // $(this).next().toggleClass('active');
          $(this).next().slideToggle();
        });
        if ($('body').hasClass('home')) {
            var swiper = new Swiper('.swiper-container', {
                direction: 'horizontal',
                slidesPerView: 1,
                loop: false,
                // centeredSlides: true,
                preloadImages: false,
                lazy: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                // mousewheel: true,
                breakpoints: {
                    992: {
                        slidesPerView: 5,
                        spaceBetween: 20,
                        // centeredSlides: true
                    },
                    600: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                        // centeredSlides: true
                    },
        
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    // dynamicBullets: true,
                    // type: 'fraction'
                },
            });
        }
        if ($('body').hasClass('single')) {
            let fullHeight, innerHeight;
            const progressBar = document.querySelector('.progressbar>.progressbar-line');
        
            window.addEventListener('scroll', fillProgressLine);
            window.addEventListener('resize', fillProgressLine);
        
            function fillProgressLine() {
                fullHeight = document.body.scrollHeight;
                innerHeight = window.innerHeight;
                progressBar.style.width = (pageYOffset * 100 / (fullHeight - innerHeight)) + '%';
            }
        
            fillProgressLine();
        }
        const themeSelectors = document.querySelectorAll('.themetoggle');
        
        themeSelectors.forEach(elem => {
            elem.addEventListener('click', (event) => {
                event.preventDefault();
                if (localStorage.getItem('theme') === 'dark') {
                    localStorage.removeItem('theme');
                } else {
                    localStorage.setItem('theme', 'dark')
                }
                addDarkClassToHTML()
            });
        })
        
        
        function addDarkClassToHTML() {
            try {
                if (localStorage.getItem('theme') === 'dark') {
                    document.querySelector('html').classList.add('dark');
                    // document.querySelector('.themetoggle span').textContent = 'dm';
                } else {
                    document.querySelector('html').classList.remove('dark');
                    // document.querySelector('.themetoggle span').textContent = 'lm';
                }
            } catch (err) {}
        }
        
        addDarkClassToHTML();
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

    });

})(jQuery);