<?php $id = $args['id']; ?>

<div class="items__item accordion__item" data-id="<?php echo $id; ?>">
    <div class="item__accordion">
        <div class="accordion__label">
            <div class="label__name">
                <p class="name__title"><?php echo get_the_title($id); ?></p>
                <p class="name__description"><?php the_field( 'vacancy-description', $id ); ?></p>
            </div>
            <div class="label__arrow">
                <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="26.5" x2="26.5" y2="52" stroke="#1126B6"/>
                    <line y1="25.5" x2="52" y2="25.5" stroke="#1126B6"/>
                </svg>
            </div>
        </div>
        <div class="accordion__contents">
            <div class="accordion__animation">
                <div class="accordion__transform">
                    <div class="accordion__content">
                        <p class="accordion__description"><?php the_field( 'vacancy-description', $id ); ?></p>
                        <div class="accordion__info">
                            <p class="info__title">Требования</p>
                            <div class="info__items">
                                <?php if ( have_rows( 'vacancy-requirements', $id ) ) { ?>
                                    <?php while ( have_rows( 'vacancy-requirements', $id ) ) { the_row(); ?>
                                        <p class="items__item"><?php the_sub_field( 'requirements', $id ); ?></p>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="accordion__info">
                            <p class="info__title">Обязанности</p>
                            <div class="info__items">
                                <?php if ( have_rows( 'vacancy-duties', $id ) ) { ?>
                                    <?php while ( have_rows( 'vacancy-duties', $id ) ) { the_row(); ?>
                                        <p class="items__item"><?php the_sub_field( 'duties', $id ); ?></p>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="accordion__info">
                            <p class="info__title">Мы предлагаем</p>
                            <div class="info__items">
                                <?php if ( have_rows( 'vacancy-proposal', $id ) ) { ?>
                                    <?php while ( have_rows( 'vacancy-proposal', $id ) ) { the_row(); ?>
                                        <p class="items__item"><?php the_sub_field( 'proposal', $id ); ?></p>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="accordion__resume">
                            <p></p>
                            <a class="resume__request default-border-button blue-border" href="#">ОТПРАВИТЬ ОТКЛИК</a>
                        </div>
                    </div>
                    <div class="accordion__hidden">
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="26.5" x2="26.5" y2="52" stroke="#1126B6"/>
                            <line y1="25.5" x2="52" y2="25.5" stroke="#1126B6"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>