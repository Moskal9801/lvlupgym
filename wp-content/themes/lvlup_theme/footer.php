        </main>

        <footer class="main-footer">
            <div class="container">
                <div class="main-footer__body">
                    <div class="body__contacts">
                        <h4>КОНТАКТЫ</h4>
                        <div class="contacts__main-info">
                            <p>Отдел продаж: <a href="tel:<?php echo clearPhone(get_field( 'sales-department', 'option' ))?>"><?php the_field( 'sales-department', 'option' ); ?></a></p>
                            <p>Whatsapp: <a href="https://wa.me/<?php echo clearPhone(get_field( 'whatsapp', 'option' ))?>" target="_blank" rel="nofollow noopener"><?php the_field( 'whatsapp', 'option' ); ?></a></p>
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
                        <div class="info__club-cards">
                            <a class="club-cards__buy default-button yellow-button club-button-popup" href="#">КУПИТЬ КЛУБНУЮ КАРТУ</a>
                            <a class="club-cards__want default-border-button white-border purchase-button-popup" href="#">ХОЧУ КЛУБНУЮ КАРТУ</a>
                        </div>
                        <a class="info__presentation" href="<?php the_field( 'presentation', 'option' ); ?>" target="_blank" rel="nofollow noopener">
                            <p>СКАЧАТЬ ПРЕЗЕНТАЦИЮ</p>
                            <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.80453 14.853C11.7 11.9698 13.3233 10.3533 16.2187 7.47009M8.80453 14.853L1.3903 7.47009M8.80453 14.853L8.80453 0.0245839" stroke="#C3C3C3" stroke-width="1.19668"/>
                                <path d="M1 17.9751L16.6089 17.9751" stroke="#C3C3C3" stroke-width="1.19668"/>
                            </svg>
                        </a>
                        <a class="info__logo" href="/" rel="noindex nofollow">
                            <?php get_template_part( 'parts/default-icons/logo', 'footer' ); ?>
                        </a>
                        <div class="info__documents">
                            <div class="documents__items">
                                <a href="<?php the_field( 'политика_обработки_персональных_данных', 'option' ); ?>" target="_blank" rel="nofollow noopener">Политика обработки персональных данных</a>
                                <a href="<?php the_field( 'согласие_на_обработку_персональных_данных', 'option' ); ?>" target="_blank" rel="nofollow noopener">Согласие на обработку персональных данных</a>
                                <a href="<?php the_field( 'согласие_на_обработку_файлов_cookie', 'option' ); ?>" target="_blank" rel="nofollow noopener">Согласие на обработку файлов cookie</a>
                                <a href="<?php the_field( 'правила_посещения', 'option' ); ?>" target="_blank" rel="nofollow noopener">Правила посещения</a>
                            </div>
                            <div class="documents__items">
                                <a href="<?php the_field( 'договор_публичной_оферты_об_оказании_физкультурно-оздоровительных_и_иных_услуг', 'option' ); ?>" target="_blank" rel="nofollow noopener">Договор публичной оферты об оказании физкультурно-оздоровительных и иных услуг</a>
                                <a href="<?php the_field( 'согласие_на_получение_новостной_и_рекламной_рассылки', 'option' ); ?>" target="_blank" rel="nofollow noopener">Согласие на получение новостной и рекламной рассылки</a>
                            </div>
                            <div class="documents__items">
                                <p>Сайт разработан: <a href="https://01cat.ru" target="_blank" rel="nofollow noopener">Двоичный кот</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/not-gulp/2. footer.css" as="style">

        <?php if ( is_post_type_archive('news') ) { ?>
            <div class="background-popup-news"></div>

            <div class="popup-news">
                <div class="news-close">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="40" cy="40" r="40" fill="#D1D1D1"/>
                        <path d="M43.4475 17L44.9375 17.9067L30.9744 39.1223L29.4843 38.2155L43.4475 17Z" fill="#1126B6"/>
                        <path d="M30.9075 39.9504L45 61.0846L43.5155 62L29.4231 40.8658L30.9075 39.9504Z" fill="#1126B6"/>
                    </svg>
                </div>

                <div class="news-image">
                    <img src="#">
                </div>

                <div class="news-info">
                    <p class="info-date"></p>
                    <div class="info-content"></div>
                </div>

                <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/not-gulp/popup-news.css" as="style">

                <script>
                    document.addEventListener( 'DOMContentLoaded', function () {
                        let popupNews = document.querySelector('.popup-news'),
                            closePopupNews = popupNews.querySelector('.news-close'),
                            backgroundPopupNews = document.querySelector('.background-popup-news');

                        backgroundPopupNews.onclick = function ( e ) {
                            e.preventDefault();

                            backgroundPopupNews.classList.remove('active');
                            popupNews.classList.remove('active');

                            setTimeout(() => {
                                document.documentElement.classList.remove('no-scroll');
                                document.documentElement.style.removeProperty('margin-right');
                            }, 400);
                        };

                        closePopupNews.onclick = function ( e ) {
                            e.preventDefault();

                            backgroundPopupNews.classList.remove('active');
                            popupNews.classList.remove('active');

                            setTimeout(() => {
                                document.documentElement.classList.remove('no-scroll');
                                document.documentElement.style.removeProperty('margin-right');
                            }, 400);
                        };
                    });
                </script>
            </div>
        <?php } ?>

        <?php if ( is_page_template('templates/about.php') ) { ?>
            <div class="background-popup-coaches"></div>

            <div class="popup-coaches">
                <div class="coaches-background-desktop">
                    <svg width="51" height="131" viewBox="0 0 51 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M-0.00367848 75.3267L0.890625 76.5441L24.4267 58.8341L23.5324 57.6167L-0.00367848 75.3267Z" fill="#6A6662"/>
                        <path d="M26.4891 58.8412L50.0312 76.5428L50.9251 75.3251L27.383 57.6235L26.4891 58.8412Z" fill="#6A6662"/>
                        <path d="M-0.00367848 129.786L0.890625 131.004L24.4267 113.294L23.5324 112.076L-0.00367848 129.786Z" fill="#6A6662"/>
                        <path d="M26.4891 113.301L50.0312 131.002L50.9251 129.785L27.383 112.083L26.4891 113.301Z" fill="#6A6662"/>
                        <path d="M0.0744465 21.0909L0.96875 22.3083L24.5048 4.59835L23.6105 3.38095L0.0744465 21.0909Z" fill="#6A6662"/>
                        <path d="M26.5672 4.60521L50.1094 22.3069L51.0033 21.0892L27.4611 3.38749L26.5672 4.60521Z" fill="#6A6662"/>
                        <path d="M-0.00367848 4.71009L0.890625 5.92749L24.4267 -11.7825L23.5324 -12.9999L-0.00367848 4.71009Z" fill="#6A6662"/>
                        <path d="M26.4891 -11.7754L50.0312 5.92627L50.9251 4.70855L27.383 -12.9931L26.4891 -11.7754Z" fill="#6A6662"/>
                        <path d="M0.0744465 56.3991L0.96875 57.6165L24.5048 39.9065L23.6105 38.6891L0.0744465 56.3991Z" fill="#6A6662"/>
                        <path d="M26.5672 39.9138L50.1094 57.6155L51.0033 56.3978L27.4611 38.6961L26.5672 39.9138Z" fill="#6A6662"/>
                        <path d="M-0.00367848 40.0182L0.890625 41.2356L24.4267 23.5256L23.5324 22.3082L-0.00367848 40.0182Z" fill="#6A6662"/>
                        <path d="M26.4891 23.5327L50.0312 41.2344L50.9251 40.0167L27.383 22.315L26.4891 23.5327Z" fill="#6A6662"/>
                        <path d="M0.0744465 110.859L0.96875 112.076L24.5048 94.3659L23.6105 93.1485L0.0744465 110.859Z" fill="#6A6662"/>
                        <path d="M26.5672 94.3732L50.1094 112.075L51.0033 110.857L27.4611 93.1554L26.5672 94.3732Z" fill="#6A6662"/>
                        <path d="M-0.00367848 94.4775L0.890625 95.6949L24.4267 77.9849L23.5324 76.7675L-0.00367848 94.4775Z" fill="#6A6662"/>
                        <path d="M26.4891 77.9921L50.0312 95.6937L50.9251 94.476L27.383 76.7743L26.4891 77.9921Z" fill="#6A6662"/>
                    </svg>
                </div>

                <div class="coaches-background-mobile">
                    <svg width="31" height="124" viewBox="0 0 31 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0501678 122.523L0.59375 123.275L14.8996 112.339L14.356 111.587L0.0501678 122.523Z" fill="#6A6662"/>
                        <path d="M16.1436 112.343L30.4531 123.274L30.9965 122.522L16.6869 111.591L16.1436 112.343Z" fill="#6A6662"/>
                        <path d="M0.00329277 112.408L0.546875 113.159L14.8527 102.224L14.3091 101.472L0.00329277 112.408Z" fill="#6A6662"/>
                        <path d="M16.0967 102.228L30.4062 113.158L30.9496 112.407L16.64 101.476L16.0967 102.228Z" fill="#6A6662"/>
                        <path d="M0.0501678 78.3518L0.59375 79.1035L14.8996 68.1678L14.356 67.4161L0.0501678 78.3518Z" fill="#6A6662"/>
                        <path d="M16.1436 68.172L30.4531 79.1025L30.9965 78.3506L16.6869 67.4201L16.1436 68.172Z" fill="#6A6662"/>
                        <path d="M0.00329277 68.2364L0.546875 68.9882L14.8527 58.0525L14.3091 57.3008L0.00329277 68.2364Z" fill="#6A6662"/>
                        <path d="M16.0967 58.0567L30.4062 68.9872L30.9496 68.2353L16.64 57.3047L16.0967 58.0567Z" fill="#6A6662"/>
                        <path d="M0.0501678 55.9824L0.59375 56.7341L14.8996 45.7985L14.356 45.0467L0.0501678 55.9824Z" fill="#6A6662"/>
                        <path d="M16.1436 45.8026L30.4531 56.7332L30.9965 55.9812L16.6869 45.0507L16.1436 45.8026Z" fill="#6A6662"/>
                        <path d="M0.00329277 45.8672L0.546875 46.6189L14.8527 35.6832L14.3091 34.9315L0.00329277 45.8672Z" fill="#6A6662"/>
                        <path d="M16.0967 35.6874L30.4062 46.6179L30.9496 45.866L16.64 34.9355L16.0967 35.6874Z" fill="#6A6662"/>
                        <path d="M0.0501678 100.437L0.59375 101.189L14.8996 90.2529L14.356 89.5012L0.0501678 100.437Z" fill="#6A6662"/>
                        <path d="M16.1436 90.257L30.4531 101.188L30.9965 100.436L16.6869 89.505L16.1436 90.257Z" fill="#6A6662"/>
                        <path d="M0.00329277 90.3218L0.546875 91.0735L14.8527 80.1378L14.3091 79.3861L0.00329277 90.3218Z" fill="#6A6662"/>
                        <path d="M16.0967 80.142L30.4062 91.0725L30.9496 90.3206L16.64 79.3901L16.0967 80.142Z" fill="#6A6662"/>
                        <path d="M0.0501678 34.5913L0.59375 35.343L14.8996 24.4073L14.356 23.6556L0.0501678 34.5913Z" fill="#6A6662"/>
                        <path d="M16.1436 24.4115L30.4531 35.342L30.9965 34.5901L16.6869 23.6596L16.1436 24.4115Z" fill="#6A6662"/>
                        <path d="M0.00329277 24.4761L0.546875 25.2278L14.8527 14.2921L14.3091 13.5404L0.00329277 24.4761Z" fill="#6A6662"/>
                        <path d="M16.0967 14.2963L30.4062 25.2268L30.9496 24.4749L16.64 13.5444L16.0967 14.2963Z" fill="#6A6662"/>
                        <path d="M0.0501678 12.5051L0.59375 13.2568L14.8996 2.32116L14.356 1.56944L0.0501678 12.5051Z" fill="#6A6662"/>
                        <path d="M16.1436 2.32509L30.4531 13.2556L30.9965 12.5037L16.6869 1.57316L16.1436 2.32509Z" fill="#6A6662"/>
                        <path d="M0.00329277 2.38987L0.546875 3.1416L14.8527 -7.79407L14.3091 -8.5458L0.00329277 2.38987Z" fill="#6A6662"/>
                        <path d="M16.0967 -7.7899L30.4062 3.14062L30.9496 2.3887L16.64 -8.54182L16.0967 -7.7899Z" fill="#6A6662"/>
                    </svg>
                </div>

                <div class="coaches-close">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="40" cy="40" r="40" fill="#D1D1D1"/>
                        <path d="M43.4475 17L44.9375 17.9067L30.9744 39.1223L29.4843 38.2155L43.4475 17Z" fill="#1126B6"/>
                        <path d="M30.9075 39.9504L45 61.0846L43.5155 62L29.4231 40.8658L30.9075 39.9504Z" fill="#1126B6"/>
                    </svg>
                </div>

                <div class="coaches-image">
                    <img src="#">
                </div>
                <div class="coaches-info">
                    <p class="info-title"></p>
                    <p class="info-post"></p>

                    <p class="info-item experience-item"><big>Спортивный опыт: </big></p>
                    <p class="info-item standing"><big>Тренерский стаж: </big></p>
                    <p class="info-item retraining"><big>Переподготовка: </big></p>

                    <div class="info-items education">
                        <p class="items-title">Образование:</p>
                        <div class="items-items">

                        </div>
                    </div>
                    <div class="info-items experience">
                        <p class="items-title">Дополнительное образование/сертификаты/курсы:</p>
                        <div class="items-items">

                        </div>
                    </div>
                    <div class="info-items directions">
                        <p class="items-title">Направление в работе:</p>
                        <div class="items-items">

                        </div>
                    </div>
                </div>

                <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/not-gulp/popup-coaches.css" as="style">

                <script>
                    document.addEventListener( 'DOMContentLoaded', function () {
                        let popupCoaches = document.querySelector('.popup-coaches'),
                            closePopupCoaches = popupCoaches.querySelector('.coaches-close'),
                            backgroundPopupCoaches = document.querySelector('.background-popup-coaches');

                        backgroundPopupCoaches.onclick = function ( e ) {
                            e.preventDefault();

                            backgroundPopupCoaches.classList.remove('active');
                            popupCoaches.classList.remove('active');

                            setTimeout(() => {
                                document.documentElement.classList.remove('no-scroll');
                                document.documentElement.style.removeProperty('margin-right');
                            }, 400);
                        };

                        closePopupCoaches.onclick = function ( e ) {
                            e.preventDefault();

                            backgroundPopupCoaches.classList.remove('active');
                            popupCoaches.classList.remove('active');

                            setTimeout(() => {
                                document.documentElement.classList.remove('no-scroll');
                                document.documentElement.style.removeProperty('margin-right');
                            }, 400);
                        };
                    });
                </script>
            </div>
        <?php } ?>

        <?php if ( is_single() ) { ?>
            <div class="background-popup-features"></div>

            <div class="popup-features">
                <div class="features-close">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="40" cy="40" r="40" fill="#D1D1D1"/>
                        <path d="M43.4475 17L44.9375 17.9067L30.9744 39.1223L29.4843 38.2155L43.4475 17Z" fill="#1126B6"/>
                        <path d="M30.9075 39.9504L45 61.0846L43.5155 62L29.4231 40.8658L30.9075 39.9504Z" fill="#1126B6"/>
                    </svg>
                </div>

                <div class="features-info">
                    <p class="info-title"></p>
                    <div class="info-more"></div>
                    <a class="info-button default-border-button blue-border" href=""></a>
                </div>

                <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/not-gulp/popup-features.css" as="style">

                <script>
                    document.addEventListener( 'DOMContentLoaded', function () {
                        let popupFeatures = document.querySelector('.popup-features'),
                            closePopupFeatures = popupFeatures.querySelector('.features-close'),
                            backgroundPopupFeatures = document.querySelector('.background-popup-features');

                        backgroundPopupFeatures.onclick = function ( e ) {
                            e.preventDefault();

                            backgroundPopupFeatures.classList.remove('active');
                            popupFeatures.classList.remove('active');

                            setTimeout(() => {
                                document.documentElement.classList.remove('no-scroll');
                                document.documentElement.style.removeProperty('margin-right');
                            }, 400);
                        };

                        closePopupFeatures.onclick = function ( e ) {
                            e.preventDefault();

                            backgroundPopupFeatures.classList.remove('active');
                            popupFeatures.classList.remove('active');

                            setTimeout(() => {
                                document.documentElement.classList.remove('no-scroll');
                                document.documentElement.style.removeProperty('margin-right');
                            }, 400);
                        };
                    });
                </script>
            </div>
        <?php } ?>

        <?php if ( is_post_type_archive('vacancy') ) { ?>
            <div class="background-popup-response background-popup-request"></div>

            <div class="popup-response popup-request">
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
                    <h4 class="popup-title">ОТПРАВИТЬ ОТКЛИК</h4>
                    <div class="popup-form"><?php echo do_shortcode('[contact-form-7 id="d4b7f9e" title="Отклик на вакансию"]') ?></div>
                </div>

                <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/not-gulp/popup-request.css" as="style">

                <script>
                    document.addEventListener( 'DOMContentLoaded', function () {
                        let popupResponse = document.querySelector('.popup-response'),
                            closePopupResponse = popupResponse.querySelector('.popup-close'),
                            backgroundPopupResponse = document.querySelector('.background-popup-response');

                        backgroundPopupResponse.onclick = function ( e ) {
                            e.preventDefault();

                            backgroundPopupResponse.classList.remove('active');
                            popupResponse.classList.remove('active');

                            setTimeout(() => {
                                document.documentElement.classList.remove('no-scroll');
                                document.documentElement.style.removeProperty('margin-right');
                            }, 400);
                        };

                        closePopupResponse.onclick = function ( e ) {
                            e.preventDefault();

                            backgroundPopupResponse.classList.remove('active');
                            popupResponse.classList.remove('active');

                            setTimeout(() => {
                                document.documentElement.classList.remove('no-scroll');
                                document.documentElement.style.removeProperty('margin-right');
                            }, 400);
                        };

                        //ФУНКЦИЯ КАСТОМНОЙ КНОПКИ ЗАГРУЗКИ ФАЙЛА
                        let wpcf7 = document.querySelectorAll('.wpcf7');

                        wpcf7.forEach(function(form) {
                            let documentButton = form.querySelector('.documents-button');

                            if (documentButton) {
                                documentButton.onclick = function (e) {
                                    e.preventDefault();

                                    let uploadButton = e.target.closest('.wpcf7-form__block.personal').querySelector('.cd-upload-btn')

                                    uploadButton.click();
                                };
                            }
                        });
                    });
                </script>
            </div>
        <?php } ?>

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
            <p class="cookie-description">Продолжая пользоваться сайтом вы выражаете своё <a href="<?php the_field( 'согласие_на_обработку_файлов_cookie', 'option' ); ?>" target="_blank" rel="nofollow noopener">Согласие на обработку файлов cookie</a> и подтверждаете факт ознакомления с <a href="<?php the_field( 'политика_обработки_персональных_данных', 'option' ); ?>" target="_blank">Политикой конфиденциальности</a>.</p>
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

        <div class="background-popup-club background-popup-request"></div>

        <div class="popup-club popup-request">
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
                <h4 class="popup-title">КУПИТЬ КЛУБНУЮ КАРТУ</h4>
                <div class="popup-form"><?php echo do_shortcode('[contact-form-7 id="646e4cf" title="Покупка клубной карты"]') ?></div>
            </div>

            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/not-gulp/popup-request.css" as="style">

            <script>
                document.addEventListener( 'DOMContentLoaded', function () {
                    let popupClub = document.querySelector('.popup-club'),
                        closePopupClub = popupClub.querySelector('.popup-close'),
                        backgroundPopupClub = document.querySelector('.background-popup-club');

                    backgroundPopupClub.onclick = function ( e ) {
                        e.preventDefault();

                        backgroundPopupClub.classList.remove('active');
                        popupClub.classList.remove('active');

                        setTimeout(() => {
                            document.documentElement.classList.remove('no-scroll');
                            document.documentElement.style.removeProperty('margin-right');
                        }, 400);
                    };

                    closePopupClub.onclick = function ( e ) {
                        e.preventDefault();

                        backgroundPopupClub.classList.remove('active');
                        popupClub.classList.remove('active');

                        setTimeout(() => {
                            document.documentElement.classList.remove('no-scroll');
                            document.documentElement.style.removeProperty('margin-right');
                        }, 400);
                    };

                    let clubButtons = document.querySelectorAll('.club-button-popup');

                    clubButtons.forEach(clubButton => {
                        clubButton.onclick = function ( e ) {
                            e.preventDefault();

                            let header = document.querySelector('.main-header'),
                                menu = document.querySelector('.main-menu'),
                                openMenu = header.querySelector('.body__hamburger'),
                                closedMenu = menu.querySelector('.body__hamburger .hamburger__hamburger');

                            if (header.classList.contains('open-menu') && menu.classList.contains('open-menu')) {
                                openMenu.classList.remove('active');
                                closedMenu.classList.remove('active');

                                document.documentElement.classList.remove('no-scroll');
                                document.documentElement.style.removeProperty('margin-right');

                                header.classList.remove('open-menu');
                                menu.classList.remove('open-menu');
                            }

                            window.clearForm();

                            preloadVariantsCard(popupClub, backgroundPopupClub);
                        };
                    });

                    function preloadVariantsCard (popupClub, backgroundPopupClub) {
                        const formData = new FormData();
                        formData.append( 'action', "show_variantsClub" );

                        fetch('/wp-admin/admin-ajax.php', {
                            method: 'POST',
                            body: formData,
                        })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error(`Ошибка HTTP: ${response.status}`);
                                }
                                return response.json();
                            })
                            .then(result => {
                                if (!result.success) {
                                    throw new Error(result.data || 'Неизвестная ошибка');
                                }

                                let placeForSelected = popupClub.querySelector('.selected__items');

                                placeForSelected.innerHTML = '';
                                placeForSelected.innerHTML = result.data.output;

                                document.documentElement.classList.add('no-scroll');
                                document.documentElement.style.marginRight = window.scrollWidth + 'px';

                                backgroundPopupClub.classList.add('active');
                                popupClub.scrollTop = 0;
                                popupClub.classList.add('active');

                                let popupClubSelected = popupClub.querySelectorAll('.selected__items .items__item');

                                popupClubSelected.forEach(selected => {
                                    let checkedItem = selected.querySelector('.left__checked');

                                    checkedItem.onclick = function (e) {
                                        e.preventDefault();

                                        popupClubSelected.forEach(item => {
                                            item.classList.remove('active');
                                        });

                                        selected.classList.add('active');
                                    };
                                });
                            })
                            .catch(error => {
                                console.error('Ошибка:', error.message);
                            });
                    }
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

        <div id="popup-buying" class="popup-answer buying" style="display: none">
            <svg data-fancybox-close data-src="#popup-buying" class="popup__close" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M37.145 37.1429L2.85938 2.85726M2.85938 37.1428L37.145 2.85718" stroke="#1126B6" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/>
            </svg>

            <div class="popup-answer__answer">
                <h5 class="answer__title">Покупка завершена!</h5>
                <p class="answer__description">Вы успешно приобрели абонемент! Вам на почту придет письмо с уточняющей информацией.</p>
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

        <script>
            sal({
                threshold: .0005,
            });
        </script>
    </body>

<?php wp_footer(); ?>

</html>