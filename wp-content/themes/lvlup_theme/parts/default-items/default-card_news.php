<?php $id = $args['id']; ?>

<a class="items__item" href="#" data-id="<?php echo $id; ?>">
    <p class="item__date"><?php echo get_the_time('d.m.Y', $id); ?></p>
    <div class="item__image">
        <?php if (get_the_post_thumbnail($id)) { ?>
            <?php echo get_the_post_thumbnail($id); ?>
        <?php } else { ?>
            <img src="/">
        <?php } ?>
    </div>
    <div class="item__info">
        <p class="info__title"><?php echo get_the_title($id); ?></p>
        <p class="info__description"><?php echo get_the_excerpt($id); ?></p>
    </div>

    <div class="item__icon">
        <svg width="141" height="51" viewBox="0 0 141 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M36.4654 0.078411L35.25 0.972626L52.9322 24.5074L54.1477 23.6132L36.4654 0.078411Z" fill="white"/>
            <path d="M52.9239 26.5648L35.25 50.1056L36.4658 50.9994L54.1397 27.4586L52.9239 26.5648Z" fill="white"/>
            <path d="M52.8248 7.24123e-05L51.6094 0.894287L69.2916 24.429L70.5071 23.5348L52.8248 7.24123e-05Z" fill="white"/>
            <path d="M69.2833 26.4885L51.6094 50.0293L52.8251 50.9231L70.4991 27.3823L69.2833 26.4885Z" fill="white"/>
            <path d="M1.21544 0.0783805L0 0.972595L17.6822 24.5073L18.8977 23.6131L1.21544 0.0783805Z" fill="white"/>
            <path d="M17.6739 26.5648L0 50.1056L1.21575 50.9994L18.8897 27.4585L17.6739 26.5648Z" fill="white"/>
            <path d="M17.567 7.24123e-05L16.3516 0.894287L34.0338 24.429L35.2492 23.5348L17.567 7.24123e-05Z" fill="white"/>
            <path d="M34.0255 26.4885L16.3516 50.0293L17.5673 50.9231L35.2412 27.3823L34.0255 26.4885Z" fill="white"/>
            <path d="M71.7154 0.0783805L70.5 0.972595L88.1822 24.5073L89.3977 23.6131L71.7154 0.0783805Z" fill="white"/>
            <path d="M88.1739 26.5667L70.5 50.1075L71.7158 51.0013L89.3897 27.4605L88.1739 26.5667Z" fill="white"/>
            <path d="M88.0748 7.24123e-05L86.8594 0.894287L104.542 24.429L105.757 23.5348L88.0748 7.24123e-05Z" fill="white"/>
            <path d="M104.533 26.4904L86.8594 50.0312L88.0751 50.925L105.749 27.3842L104.533 26.4904Z" fill="white"/>
            <path d="M106.965 0.0783805L105.75 0.972595L123.432 24.5073L124.648 23.6131L106.965 0.0783805Z" fill="white"/>
            <path d="M123.424 26.5667L105.75 50.1075L106.966 51.0013L124.64 27.4605L123.424 26.5667Z" fill="white"/>
            <path d="M123.317 7.24123e-05L122.102 0.894287L139.784 24.429L140.999 23.5348L123.317 7.24123e-05Z" fill="white"/>
            <path d="M139.775 26.4904L122.102 50.0312L123.317 50.925L140.991 27.3842L139.775 26.4904Z" fill="white"/>
        </svg>
    </div>
</a>
