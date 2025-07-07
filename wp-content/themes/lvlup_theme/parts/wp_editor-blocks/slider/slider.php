<?php

	/**
	 * Testimonial Block Template.
	 *
	 * @param   array $block The block settings and attributes.
	 * @param   string $content The block inner HTML (empty).
	 * @param   bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */

	// Create id attribute allowing for custom "anchor" value.
	$id = 'slider-' . $block['id'];
	if ( ! empty($block['anchor'] ) ) {
		$id = $block['anchor'];
	}

	// Create class attribute allowing for custom "className" and "align" values.
	$classes = 'block-slider';
	if ( ! empty( $block['className'] ) ) {
		$classes .= ' ' . $block['className'];
	}
	if ( ! empty( $block['align'] ) ) {
		$classes .= ' align' . $block['align'];
	}

	// Load values and assing defaults.
	$slides = get_field('swiper-slider') ?: 'Добавьте изображения';
?>


<?php if ( $slides ) :  ?>
    <div class="swiper-acf-block-default--wrap">
        <div id="<?= esc_attr($id); ?>" class="swiper swiper-acf-block-default">
            <div class="swiper-wrapper">
				<?php foreach ( $slides as $slide ): ?>
                    <div class="swiper-slide">
                        <a href="<?= wp_get_attachment_url( $slide); ?>" data-fancybox="slider-<?= esc_attr($id); ?>">
							<?= wp_get_attachment_image( $slide, 'full', false ); ?>
                        </a>
                    </div>
				<?php endforeach; ?>
            </div>
            <div class="swiper-acf-block-default--navigation">
                <div class="slider-btn prev">
                    <svg width="18" height="52" viewBox="0 0 18 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.2079 1.44224e-05L17.9297 1.04785L1.7945 25.5636L0.072678 24.5158L16.2079 1.44224e-05Z" fill="white"/>
                        <path d="M1.71539 26.5204L18 50.9421L16.2846 51.9999L1.06382e-06 27.5782L1.71539 26.5204Z" fill="white"/>
                    </svg>
                </div>
                <div class="slider-btn next">
                    <svg width="18" height="52" viewBox="0 0 18 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.79213 1.44224e-05L0.0703125 1.04785L16.2055 25.5636L17.9273 24.5158L1.79213 1.44224e-05Z" fill="white"/>
                        <path d="M16.2846 26.5204L0 50.9421L1.71539 51.9999L18 27.5782L16.2846 26.5204Z" fill="white"/>
                    </svg>
                </div>
            </div>
            <div class="swiper-acf-block-default--pagination"></div>
        </div>
    </div>
<?php endif; ?>