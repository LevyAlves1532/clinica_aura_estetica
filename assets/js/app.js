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

    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(function (item) {
        const trigger = item.querySelector('.faq-item__trigger');
        const answer = item.querySelector('.faq-item__answer');

        trigger.addEventListener('click', function () {
            const isOpen = item.classList.contains('is-open');

            faqItems.forEach(function (otherItem) {
                otherItem.classList.remove('is-open');
                otherItem.querySelector('.faq-item__trigger').setAttribute('aria-expanded', 'false');
                otherItem.querySelector('.faq-item__answer').hidden = true;
            });

            if (!isOpen) {
                item.classList.add('is-open');
                trigger.setAttribute('aria-expanded', 'true');
                answer.hidden = false;
            }
        });
    });
})();
