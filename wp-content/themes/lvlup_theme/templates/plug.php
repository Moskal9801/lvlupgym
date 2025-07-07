<?php /* Template name: Заглушка */

wp_head(); ?>

<h1 class="for-title">Заглушка</h1>

<section class="plug-page__content">
    <div class="container">
        <div class="content__body">
            <div class="body__contacts">
                <div class="contacts__main-info">
                    <p>Отдел продаж: <a href="tel:<?php echo clearPhone(get_field( 'sales-department', 'option' ))?>"><?php the_field( 'sales-department', 'option' ); ?></a></p>
                    <p>Whatsapp: <a href="https://wa.me/<?php echo clearPhone(get_field( 'whatsapp', 'option' ))?>" target="_blank"><?php the_field( 'whatsapp', 'option' ); ?></a></p>
                    <p>Почта: <a href="mailto: <?php the_field( 'mail', 'option' ); ?>"><?php the_field( 'mail', 'option' ); ?></a></p>
                    <p>Стань частью команды: <a href="tel:<?php echo clearPhone(get_field( 'hr', 'option' ))?>"><?php the_field( 'hr', 'option' ); ?></a></p>
                </div>
                <div class="contacts__more-info">
                    <p>Режим работы отдела продаж: <?php the_field( 'working-sales-department', 'option' ); ?></p>
                    <p>Режим работы фитнес клуба: <?php the_field( 'working-club', 'option' ); ?></p>
                    <p>Адрес: <?php the_field( 'address', 'option' ); ?></p>
                </div>
            </div>
            <div class="body__info">
                <a class="info__logo" href="/">
                    <?php get_template_part( 'parts/default-icons/logo', 'footer' ); ?>
                </a>
                <div class="info__message">
                    <p class="message__title">ВЕДУТСЯ ТЕХНИЧЕСКИЕ РАБОТЫ</p>
                    <p class="message__description">Скоро здесь появится новый сайт</p>
                </div>
                <div class="info__club-cards">
                    <!--<a class="club-cards__buy default-button yellow-button club-button-popup" href="#">КУПИТЬ КЛУБНУЮ КАРТУ</a>-->
                    <a class="club-cards__want default-border-button white-border purchase-button-popup" href="#">ХОЧУ КЛУБНУЮ КАРТУ</a>
                </div>
                <a class="info__presentation" href="<?php the_field( 'presentation', 'option' ); ?>" target="_blank">
                    <p>СКАЧАТЬ ПРЕЗЕНТАЦИЮ</p>
                    <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.80453 14.853C11.7 11.9698 13.3233 10.3533 16.2187 7.47009M8.80453 14.853L1.3903 7.47009M8.80453 14.853L8.80453 0.0245839" stroke="#C3C3C3" stroke-width="1.19668"/>
                        <path d="M1 17.9751L16.6089 17.9751" stroke="#C3C3C3" stroke-width="1.19668"/>
                    </svg>
                </a>
                <div class="info__documents">
                    <div class="documents__items">
                        <a href="<?php the_field( 'политика_обработки_персональных_данных', 'option' ); ?>" target="_blank">Политика обработки персональных данных</a>
                        <a href="<?php the_field( 'согласие_на_обработку_персональных_данных', 'option' ); ?>" target="_blank">Согласие на обработку персональных данных</a>
                        <a href="<?php the_field( 'согласие_на_обработку_файлов_cookie', 'option' ); ?>" target="_blank">Согласие на обработку файлов cookie</a>
                        <a href="<?php the_field( 'правила_посещения', 'option' ); ?>" target="_blank">Правила посещения</a>
                    </div>
                    <div class="documents__items">
                        <a href="<?php the_field( 'договор_публичной_оферты_об_оказании_физкультурно-оздоровительных_и_иных_услуг', 'option' ); ?>" target="_blank">Договор публичной оферты об оказании физкультурно-оздоровительных и иных услуг</a>
                        <a href="<?php the_field( 'согласие_на_получение_новостной_и_рекламной_рассылки', 'option' ); ?>" target="_blank">Согласие на получение новостной и рекламной рассылки</a>
                    </div>
                    <div class="documents__items">
                        <p>Сайт разработан: <a href="https://01cat.ru" target="_blank">Двоичный кот</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cookie-warning">
    <div class="cookie-background">
        <svg width="51" height="109" viewBox="0 0 51 109" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.00022777 88.3267L0.894531 89.5441L24.4306 71.8341L23.5363 70.6167L0.00022777 88.3267Z" fill="#6A6662"/>
            <path d="M26.4891 71.8412L50.0312 89.5428L50.9251 88.3251L27.383 70.6235L26.4891 71.8412Z" fill="#6A6662"/>
            <path d="M0.0783528 34.0907L0.972656 35.3081L24.5087 17.5981L23.6144 16.3807L0.0783528 34.0907Z" fill="#6A6662"/>
            <path d="M26.5653 17.6052L50.1074 35.3069L51.0013 34.0892L27.4592 16.3875L26.5653 17.6052Z" fill="#6A6662"/>
            <path d="M0.00022777 17.71L0.894531 18.9274L24.4306 1.21737L23.5363 -3.01996e-05L0.00022777 17.71Z" fill="#6A6662"/>
            <path d="M26.4891 1.22442L50.0312 18.9261L50.9251 17.7084L27.383 0.00670226L26.4891 1.22442Z" fill="#6A6662"/>
            <path d="M0.0783528 69.3991L0.972656 70.6165L24.5087 52.9065L23.6144 51.6891L0.0783528 69.3991Z" fill="#6A6662"/>
            <path d="M26.5653 52.9138L50.1074 70.6155L51.0013 69.3978L27.4592 51.6961L26.5653 52.9138Z" fill="#6A6662"/>
            <path d="M0.00022777 53.0181L0.894531 54.2355L24.4306 36.5255L23.5363 35.3081L0.00022777 53.0181Z" fill="#6A6662"/>
            <path d="M26.4891 36.5326L50.0312 54.2343L50.9251 53.0165L27.383 35.3149L26.4891 36.5326Z" fill="#6A6662"/>
            <path d="M0.00022777 107.478L0.894531 108.695L24.4306 90.9849L23.5363 89.7675L0.00022777 107.478Z" fill="#6A6662"/>
            <path d="M26.4891 90.9921L50.0312 108.694L50.9251 107.476L27.383 89.7743L26.4891 90.9921Z" fill="#6A6662"/>
        </svg>
    </div>

    <p class="cookie-title">Мы используем файлы cookies<br>и сервисы веб-аналитики.</p>
    <p class="cookie-description">Продолжая пользоваться сайтом вы выражаете своё <a href="<?php the_field( 'согласие_на_обработку_файлов_cookie', 'option' ); ?>" target="_blank">Согласие на обработку файлов cookie</a> и подтверждаете факт ознакомления с <a href="<?php the_field( 'политика_обработки_персональных_данных', 'option' ); ?>" target="_blank">Политикой конфиденциальности</a>.</p>
    <a class="cookie-button default-button blue-button" href="#">ПРИНИМАЮ</a>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/not-gulp/popup-cookie.css" as="style">

    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            let cookieWarning = document.querySelector( '.cookie-warning' ),
                cookieButton = cookieWarning.querySelector( '.cookie-button' ),
                cookieDuration = 1500;

            if (!getCookie('userAccept')) {
                setTimeout(function () {
                    cookieWarning.classList.add('active');
                }, cookieDuration);
            }

            function getCookie(name) {
                let matches = document.cookie.match(new RegExp(
                    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
                ));
                return matches ? decodeURIComponent(matches[1]) : undefined;
            }

            cookieButton.onclick = function (e) {
                e.preventDefault()

                cookieWarning.classList.remove('active');
                let name = 'userAccept';
                let value = 1;
                let date = new Date(Date.now() + 86400e3 * 365);
                document.cookie = encodeURIComponent(name) + '=' + encodeURIComponent(value) + `; path=/; expires=${date};`;
            };
        });
    </script>
</div>

<div class="background-popup-purchase background-popup-request"></div>

<div class="popup-purchase popup-request">
    <div class="popup-close">
        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="40" cy="40" r="40" fill="#D1D1D1"/>
            <path d="M43.4475 17L44.9375 17.9067L30.9744 39.1223L29.4843 38.2155L43.4475 17Z" fill="#1126B6"/>
            <path d="M30.9075 39.9504L45 61.0846L43.5155 62L29.4231 40.8658L30.9075 39.9504Z" fill="#1126B6"/>
        </svg>
    </div>

    <div class="popup-icon">
        <svg width="51" height="131" viewBox="0 0 51 131" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-0.00367848 75.3267L0.890625 76.5441L24.4267 58.8341L23.5324 57.6167L-0.00367848 75.3267Z" fill="#040404"/>
            <path d="M26.4891 58.8412L50.0312 76.5428L50.9251 75.3251L27.383 57.6235L26.4891 58.8412Z" fill="#040404"/>
            <path d="M-0.00367848 129.786L0.890625 131.004L24.4267 113.294L23.5324 112.076L-0.00367848 129.786Z" fill="#040404"/>
            <path d="M26.4891 113.301L50.0312 131.002L50.9251 129.785L27.383 112.083L26.4891 113.301Z" fill="#040404"/>
            <path d="M0.0744465 21.0909L0.96875 22.3083L24.5048 4.59835L23.6105 3.38095L0.0744465 21.0909Z" fill="#040404"/>
            <path d="M26.5672 4.60521L50.1094 22.3069L51.0033 21.0892L27.4611 3.38749L26.5672 4.60521Z" fill="#040404"/>
            <path d="M-0.00367848 4.71009L0.890625 5.92749L24.4267 -11.7825L23.5324 -12.9999L-0.00367848 4.71009Z" fill="#040404"/>
            <path d="M26.4891 -11.7754L50.0312 5.92627L50.9251 4.70855L27.383 -12.9931L26.4891 -11.7754Z" fill="#040404"/>
            <path d="M0.0744465 56.3991L0.96875 57.6165L24.5048 39.9065L23.6105 38.6891L0.0744465 56.3991Z" fill="#040404"/>
            <path d="M26.5672 39.9138L50.1094 57.6155L51.0033 56.3978L27.4611 38.6961L26.5672 39.9138Z" fill="#040404"/>
            <path d="M-0.00367848 40.0182L0.890625 41.2356L24.4267 23.5256L23.5324 22.3082L-0.00367848 40.0182Z" fill="#040404"/>
            <path d="M26.4891 23.5327L50.0312 41.2344L50.9251 40.0167L27.383 22.315L26.4891 23.5327Z" fill="#040404"/>
            <path d="M0.0744465 110.859L0.96875 112.076L24.5048 94.3659L23.6105 93.1485L0.0744465 110.859Z" fill="#040404"/>
            <path d="M26.5672 94.3732L50.1094 112.075L51.0033 110.857L27.4611 93.1554L26.5672 94.3732Z" fill="#040404"/>
            <path d="M-0.00367848 94.4775L0.890625 95.6949L24.4267 77.9849L23.5324 76.7675L-0.00367848 94.4775Z" fill="#040404"/>
            <path d="M26.4891 77.9921L50.0312 95.6937L50.9251 94.476L27.383 76.7743L26.4891 77.9921Z" fill="#040404"/>
        </svg>
    </div>

    <div class="popup-info">
        <h4 class="popup-title">ЗАЯВКА НА ПОКУПКУ</h4>
        <div class="popup-form"><?php echo do_shortcode('[contact-form-7 id="b6115ca" title="Заявка на покупку"]') ?></div>
    </div>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/not-gulp/popup-request.css" as="style">

    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            let popupPurchase = document.querySelector('.popup-purchase'),
                closePopupPurchase = popupPurchase.querySelector('.popup-close'),
                backgroundPopupPurchase = document.querySelector('.background-popup-purchase');

            backgroundPopupPurchase.onclick = function ( e ) {
                e.preventDefault();

                backgroundPopupPurchase.classList.remove('active');
                popupPurchase.classList.remove('active');

                setTimeout(() => {
                    document.documentElement.classList.remove('no-scroll');
                    document.documentElement.style.removeProperty('margin-right');
                }, 400);
            };

            closePopupPurchase.onclick = function ( e ) {
                e.preventDefault();

                backgroundPopupPurchase.classList.remove('active');
                popupPurchase.classList.remove('active');

                setTimeout(() => {
                    document.documentElement.classList.remove('no-scroll');
                    document.documentElement.style.removeProperty('margin-right');
                }, 400);
            };

            let purchaseButtons = document.querySelectorAll('.purchase-button-popup');

            purchaseButtons.forEach(purchaseButton => {
                purchaseButton.onclick = function ( e ) {
                    e.preventDefault();

                    window.clearForm();

                    document.documentElement.classList.add('no-scroll');
                    document.documentElement.style.marginRight = window.scrollWidth + 'px';

                    backgroundPopupPurchase.classList.add('active');
                    popupPurchase.scrollTop = 0;
                    popupPurchase.classList.add('active');
                };
            });
        });
    </script>
</div>

<div id="popup-success" class="popup-answer sent" style="display: none">
    <svg data-fancybox-close data-src="#popup-success" class="popup__close" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M37.145 37.1429L2.85938 2.85726M2.85938 37.1428L37.145 2.85718" stroke="#1126B6" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/>
    </svg>

    <div class="popup-answer__answer">
        <h5 class="answer__title">Благодарим за заявку!</h5>
        <p class="answer__description">Наш специалист свяжется с вами в ближайшее время, чтобы обсудить детали и ответить на все ваши вопросы.</p>
    </div>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/not-gulp/popup-answer.css" as="style">
</div>

<div id="popup-failed" class="popup-answer failed" style="display: none">
    <svg data-fancybox-close data-src="#popup-failed" class="popup__close" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M37.145 37.1429L2.85938 2.85726M2.85938 37.1428L37.145 2.85718" stroke="#1126B6" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/>
    </svg>

    <div class="popup-answer__answer">
        <h5 class="answer__title">Ошибка отправки заявки</h5>
        <p class="answer__description">К сожалению, произошла ошибка отправки формы. Попробуйте снова через некоторое время.</p>
    </div>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/not-gulp/popup-answer.css" as="style">
</div>

<?php wp_footer();?>
