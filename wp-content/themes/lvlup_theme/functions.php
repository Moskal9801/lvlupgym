<?php

use YooKassa\Client;

require_once 'php_modules/yookassa/vendor/autoload.php';
require_once 'parts/wp_editor-blocks/slider/init.php';

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), [], filemtime( get_stylesheet_directory() . '/style.css' ) );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/main.js', [ 'jquery' ], filemtime( get_stylesheet_directory() . '/main.js' ) );
} );

add_action( 'wp_head', function () {
    if (is_404()) {
        echo '<meta name="robots" content="noindex, nofollow">';
    }
} );

add_action( 'wp_head', function () {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
} );

add_action( 'admin_head', function () {
    wp_enqueue_script( 'cat-script', get_template_directory_uri() . '/cat.js' );
} );

add_action( 'login_header', function () { ?>
    <style>
        #login h1 a {
            background: url("logo.png") center top no-repeat !important;
            width:      111px !important;
            height:     180px !important;
        }
    </style>
<?php } );

add_filter( 'login_headerurl', function () {
    return 'https://01cat.ru';
} );

add_filter( 'admin_footer_text', function () {
    return '<b>Сделано:</b>
			    <a href="https://01cat.ru/" target="_blank" rel="nofollow noopener">Двоичный кот</a>
			    <br>
			    <b>Техническая поддержка:</b> тел. <a href="tel:+79145416354">+7 (914) 541-63-54</a>, email: <a href="mailto:hello@01cat.ru">hello@01cat.ru</a>';
} );

add_filter('site_transient_update_plugins', 'my_remove_update_nag'); #УДАЛЕНИЕ НАПОМИНАНИЯ ОБНОВЛЕНИЯ У ACF
function my_remove_update_nag($value) {
    unset($value->response[ 'advanced-custom-fields-pro/acf.php' ]);
    return $value;
}

add_theme_support( 'post-thumbnails' );
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' ); #ОТКЛЮЧАЕМ СОЗДАНИЕ КОПИЙ КАРТИНОК
function delete_intermediate_image_sizes( $sizes ){
    return array_diff( $sizes, [
        'large',
        'medium_large',
        'medium',
        'post-thumbnail',
        '1536x1536',
        '2048x2048',
    ] );
}

add_action('admin_bar_init', function() { #УДАЛЕНИЕ ОТСТУПА У АДМИН ПАНЕЛИ
    remove_action('wp_head', '_admin_bar_bump_cb');
});

add_action("admin_menu", "remove_menus"); #УДАЛЕНИЕ ПУНКТОВ МЕНЮ В АДМИНКЕ
function remove_menus() {
    remove_menu_page("edit-comments.php"); #КОММЕНТАРИИ
    remove_menu_page("edit.php"); #ЗАПИСИ
}

if ( function_exists( 'acf_add_options_page' ) ) { #ДОП.ПУНКТ МЕНЮ ДЛЯ ОБЩЕЙ ИНФОРМАЦИИ
    acf_add_options_page( [
        'page_title' => 'Общая информация',
        'menu_title' => 'Общая информация',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ] );
}

function clearPhone( $phone ) { #ФУНКЦИЯ ДЛЯ ОЧИЩЕНИЯ НОМЕРА ТЕЛЕФОНА ОТ НЕНУЖНЫХ ЗНАКОВ
    $to_replace = [ ' ', '-', '(', ')' ];

    return str_replace( $to_replace, '', $phone );
}

//ПОКАЗАТЬ ЕЩЕ НОВОСТИ
add_action( "wp_ajax_load_more-news", "load_news" );
add_action( "wp_ajax_nopriv_load_more-news", "load_news" );
function load_news() {

    if ( wp_is_mobile() ) {
        $maxPosts = 5;
    } else {
        $maxPosts = 6;
    }

    $args = json_decode( stripslashes( $_POST[ "query" ] ), true );

    $args[ "paged" ]          = $_POST[ "page" ] + 1;
    $args[ "posts_per_page" ] = $maxPosts;
    $args[ "order" ]          = 'DESC';

    $posts = new WP_Query( $args );
    $html  = '';

    if ( $posts->have_posts() ) {
        while ( $posts->have_posts() ) {
            $posts->the_post();

            $params = [ 'id' => get_the_ID() ];

            $html .= get_template_part( 'parts/default-items/default', 'card_news', $params );
        }
    } else {
        echo 'На данный момент новости отсутствуют';
    }

    wp_reset_postdata();
    die( $html );
}

//ПОКАЗАТЬ СОДЕРЖИМОЕ НОВОСТИ
add_action( "wp_ajax_show_news", "show_news" );
add_action( "wp_ajax_nopriv_show_news", "show_news" );
function show_news() {
    $id = intval($_POST['id']);

    if (get_post($id)) {
        $image = '';

        if (get_the_post_thumbnail_url($id)) {
            if (wp_is_mobile()) {
                $image = get_field('image-mobile', $id);
            } else {
                $image = get_field('image-desktop', $id);
            }
        } else {
            $image = '/';
        }

        wp_send_json_success([
            'image' => $image,
            'date' => get_the_time('d.m.Y', $id),
            'content' => apply_filters('the_content', get_the_content(null, false, $id)),
        ]);
    } else {
        wp_send_json_error('Новость не найдена!');
    }
}

//ЗАПРОС ПОЛУЧЕНИЯ ПОСТОВ НОВОСТЕЙ ПРИ ПЕРЕКЛЮЧЕНИИ КАТЕГОРИЙ СОБЫТИЙ
add_action( "wp_ajax_coaches_filter", "coaches_filter" );
add_action( "wp_ajax_nopriv_coaches_filter", "coaches_filter" );
function coaches_filter() {
    $post_type = $_POST[ "post" ];;
    $category = $_POST[ "category" ];

    if ( $category !== 'all' ) {
        $args = [
            'post_type'       => $post_type,
            'category-coaches' => $category,
        ];
    } else {
        $args = [
            'post_type'       => $post_type,
            'category-coaches' => false,
        ];
    }

    $posts = new WP_Query( $args );
    $html  = '';

    if ( $posts->have_posts() ) {
        while ( $posts->have_posts() ) {
            $posts->the_post();

            $params = [ 'id' => get_the_ID() ];

            $html .= get_template_part('parts/default-items/default', 'coaches', $params);
        }
    } else {
        echo '<div class="items__not">На данный момент тренера отсутствуют</div>';
    }

    wp_reset_postdata();
    die( $html );
}

//ПОКАЗАТЬ СОДЕРЖИМОЕ ТРЕНЕРА
add_action( "wp_ajax_show_coaches", "show_coaches" );
add_action( "wp_ajax_nopriv_show_coaches", "show_coaches" );
function show_coaches() {
    $id = intval($_POST['id']);

    if (get_post($id)) {
        $image = '';
        $education = [];
        $experience = [];
        $directions = [];

        if (get_field( 'image', $id )) {
            $image = get_field( 'image', $id );
        } else {
            $image = '/';
        }

        if ( have_rows( 'education', $id ) ) {
            while (have_rows('education', $id)) { the_row();
                $education[] = get_sub_field('education-items', $id);
            }
        }

        if ( have_rows( 'experience', $id ) ) {
            while (have_rows('experience', $id)) { the_row();
                $experience[] = get_sub_field('experience-items', $id);
            }
        }

        if ( have_rows( 'directions', $id ) ) {
            while (have_rows('directions', $id)) { the_row();
                $directions[] = get_sub_field('directions-items', $id);
            }
        }

        wp_send_json_success([
            'image' => $image,
            'title' => get_the_title($id),
            'post' => get_field( 'post', $id ),
            'experienceItem' => get_field( 'experience-item',  $id ),
            'standing' => get_field( 'standing', $id ),
            'educationItem' => get_field( 'education-item', $id ),
            'specialization' => get_field( 'specialization', $id ),
            'retraining' => get_field( 'retraining', $id ),
            'education' => $education,
            'experience' => $experience,
            'directions' => $directions,
        ]);
    } else {
        wp_send_json_error('Содержимое тренера не найдено!');
    }
}

//ПОКАЗАТЬ СОДЕРЖИМОЕ ОСОБЕННОСТЕЙ
add_action( "wp_ajax_show_features", "show_features" );
add_action( "wp_ajax_nopriv_show_features", "show_features" );
function show_features() {
    $id = intval($_POST['id']);
    $counter = intval($_POST['counter']);

    $title = '';
    $more = '';

    if (get_post($id)) {

        if ( have_rows( 'directions-features', $id ) ) { $counter_function = 1;
            while (have_rows('directions-features', $id)) { the_row();
                if ( $counter_function == $counter ) {
                    $title = get_sub_field('features-title', $id);
                    $more = get_sub_field('features-more', $id);
                    $textButton = get_sub_field( 'features-text-button', $id );
                    $linkButton = get_sub_field( 'features-link-button', $id );
                }
            $counter_function ++; }
        }

        wp_send_json_success([
            'title' => $title,
            'more' => $more,
            'textButton' => $textButton,
            'linkButton' => $linkButton,
        ]);
    } else {
        wp_send_json_error('Содержимое особенностей не найдено!');
    }
}

//ПОКАЗАТЬ ВАРИАНТЫ КЛУБНЫХ КАРТ
add_action( "wp_ajax_show_variantsClub", "show_variantsClub" );
add_action( "wp_ajax_nopriv_show_variantsClub", "show_variantsClub" );
function show_variantsClub() {

    if ( have_rows( 'tickets', 'option' ) ) {
        $counter = 1; $output = '';

        while ( have_rows( 'tickets', 'option' ) ) { the_row();
            if ( get_sub_field( 'can-im-buy' ) == 1 ) {
                $output .= '<div class="items__item">';
                $output .= '<div class="item__left">';
                $output .= '<div class="left__checked"></div>';
                $output .= '<p class="left__number">' . str_pad($counter, 2, '0', STR_PAD_LEFT) . '</p>';
                $output .= '<p class="left__name">' . get_sub_field('tickets-title') . '</p>';
                $output .= '</div>';
                $output .= '<div class="item__right">';
                if (empty(get_sub_field('tickets-price-stock')) || get_sub_field('tickets-price-stock') == 0 || get_sub_field('tickets-price-stock') >= get_sub_field('tickets-price')) {
                    $output .= '<div class="right__stock">';
                    $output .= '<p class="stock__amount">' . get_sub_field('tickets-price') . ' ₽</p>';
                    $output .= '</div>';
                } else {
                    $output .= '<p class="right__price">' . get_sub_field('tickets-price') . ' ₽</p>';
                    $output .= '<div class="right__stock">';
                    $output .= '<p class="stock__percent">скидка ' . round(((get_sub_field('tickets-price') - get_sub_field('tickets-price-stock')) / get_sub_field('tickets-price')) * 100) . ' %</p>';
                    $output .= '<p class="stock__amount">' . get_sub_field('tickets-price-stock') . ' ₽</p>';
                    $output .= '</div>';
                }
                $output .= '</div>';
                $output .= '</div>';
            $counter++; }
        }

        wp_send_json_success([
            'output' => $output,
        ]);
    } else {
        wp_send_json_error('Доступные абонементы не найдены!');
    }
}

//ФУНКЦИЯ ОТПРАВКИ ФОРМЫ ЗАЯВКИ В 1С фитнес
add_action( "wp_ajax_requestFitness", "requestFitness" );
add_action( "wp_ajax_nopriv_requestFitness", "requestFitness" );

function requestFitness() {
    $data = [
        'name'         => $_POST[ 'name' ],
        'last_name'    => $_POST[ 'surname' ],
        'phone'        => $_POST[ 'phone' ],
        'email'        => $_POST[ 'mail' ],
        'comment'      => 'Заявка на покупку клубной карты с сайта: https://lvlupgym.ru',
        'utm_source'   => '',
        'utm_medium'   => '',
        'utm_campaign' => '',
        'utm_term'     => '',
        'utm_content'  => '',
        'ga_cid'       => '',
        'rs_cid'       => '',
        'ym_cid'       => '',
        'rs_vid'       => '',
        'ct_cid'       => ''
    ];

    $json_data = json_encode( $data );

    $ch = curl_init( 'https://domain/api/hs/lead/Webhook/key' );

    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch, CURLOPT_POST, true );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen( $json_data )
    ] );

    $response = curl_exec( $ch );

    if ( $response === false ) {
        $error = curl_error( $ch );
        curl_close( $ch );
        die( 'Ошибка отправки запроса: ' . $error );
    }

    curl_close( $ch );

    $responseData = json_decode( $response, true );

    die( $responseData );
}



//ФУНКЦИЯ ФОРМИРОВАНИЯ ПЛАТЕЖА И ССЫЛКИ НА ОПЛАТУ
add_action( "wp_ajax_yookassa_api", "yookassa_api" );
add_action( "wp_ajax_nopriv_yookassa_api", "yookassa_api" );

function yookassa_api() {
    $client = new Client();
    $client->setAuth( 'shopid', 'shopkey' );

    $idempotenceKey = uniqid( '', true );

    $name       = $_POST[ 'name' ];
    $surname    = $_POST[ 'surname' ];
    $mail       = $_POST[ 'mail' ];
    $phone      = $_POST[ 'phone' ];
    $ticket     = $_POST[ 'ticket' ];

    if ( have_rows( 'tickets', 'option' ) ) {
        while ( have_rows( 'tickets', 'option' ) ) { the_row();
            if ($ticket === get_sub_field( 'tickets-title' )) {
                if (get_sub_field( 'tickets-price-stock' )) {
                    $price = str_replace( ' ', '', get_sub_field( 'tickets-price-stock' ) );
                } else {
                    $price = str_replace( ' ', '', get_sub_field( 'tickets-price' ) );
                }
            }
        }
    }

    $response = $client->createPayment( [
        'amount'              => [
            'value'    => number_format( $price, 2, '.', '' ),
            'currency' => 'RUB',
        ],
        'payment_method_data' => [
            'type' => 'bank_card',
        ],
        'confirmation'        => [
            'type'       => 'redirect',
            'return_url' => 'https://lvlupgym.ru/#successful-payment',
        ],
        'description'         => 'Электронная почта: ' . $mail . ', номер телефона: ' . $phone,
        'receipt'             => [
            'customer' => [
                'full_name' => $surname . ' ' . $name,
                'email'     => $mail,
                'phone'     => clearPhone( $phone ),
            ],
            'items'    => [
                [
                    'description'     => $ticket,
                    'quantity'        => '1.00',
                    'amount'          => [
                        'value'    => number_format( $price, 2, '.', '' ),
                        'currency' => 'RUB'
                    ],
                    'vat_code'        => '1',
                    'payment_mode'    => 'full_prepayment',
                    'payment_subject' => 'service'
                ],
            ]
        ],
    ], $idempotenceKey );

    $db = new PDO( 'mysql:host=localhost;dbname=info-db', 'info-db', 'info-db' );

    $stmt = $db->prepare( "INSERT INTO wp_youkassa_payment (id, created_at, name, surname, mail, phone, ticket, price, status, checked_number) VALUES (:id, :created_at, :name, :surname, :mail, :phone, :ticket, :price, :status, :checked_number)" );

    $stmt->execute( [
        ':id'             => $response->id,
        ':created_at'     => $response->created_at->format( 'Y-m-d H:i:s' ),
        ':name'           => $name,
        ':surname'        => $surname,
        ':mail'           => $mail,
        ':phone'          => $phone,
        ':ticket'         => $ticket,
        ':price'          => $price,
        ':status'         => $response->status,
        ':checked_number' => 0
    ] );

    $confirmationUrl = $response->getConfirmation()->getConfirmationUrl();

    die( $confirmationUrl );
}