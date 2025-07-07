<section class="first-screen__banner">
    <div class="banner__image desktop-image" style="background-image: url('<?php if (is_post_type_archive('news')) { echo '/wp-content/themes/lvlup_theme/assets/media-file/archive-news-desktop.png'; } elseif (is_post_type_archive('vacancy')) { echo '/wp-content/themes/lvlup_theme/assets/media-file/archive-vacancy-desktop.png'; } else { the_field( 'banner-desktop' ); } ?>')"></div>

    <div class="banner__image mobile-image" style="background-image: url('<?php if (is_post_type_archive('news')) { echo '/wp-content/themes/lvlup_theme/assets/media-file/archive-news-mobile.png'; } elseif (is_post_type_archive('vacancy')) { echo '/wp-content/themes/lvlup_theme/assets/media-file/archive-vacancy-mobile.png'; } else { the_field( 'banner-mobile' ); } ?>')"></div>

    <div class="container">
        <div class="banner__body">
            <h2 class="<?php if (is_page_template('templates/documents.php') || (is_single() && get_the_title() === 'ФУНКЦИОНАЛЬНЫЕ ТРЕНИРОВКИ')) { echo 'long-word'; } ?>"><?php if (is_post_type_archive('news')) { echo 'Новости'; } elseif (is_post_type_archive('vacancy')) { echo 'Вакансии'; } else { the_title(); } ?></h2>
        </div>
    </div>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/not-gulp/default-banner.css" as="style">
</section>