(function () {
    const menuToggle = document.querySelector('.site-header__menu-toggle');
    const navigation = document.querySelector('.site-header__navigation');

    if (!menuToggle || !navigation) {
        return;
    }

    menuToggle.addEventListener('click', function () {
        const isOpen = navigation.classList.toggle('is-open');

        menuToggle.setAttribute('aria-expanded', String(isOpen));
        menuToggle.querySelector('.sr-only').textContent = isOpen
            ? 'Fechar menu'
            : 'Abrir menu';
    });

    navigation.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            navigation.classList.remove('is-open');
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.querySelector('.sr-only').textContent = 'Abrir menu';
        });
    });
})();
