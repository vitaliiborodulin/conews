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


