(function ( $ ) {
    document.addEventListener( 'DOMContentLoaded', function () {
        let scrollWidth;

        function getScrollbarWidth() {
            // Создаем временный элемент для измерения ширины
            const div = document.createElement('div');
            div.style.overflowY = 'scroll';
            div.style.width = '50px';
            div.style.height = '50px';

            document.body.appendChild(div);
            scrollWidth = div.offsetWidth - div.clientWidth;
            document.body.removeChild(div);
        }

        getScrollbarWidth(); window.scrollWidth = scrollWidth;
    } );

    window.addEventListener('load', function () {

        const DELAY = 2000;
        const videos = document.querySelectorAll('.lazy-video');
        const loader = document.querySelector('.loader');


        videos.forEach(v => v.pause());

        setTimeout(() => {
            videos.forEach(v => {
                const playPromise = v.play();

                if (playPromise !== undefined) {
                    playPromise.catch(() => {/* ignored */});
                }
            });

            if (loader) loader.classList.add('loader--hide');
        }, DELAY);



        document.querySelector('.js-preloader').classList.add('hide');

        setTimeout(function () {
            document.documentElement.classList.remove('no-scroll');
        }, 200);

        //ЛОГИКА РАБОТЫ ПРИ УСПЕШНОЙ ОПЛАТЕ И ВОЗВРАТЕ
        let currentUrl = window.location.href;

        if (currentUrl.includes('#successful-payment')) {
            let currentUrl = window.location.href;

            let cleanUrl = currentUrl.split('#')[0];

            window.history.replaceState({}, document.title, cleanUrl);

            Fancybox.show([{ src: '#popup-buying', type: "inline" }]);
        }

        //МАСКИ ДЛЯ ФОРМЫ
        $( "input.input.phone" ).mask( "+7 (999) 999-9999", {
            autoclear: false
        } );
        $( "input.input.birthday" ).mask( "99.99.9999" );

        //ГЛОБАЛЬНАЯ ФУНКЦИЯ ОЧИСТКИ ФОРМЫ
        function clearForm() {
            let wpcf7 = document.querySelectorAll( '.wpcf7' );

            for ( let form of wpcf7 ) {
                let acceptanceCheckbox = form.querySelector("input[name='terms-of-use']"),
                    acceptanceButton = form.querySelector('.wpcf7-submit'),
                    inputs = form.querySelectorAll('.input'),
                    file = form.querySelector('.remove-file .dnd-icon-remove');

                if (acceptanceCheckbox.checked) {
                    acceptanceCheckbox.click();
                    acceptanceButton.disabled = true;
                }

                if (acceptanceCheckbox.closest('.wpcf7-not-valid-terms')) {
                    acceptanceCheckbox.closest('.wpcf7-not-valid-terms').classList.remove('wpcf7-not-valid-terms');

                    acceptanceCheckbox.closest(".wpcf7-form-control-wrap").querySelector('.error-message-terms').innerHTML = '';
                }

                inputs.forEach(input => {
                   input.value = '';

                    setTimeout(function() {
                        input.classList.remove('wpcf7-not-valid');
                    }, 1);
                });

                if (file) {
                    file.click();
                }
            }
        }; window.clearForm = clearForm;

        //ОТВЕТНЫЕ ПОПАПЫ ФОРМЫ
        let wpcf7 = document.querySelectorAll( '.wpcf7' );
        for ( let form of wpcf7 ) {
            //УСПЕШНАЯ ОТПРАВКА ФОРМЫ
            form.addEventListener('wpcf7mailsent', function () {
                let popupRequest = document.querySelectorAll('.popup-request'),
                    backgroundPopupRequest = document.querySelectorAll('.background-popup-request');

                backgroundPopupRequest.forEach(item => {
                    item.classList.remove('active');
                });
                popupRequest.forEach(item => {
                    item.classList.remove('active');
                });
                setTimeout(() => {
                    document.documentElement.classList.remove('no-scroll');
                    document.documentElement.style.removeProperty('margin-right');
                }, 50);


                setTimeout(() => {
                    Fancybox.close();

                    Fancybox.show([{src: '#popup-success', type: "inline"}]);
                }, 100);
            });

            //НЕУСПЕШНАЯ ОТПРАВКА ФОРМЫ
            form.addEventListener('wpcf7mailfailed', function () {
                let popupRequest = document.querySelectorAll('.popup-request'),
                    backgroundPopupRequest = document.querySelectorAll('.background-popup-request');

                backgroundPopupRequest.forEach(item => {
                    item.classList.remove('active');
                });
                popupRequest.forEach(item => {
                    item.classList.remove('active');
                });
                setTimeout(() => {
                    document.documentElement.classList.remove('no-scroll');
                    document.documentElement.style.removeProperty('margin-right');
                }, 50);


                setTimeout(() => {
                    Fancybox.close();

                    Fancybox.show([{src: '#popup-success', type: "inline"}]);
                }, 100);
            });

            let button = form.querySelector('.wpcf7-submit'),
                inputs = form.querySelectorAll('input'),
                acceptance = form.querySelector(".wpcf7-form-control-wrap[data-name='terms-of-use'] .wpcf7-list-item"),
                acceptanceLabel = acceptance.querySelector('label'),
                acceptanceCheckbox = acceptance.querySelector("input[name='terms-of-use']");

            button.disabled = false;

            form.addEventListener('click', function (e) {
                setTimeout(function() {
                    button.disabled = false;
                }, 50);
            });

            inputs.forEach(input => {
                input.addEventListener('input', function (e) {
                    setTimeout(function() {
                        button.disabled = false;
                    }, 50);
                });
            });

            form.addEventListener('submit', function (e) {
                if (!acceptanceCheckbox.checked) {
                    e.preventDefault();

                    acceptanceLabel.classList.add('wpcf7-not-valid-terms');

                    if (!acceptance.querySelector('.error-message-terms')) {
                        let errorMessage = document.createElement('p');

                        errorMessage.textContent = 'Пожалуйста, заполните все обязательные поля';
                        errorMessage.classList.add('error-message-terms');

                        acceptance.appendChild(errorMessage);
                    }

                    button.disabled = false;
                } else {
                    acceptanceLabel.classList.remove('wpcf7-not-valid-terms');

                    if (acceptance.querySelector('.error-message-terms')) {
                        acceptance.removeChild(acceptance.querySelector('.error-message-terms'));
                    }

                    button.disabled = false;
                }
            });

            acceptanceCheckbox.addEventListener('click', function (e) {
                if (!acceptanceCheckbox.checked) {
                    acceptanceLabel.classList.add('wpcf7-not-valid-terms');

                    if (!acceptance.querySelector('.error-message-terms')) {
                        let errorMessage = document.createElement('p');

                        errorMessage.textContent = 'Перед отправкой формы, необходимо согласиться с условиями Политики конфиденциальности';
                        errorMessage.classList.add('error-message-terms');

                        acceptance.appendChild(errorMessage);
                    }

                    button.disabled = false;
                } else {
                    acceptanceLabel.classList.remove('wpcf7-not-valid-terms');

                    if (acceptance.querySelector('.error-message-terms')) {
                        acceptance.removeChild(acceptance.querySelector('.error-message-terms'));
                    }

                    button.disabled = false;
                }
            });

            //РАБОТА С YOOKASSA
            if (form.id === 'wpcf7-f252-o2') {
                form.querySelector('input[type=submit]').addEventListener('click', function (event) {
                    let name = form.querySelector('.input.name').value,
                        surname = form.querySelector('.input.surname').value,
                        mail = form.querySelector('.input.email').value,
                        phone = form.querySelector('.input.phone').value,
                        ticket = form.querySelector('.selected__items .items__item.active .left__name');

                    if (name.trim() !== '' && surname.trim() !== '' && mail.trim() !== '' && phone.trim() !== '' && ticket.closest('.items__item').classList.contains('active') && acceptanceCheckbox.checked) {
                        event.preventDefault();

                        const formData = new FormData();

                        formData.append( 'action', "yookassa_api" );
                        formData.append( 'name', name );
                        formData.append( 'surname', surname );
                        formData.append( 'mail', mail );
                        formData.append( 'phone', phone );
                        formData.append( 'ticket', ticket.textContent );

                        fetch('/wp-admin/admin-ajax.php', {
                            method:'POST',
                            body:formData,
                        }).then((response) => {
                            if ( !response.ok ) {
                                alert( 'Ошибка запроса!' );
                            }

                            return response;
                        }).then(async (result) => {
                            let element = await result.text();

                            window.location.href = element;
                        });
                    }
                });
            }

            //РАБОТЫ С 1С
            if (form.id === 'wpcf7-f236-o1') {
                form.querySelector('input[type=submit]').addEventListener('click', function (event) {
                    let name = form.querySelector('.input.name').value,
                        surname = form.querySelector('.input.surname').value,
                        mail = form.querySelector('.input.email').value,
                        phone = form.querySelector('.input.phone').value;

                    if (name.trim() !== '' && surname.trim() !== '' && mail.trim() !== '' && phone.trim() !== '' && acceptanceCheckbox.checked) {
                        event.preventDefault();

                        const formData = new FormData();

                        formData.append( 'action', "requestFitness" );
                        formData.append( 'name', name );
                        formData.append( 'surname', surname );
                        formData.append( 'mail', mail );
                        formData.append( 'phone', phone );

                        fetch('/wp-admin/admin-ajax.php', {
                            method:'POST',
                            body:formData,
                        }).then((response) => {
                            if ( !response.ok ) {
                                alert( 'Ошибка запроса!' );
                            }

                            return response.json();
                        }).then((result) => {
                            console.log(result);

                            if (result.success) {
                                console.log('Запрос успешно отправлен!');

                                Fancybox.close();

                                Fancybox.show([{src: '#popup-success', type: "inline"}]);
                            } else {
                                console.log('Ошибка: ' + result.data.message);
                            }
                        }).catch((error) => {
                            console.error('Ошибка:', error);
                        });
                    }
                });
            }
        };
    });
})( jQuery );

// lazy-load.js
document.addEventListener('DOMContentLoaded', () => {
    const lazyMedia = document.querySelectorAll('.lazy-video, .lazy-gif');

    // Настройки: начинаем загрузку за 200 px до появления
    const options = { rootMargin: '200px 0px', threshold: 0 };

    // Функция, фактически подставляющая src
    const loadMedia = el => {
        const src = el.dataset.src;
        if (!src) return;

        if (el.tagName.toLowerCase() === 'video') {
            el.src = src;        // подставляем источник
            el.load();           // инициируем загрузку
        } else {                 // <img>
            el.src = src;
        }
        el.removeAttribute('data-src');
    };

    // IntersectionObserver
    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                loadMedia(entry.target);
                obs.unobserve(entry.target); // больше не следим
            }
        });
    }, options);

    // Если браузер не поддерживает IO, загружаем всё сразу
    if (!('IntersectionObserver' in window)) {
        lazyMedia.forEach(loadMedia);
    } else {
        lazyMedia.forEach(el => observer.observe(el));
    }
});