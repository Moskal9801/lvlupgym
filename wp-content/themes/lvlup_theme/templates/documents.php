<?php /* Template name: Документация */

get_header(); ?>

<h1 class="for-title">LVLUP | Документация</h1>

<?php get_template_part( 'parts/default-items/default', 'banner' ); ?>

<?php if ( have_rows( 'documents' ) ) { ?>
    <section class="documents-page__documents">
        <div class="container">
            <div class="documents__body">
                <?php while ( have_rows( 'documents' ) ) { the_row(); ?>
                    <div class="body__item">
                        <?php $file_url = get_sub_field( 'documents-file' );

                        $file_path = get_attached_file( attachment_url_to_postid( $file_url ) );
                        $file_size = filesize($file_path);
                        $file_size_mb = round($file_size / 1024 / 1024, 1);
                        $file_extension = pathinfo($file_path, PATHINFO_EXTENSION); ?>

                        <a class="item__name" href="<?php the_sub_field( 'documents-file' ); ?>" target="_blank">
                            <p class="name__name"><?php the_sub_field( 'documets-title' ); ?></p>
                            <p class="name__format"><?php echo strtoupper($file_extension) . ' (' . $file_size_mb . ' Мб)'; ?></p>
                        </a>
                        <a class="item__download" href="<?php the_sub_field( 'documents-file' ); ?>" download>
                            <p>Скачать</p>
                            <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.19515 15.3531C11.0906 12.4699 12.7139 10.8534 15.6094 7.97015M8.19515 15.3531L0.78093 7.97015M8.19515 15.3531L8.19515 0.524645" stroke="#6F6F6F" stroke-width="1.19668"/>
                                <path d="M0.390625 18.475L15.9995 18.475" stroke="#6F6F6F" stroke-width="1.19668"/>
                            </svg>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php get_footer(); ?>