var themeSwitcher = $('.share__switch input');

function addDarkClassToHTML() {
    try {
        if (localStorage.getItem('theme') === 'dark') {
            document.querySelector('html').classList.add('dark');
            themeSwitcher.prop('checked', true);
        } else {
            document.querySelector('html').classList.remove('dark');
            themeSwitcher.prop('checked', false);
        }
    } catch (err) {}
}

themeSwitcher.on('click', function(){
    if ($(this).is(':checked')){
        localStorage.setItem('theme', 'dark');
        themeSwitcher.prop('checked', true);
        document.querySelector('html').classList.add('dark');
    } else {
        localStorage.removeItem('theme');
        themeSwitcher.prop('checked', false);
        document.querySelector('html').classList.remove('dark');
    }
})

addDarkClassToHTML();

// const themeSelectors = document.querySelectorAll('.themetoggle');

// themeSelectors.forEach(elem => {
//     elem.addEventListener('click', (event) => {
//         event.preventDefault();
//         if (localStorage.getItem('theme') === 'dark') {
//             localStorage.removeItem('theme');
//         } else {
//             localStorage.setItem('theme', 'dark')
//         }
//         addDarkClassToHTML()
//     });
// })
