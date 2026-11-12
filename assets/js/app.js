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

    const reservationForm = document.querySelector('#reservation-form');

    if (reservationForm) {
        const phoneField = reservationForm.querySelector('#reservation-phone');

        function formatPhoneNumber(value) {
            let digits = value.replace(/\D/g, '');

            if ((digits.length === 12 || digits.length === 13) && digits.startsWith('55')) {
                digits = digits.slice(2);
            }

            digits = digits.slice(0, 11);

            if (digits.length === 0) {
                return '';
            }

            let formatted = '(' + digits.slice(0, 2);

            if (digits.length >= 3) {
                formatted += ') ' + digits[2];
            }
            if (digits.length > 3) {
                formatted += ' ' + digits.slice(3, 7);
            }
            if (digits.length > 7) {
                formatted += '-' + digits.slice(7, 11);
            }

            return formatted;
        }

        phoneField.addEventListener('input', function () {
            const selectionStart = phoneField.selectionStart ?? phoneField.value.length;
            const digitsBeforeCaret = phoneField.value.slice(0, selectionStart).replace(/\D/g, '').length;
            const formattedValue = formatPhoneNumber(phoneField.value);

            phoneField.value = formattedValue;

            let caretPosition = 0;
            let digitsAtCaret = 0;

            while (caretPosition < formattedValue.length && digitsAtCaret < digitsBeforeCaret) {
                if (/\d/.test(formattedValue[caretPosition])) {
                    digitsAtCaret += 1;
                }
                caretPosition += 1;
            }

            phoneField.setSelectionRange(caretPosition, caretPosition);

            const digitCount = formattedValue.replace(/\D/g, '').length;
            phoneField.setCustomValidity(
                digitCount === 0 || digitCount === 11
                    ? ''
                    : 'Informe um celular com DDD e 11 dígitos.'
            );
        });

        reservationForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(reservationForm);
            const message = [
                'Olá! Gostaria de solicitar uma pré-reserva na Aura.',
                '',
                'Nome: ' + formData.get('reservation-name').trim(),
                'WhatsApp: ' + formData.get('reservation-phone').trim(),
                'Tratamento de interesse: ' + formData.get('reservation-treatment'),
                'Período de preferência: ' + formData.get('reservation-period'),
            ].join('\n');
            const whatsappUrl = 'https://wa.me/5547991966719?text=' + encodeURIComponent(message);

            window.open(whatsappUrl, '_blank', 'noopener,noreferrer');
        });
    }
})();
