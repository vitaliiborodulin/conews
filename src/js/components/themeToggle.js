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