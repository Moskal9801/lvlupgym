<?php get_header();

$counter  = 1;

if (wp_is_mobile()) {
    $maxPosts = 6;
} else {
    $maxPosts = 7;
} ?>

<h1 class="for-title">LVLUP | Новости и события</h1>

<?php get_template_part( 'parts/default-items/default', 'banner' ); ?>

<section class="archive-page__news">
    <div class="container">
        <div class="news__body">
            <div class="body__items">
                <?php $args = [
                    'post_type' => 'news',
                    'post_status' => 'publish',
                    'order'       => 'DESC',
                    'posts_per_page' => $maxPosts,
                ]; $query = new WP_Query( $args ); ?>

                <?php if ( $query->have_posts() ) { ?>
                    <?php while ( $query->have_posts() && (($counter % $maxPosts) !== 0) ) { ?>

                        <?php $query->the_post(); ?>

                        <?php $params = [ 'id' => get_the_ID() ]; ?>

                        <?php get_template_part('parts/default-items/default', 'card_news', $params); ?>

                        <?php $counter++; ?>

                    <?php } ?>

                    <?php wp_reset_postdata(); ?>
                <?php } else { ?>
                    <div class="items__not">На данный момент новости отсутствуют</div>
                <?php } ?>
            </div>

            <?php $query = array(
                'post_type' => 'news',
                'post_status' => 'publish',
                'posts_per_page' => $maxPosts,
            ); $posts = new WP_Query( $query ); $allPostsCounter = 0; ?>

            <?php while ( $posts->have_posts() ) { ?>
                <?php $posts->the_post(); ?>

                <?php $allPostsCounter ++; ?>
            <?php } ?>

            <?php $maxPosts --; $maxPages = ceil( $allPostsCounter / $maxPosts ); ?>

            <a <?php if ( $maxPages <= 1 ) { ?> style="display: none; opacity: 0" <?php } ?>
                    id="more-news"
                    class="body__more <?php if ( $maxPages <= 1 ) { echo 'hidden'; } ?>"
                    data-current-page="1"
                    data-query='<?= json_encode( $posts->query_vars ); ?>'
                    data-max-pages="<?= $maxPages; ?>">
                <div class="loader-inner"></div>
            </a>

            <?php wp_reset_postdata(); ?>
        </div>
    </div>

    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            //ВЫЗОВ ФУНКЦИИ ПОДГРУЗКИ ПОСТОВ ПРИ СКРОЛЛЕ
            window.addEventListener( 'scroll', function () {
                loadMoreNews();
            } );

            //ВЫЗОВ ФУНКЦИИ ПОКАЗА СОДЕРЖИМОГО НОВОСТИ
            document.addEventListener('click', function (e) {
                if (e.target.closest('.archive-page__news .news__body .items__item')) {
                    e.preventDefault();

                    showNews(e.target.closest('.archive-page__news .news__body .items__item').dataset.id);
                }
            });

            //ПОДГРУЗКА ПОСТОВ НОВОСТЕЙ ПРИ СКРОЛЛЕ
            function loadMoreNews () {
                let bottomOffset = 2250;

                let loadMore = jQuery( '#more-news' ), currentPage = loadMore.attr( 'data-current-page' );

                let data = {
                    'action':'load_more-news', 'query':loadMore.attr( "data-query" ), 'page':currentPage
                };

                if ( (jQuery( document ).scrollTop() > (jQuery( document ).height() - bottomOffset)) && !jQuery( 'body' ).hasClass( 'loading' ) && !loadMore.hasClass( 'hidden' ) ) {
                    jQuery.ajax( {
                        url:'/wp-admin/admin-ajax.php', data:data, type:'POST', beforeSend:function ( xhr ) {
                            jQuery( 'body' ).addClass( 'loading' );
                            loadMore.css( 'opacity', 1 );
                        }, success:function ( data ) {
                            if ( data ) {
                                loadMore.html( '<div class="loader-inner"></div>' );
                                loadMore.prev().append( data );

                                currentPage++;
                                loadMore.attr( 'data-current-page', currentPage.toString() );

                                if ( currentPage === parseInt( loadMore.attr( "data-max-pages" ) ) ) {
                                    loadMore.addClass( 'hidden' );
                                }
                                jQuery( 'body' ).removeClass( 'loading' );
                                loadMore.css( 'opacity', 0 );
                            } else {
                                loadMore.addClass( 'hidden' );
                                jQuery( 'body' ).removeClass( 'loading' );
                            }
                        },
                    } );
                }
            }

            function showNews (id) {
                document.querySelector( 'body' ).classList.add( 'loading' );

                const formData = new FormData();
                formData.append( 'action', "show_news" );
                formData.append( 'id', id );

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

                        showPopupNews(result.data);
                    })
                    .catch(error => {
                        console.error('Ошибка:', error.message);
                    });
            }

            function showPopupNews (data) {
                let popupNews = document.querySelector('.popup-news'),
                    backgroundPopupNews = document.querySelector('.background-popup-news'),
                    image = popupNews.querySelector('.news-image img'),
                    date = popupNews.querySelector('.news-info .info-date'),
                    content = popupNews.querySelector('.news-info .info-content');

                image.src = data.image;

                date.innerHTML = data.date;
                content.innerHTML = data.content;

                document.querySelector( 'body' ).classList.remove( 'loading' );

                document.documentElement.classList.add('no-scroll');
                document.documentElement.style.marginRight = window.scrollWidth + 'px';

                backgroundPopupNews.classList.add('active');
                popupNews.scrollTop = 0;
                popupNews.classList.add('active');

                //ПОДКЛЮЧЕНИЕ СТИЛЕЙ СТАНДАРТНОГО СЛАЙДЕРА
                const link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = window.location.protocol + '//' + window.location.hostname + '/wp-content/themes/lvlup_theme/parts/wp_editor-blocks/slider/slider.css';
                document.head.appendChild(link);

                //ПОДКЛЮЧЕНИЕ СКРИПТОВ СТАНДАРТНОГО СЛАЙДЕРА
                const script = document.createElement('script');
                script.src = window.location.protocol + '//' + window.location.hostname + '/wp-content/themes/lvlup_theme/parts/wp_editor-blocks/slider/slider.js';
                document.body.appendChild(script);

                //ИНИЦИАЛИЗАЦИЯ FANCYBOX
                let galleries = document.querySelectorAll('.wp-block-gallery');

                galleries.forEach(function(gallery, index) {
                    let images = gallery.querySelectorAll('img');

                    let galleryId = 'gallery-' + (index + 1);

                    images.forEach(function(image) {
                        image.setAttribute('data-fancybox', galleryId);

                        Fancybox.bind(`[data-fancybox="${image.getAttribute('data-fancybox')}"]`, {
                            on: {
                                init: (fancybox) => {
                                    fancybox.options.hideScrollbar = false;
                                },
                            },
                        });

                        let clickImage = image.closest('.wp-block-image');

                        clickImage.addEventListener('click', function () {
                            image.click();
                        });
                    });
                });

                document.addEventListener('click', function (e) {
                    if (e.target.closest('.swiper-slide')) {
                        e.preventDefault();

                        Fancybox.bind(`[data-fancybox="${e.target.closest('.swiper-slide').querySelector('a').getAttribute('data-fancybox')}"]`, {
                            on: {
                                init: (fancybox) => {
                                    fancybox.options.hideScrollbar = false;
                                },
                            },
                        });

                        e.target.closest('.swiper-slide').querySelector('a').click();
                    }
                });
            }
        });
    </script>
</section>

<?php get_footer(); ?>
