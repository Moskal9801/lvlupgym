<?php $id = $args['id']; ?>

<div class="swiper-slide coaches-more" data-id="<?php echo $id?>">
    <div class="slide-image">
        <?php if (get_the_post_thumbnail($id)) { ?>
            <?php echo get_the_post_thumbnail($id); ?>
            <img class="black-photo" src="<?php the_field( 'image-black' ); ?>" />
        <?php } else { ?>
            <img src="/wp-content/themes/lvlup_theme/assets/images/plug-coaches.png">
        <?php } ?>
    </div>
    <p class="slide-title"><?php echo get_the_title($id); ?></p>
    <p class="slide-post"><?php the_field( 'post', $id ); ?></p>
</div>
