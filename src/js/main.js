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

        //= components/animate.js
        //= components/menu.js
        //= components/tooltip.js
        //= components/ajaxPost.js
        //= components/share.js
        //= components/slider.js
        //= components/upBtn.js

    });

})(jQuery);