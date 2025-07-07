<?php get_header(); ?>

<h1 class="for-title">LVLUP | Вакансии</h1>

<?php get_template_part( 'parts/default-items/default', 'banner' ); ?>

<section class="archive-page__vacancy">
    <div class="container">
        <div class="vacancy__body">
            <div class="body__items">
                <?php $args = [
                    'post_type' => 'vacancy',
                    'post_status' => 'publish',
                    'order'       => 'DESC',
                ]; $query = new WP_Query( $args ); ?>

                <?php if ( $query->have_posts() ) { ?>
                    <?php while ( $query->have_posts() ) { ?>

                        <?php $query->the_post(); ?>

                        <?php $params = [ 'id' => get_the_ID() ]; ?>

                        <?php get_template_part('parts/default-items/default', 'card_vacancy', $params); ?>

                    <?php } ?>

                    <?php wp_reset_postdata(); ?>
                <?php } else { ?>
                    <div class="items__not">На данный момент вакансии отсутствуют</div>
                <?php } ?>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            let accordions = document.querySelectorAll('.archive-page__vacancy .body__items');

            accordions.forEach(accordion => {
                let items = accordion.querySelectorAll('.items__item.accordion__item');

                items.forEach(item => {
                    let label = item.querySelector('.accordion__label');

                    label.onclick = function (e) {
                        e.preventDefault();

                        let isActive = item.classList.contains('active');

                        items.forEach(function (el) {
                            el.classList.remove('active');
                        });

                        if (!isActive) {
                            item.classList.add('active');
                        }
                    }
                });
            });

            //ВЫЗОВ ФУНКЦИИ ФОРМЫ ОТКЛИКА
            let vacancyItems = document.querySelectorAll('.archive-page__vacancy .body__items .items__item.accordion__item');

            vacancyItems.forEach(vacancyItem => {
                let vacancyButton = vacancyItem.querySelector('.resume__request');

                vacancyButton.onclick = function (e) {
                    e.preventDefault();

                    let popupResponse = document.querySelector('.popup-response'),
                        backgroundPopupResponse = document.querySelector('.background-popup-response'),
                        vacancyName = e.target.closest('.items__item.accordion__item').querySelector('.label__name .name__title'),
                        vacancyNamePopup = popupResponse.querySelector('.wpcf7-form input.input.vacancy');

                    window.clearForm();

                    vacancyNamePopup.value = vacancyName.textContent;

                    document.documentElement.classList.add('no-scroll');
                    document.documentElement.style.marginRight = window.scrollWidth + 'px';

                    backgroundPopupResponse.classList.add('active');
                    popupResponse.scrollTop = 0;
                    popupResponse.classList.add('active');
                }
            });
        });
    </script>
</section>

<?php get_footer(); ?>
