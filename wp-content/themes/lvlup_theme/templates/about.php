<?php /* Template name: О клубе */

get_header(); ?>

<h1 class="for-title">LVLUP | О фитнес-клубе</h1>

<?php get_template_part( 'parts/default-items/default', 'banner' ); ?>

<?php if ( have_rows( 'concept' ) ) { ?>
    <?php while ( have_rows( 'concept' ) ) { the_row(); ?>
        <section class="about-page__concept">
            <div class="container">
                <div class="concept__body">
                    <div class="body__arrows" data-sal="slide-up" data-sal-duration="1500">
                        <svg width="52" height="598" viewBox="0 0 52 598" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.00032 595.92L1.89453 597.137L25.4293 579.428L24.5351 578.211L1.00032 595.92Z" fill="#6A6662"/>
                            <path d="M27.4865 579.436L51.0273 597.136L51.9211 595.919L28.3803 578.218L27.4865 579.436Z" fill="#6A6662"/>
                            <path d="M1.07844 541.693L1.97266 542.91L25.5074 525.201L24.6132 523.984L1.07844 541.693Z" fill="#6A6662"/>
                            <path d="M27.5646 525.209L51.1055 542.909L51.9993 541.692L28.4584 523.991L27.5646 525.209Z" fill="#6A6662"/>
                            <path d="M1.00032 525.315L1.89453 526.532L25.4293 508.823L24.5351 507.606L1.00032 525.315Z" fill="#6A6662"/>
                            <path d="M27.4865 508.83L51.0273 526.531L51.9211 525.314L28.3803 507.613L27.4865 508.83Z" fill="#6A6662"/>
                            <path d="M1.07844 576.995L1.97266 578.213L25.5074 560.504L24.6132 559.286L1.07844 576.995Z" fill="#6A6662"/>
                            <path d="M27.5646 560.511L51.1055 578.212L51.9993 576.994L28.4584 559.293L27.5646 560.511Z" fill="#6A6662"/>
                            <path d="M1.00032 560.617L1.89453 561.834L25.4293 544.125L24.5351 542.908L1.00032 560.617Z" fill="#6A6662"/>
                            <path d="M27.4865 544.133L51.0273 561.833L51.9211 560.616L28.3803 542.915L27.4865 544.133Z" fill="#6A6662"/>
                            <path d="M1.07844 506.39L1.97266 507.607L25.5074 489.898L24.6132 488.681L1.07844 506.39Z" fill="#6A6662"/>
                            <path d="M27.5646 489.906L51.1055 507.606L51.9993 506.389L28.4584 488.688L27.5646 489.906Z" fill="#6A6662"/>
                            <path d="M1.00032 490.012L1.89453 491.229L25.4293 473.52L24.5351 472.303L1.00032 490.012Z" fill="#6A6662"/>
                            <path d="M27.4904 473.527L51.0312 491.228L51.925 490.01L28.3842 472.31L27.4904 473.527Z" fill="#6A6662"/>
                            <path d="M1.07844 471.087L1.97266 472.305L25.5074 454.596L24.6132 453.378L1.07844 471.087Z" fill="#6A6662"/>
                            <path d="M27.5646 454.603L51.1055 472.304L51.9993 471.086L28.4584 453.385L27.5646 454.603Z" fill="#6A6662"/>
                            <path d="M1.00032 454.709L1.89453 455.926L25.4293 438.217L24.5351 437L1.00032 454.709Z" fill="#6A6662"/>
                            <path d="M27.4904 438.224L51.0312 455.925L51.925 454.707L28.3842 437.007L27.4904 438.224Z" fill="#6A6662"/>
                            <path d="M0.0784416 246.693L0.972656 247.91L24.5074 230.201L23.6132 228.984L0.0784416 246.693Z" fill="#6A6662"/>
                            <path d="M26.5646 230.209L50.1055 247.909L50.9993 246.692L27.4584 228.991L26.5646 230.209Z" fill="#6A6662"/>
                            <path d="M0.000316624 230.315L0.894531 231.532L24.4293 213.823L23.5351 212.606L0.000316624 230.315Z" fill="#6A6662"/>
                            <path d="M26.4865 213.83L50.0273 231.531L50.9211 230.314L27.3803 212.613L26.4865 213.83Z" fill="#6A6662"/>
                            <path d="M0.0784416 281.995L0.972656 283.213L24.5074 265.504L23.6132 264.286L0.0784416 281.995Z" fill="#6A6662"/>
                            <path d="M26.5646 265.511L50.1055 283.212L50.9993 281.994L27.4584 264.293L26.5646 265.511Z" fill="#6A6662"/>
                            <path d="M0.000316624 265.617L0.894531 266.834L24.4293 249.125L23.5351 247.908L0.000316624 265.617Z" fill="#6A6662"/>
                            <path d="M26.4865 249.133L50.0273 266.833L50.9211 265.616L27.3803 247.915L26.4865 249.133Z" fill="#6A6662"/>
                            <path d="M0.0784416 211.39L0.972656 212.607L24.5074 194.898L23.6132 193.681L0.0784416 211.39Z" fill="#6A6662"/>
                            <path d="M26.5646 194.906L50.1055 212.606L50.9993 211.389L27.4584 193.688L26.5646 194.906Z" fill="#6A6662"/>
                            <path d="M0.000316624 195.012L0.894531 196.229L24.4293 178.52L23.5351 177.303L0.000316624 195.012Z" fill="#6A6662"/>
                            <path d="M26.4904 178.527L50.0312 196.228L50.925 195.01L27.3842 177.31L26.4904 178.527Z" fill="#6A6662"/>
                            <path d="M0.0784416 176.087L0.972656 177.305L24.5074 159.596L23.6132 158.378L0.0784416 176.087Z" fill="#6A6662"/>
                            <path d="M26.5646 159.603L50.1055 177.304L50.9993 176.086L27.4584 158.385L26.5646 159.603Z" fill="#6A6662"/>
                            <path d="M0.000316624 159.709L0.894531 160.926L24.4293 143.217L23.5351 142L0.000316624 159.709Z" fill="#6A6662"/>
                            <path d="M26.4904 143.224L50.0312 160.925L50.925 159.707L27.3842 142.007L26.4904 143.224Z" fill="#6A6662"/>
                            <path d="M0.0784416 104.693L0.972656 105.91L24.5074 88.2014L23.6132 86.9841L0.0784416 104.693Z" fill="#6A6662"/>
                            <path d="M26.5646 88.2087L50.1055 105.909L50.9993 104.692L27.4584 86.9911L26.5646 88.2087Z" fill="#6A6662"/>
                            <path d="M0.000316624 88.3148L0.894531 89.5321L24.4293 71.8231L23.5351 70.6058L0.000316624 88.3148Z" fill="#6A6662"/>
                            <path d="M26.4865 71.8304L50.0273 89.5311L50.9211 88.3135L27.3803 70.6128L26.4865 71.8304Z" fill="#6A6662"/>
                            <path d="M0.0784416 139.995L0.972656 141.213L24.5074 123.504L23.6132 122.286L0.0784416 139.995Z" fill="#6A6662"/>
                            <path d="M26.5646 123.511L50.1055 141.212L50.9993 139.994L27.4584 122.293L26.5646 123.511Z" fill="#6A6662"/>
                            <path d="M0.000316624 123.617L0.894531 124.834L24.4293 107.125L23.5351 105.908L0.000316624 123.617Z" fill="#6A6662"/>
                            <path d="M26.4865 107.133L50.0273 124.833L50.9211 123.616L27.3803 105.915L26.4865 107.133Z" fill="#6A6662"/>
                            <path d="M0.0784416 69.3901L0.972656 70.6074L24.5074 52.8984L23.6132 51.6811L0.0784416 69.3901Z" fill="#6A6662"/>
                            <path d="M26.5646 52.9058L50.1055 70.6064L50.9993 69.3889L27.4584 51.6882L26.5646 52.9058Z" fill="#6A6662"/>
                            <path d="M0.000316624 53.0118L0.894531 54.2291L24.4293 36.5201L23.5351 35.3028L0.000316624 53.0118Z" fill="#6A6662"/>
                            <path d="M26.4904 36.5272L50.0312 54.2279L50.925 53.0103L27.3842 35.3096L26.4904 36.5272Z" fill="#6A6662"/>
                            <path d="M0.0784416 34.0873L0.972656 35.3046L24.5074 17.5955L23.6132 16.3783L0.0784416 34.0873Z" fill="#6A6662"/>
                            <path d="M26.5646 17.6029L50.1055 35.3036L50.9993 34.086L27.4584 16.3853L26.5646 17.6029Z" fill="#6A6662"/>
                            <path d="M0.000316624 17.709L0.894531 18.9263L24.4293 1.21725L23.5351 -2.96476e-05L0.000316624 17.709Z" fill="#6A6662"/>
                            <path d="M26.4904 1.22436L50.0312 18.925L50.925 17.7075L27.3842 0.00676352L26.4904 1.22436Z" fill="#6A6662"/>
                            <path d="M1.07844 400.693L1.97266 401.91L25.5074 384.201L24.6132 382.984L1.07844 400.693Z" fill="#6A6662"/>
                            <path d="M27.5646 384.209L51.1055 401.909L51.9993 400.692L28.4584 382.991L27.5646 384.209Z" fill="#6A6662"/>
                            <path d="M1.00032 384.315L1.89453 385.532L25.4293 367.823L24.5351 366.606L1.00032 384.315Z" fill="#6A6662"/>
                            <path d="M27.4865 367.83L51.0273 385.531L51.9211 384.314L28.3803 366.613L27.4865 367.83Z" fill="#6A6662"/>
                            <path d="M1.07844 435.995L1.97266 437.213L25.5074 419.504L24.6132 418.286L1.07844 435.995Z" fill="#6A6662"/>
                            <path d="M27.5646 419.511L51.1055 437.212L51.9993 435.994L28.4584 418.293L27.5646 419.511Z" fill="#6A6662"/>
                            <path d="M1.00032 419.617L1.89453 420.834L25.4293 403.125L24.5351 401.908L1.00032 419.617Z" fill="#6A6662"/>
                            <path d="M27.4865 403.133L51.0273 420.833L51.9211 419.616L28.3803 401.915L27.4865 403.133Z" fill="#6A6662"/>
                            <path d="M1.07844 365.39L1.97266 366.607L25.5074 348.898L24.6132 347.681L1.07844 365.39Z" fill="#6A6662"/>
                            <path d="M27.5646 348.906L51.1055 366.606L51.9993 365.389L28.4584 347.688L27.5646 348.906Z" fill="#6A6662"/>
                            <path d="M1.00032 349.012L1.89453 350.229L25.4293 332.52L24.5351 331.303L1.00032 349.012Z" fill="#6A6662"/>
                            <path d="M27.4904 332.527L51.0312 350.228L51.925 349.01L28.3842 331.31L27.4904 332.527Z" fill="#6A6662"/>
                            <path d="M1.07844 330.087L1.97266 331.305L25.5074 313.596L24.6132 312.378L1.07844 330.087Z" fill="#6A6662"/>
                            <path d="M27.5646 313.603L51.1055 331.304L51.9993 330.086L28.4584 312.385L27.5646 313.603Z" fill="#6A6662"/>
                            <path d="M1.00032 313.709L1.89453 314.926L25.4293 297.217L24.5351 296L1.00032 313.709Z" fill="#6A6662"/>
                            <path d="M27.4904 297.224L51.0312 314.925L51.925 313.707L28.3842 296.007L27.4904 297.224Z" fill="#6A6662"/>
                        </svg>
                    </div>

                    <div class="body__title">
                        <h4><?php the_sub_field( 'concept-title' ); ?></h4>
                        <p><?php the_sub_field( 'concept-description' ); ?></p>
                    </div>
                    <?php if ( have_rows( 'concept-items' ) ) { ?>
                        <div class="body__items">
                            <?php while ( have_rows( 'concept-items' ) ) { the_row(); ?>
                                <div class="items__item">
                                    <?php if (get_sub_field( 'items-description' )) { ?>
                                        <p><?php the_sub_field( 'items-description' ); ?></p>
                                    <?php } else { ?>
                                        <img src="<?php the_sub_field( 'items-image' ); ?>" />
                                        <img class="glitch-for-image" src="<?php the_sub_field( 'items-image' ); ?>" />
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <script>
                document.addEventListener( 'DOMContentLoaded', function () {
                    let conceptSection = document.querySelector('.about-page__concept'),
                        conceptContainer = conceptSection.querySelector('.container');

                    let arrrowIcon = conceptSection.querySelector('.body__arrows'),
                        paddingOffsetConceptContainer,
                        bottomOffsetArrow;

                    if (window.outerWidth <= 1024) {
                        paddingOffsetConceptContainer = 50;
                        bottomOffsetArrow = 30;
                    } else if (window.outerWidth <= 1280) {
                        paddingOffsetConceptContainer = 60;
                        bottomOffsetArrow = 35;
                    } else if (window.outerWidth <= 1600) {
                        paddingOffsetConceptContainer = 80;
                        bottomOffsetArrow = 45;
                    } else {
                        paddingOffsetConceptContainer = 100;
                        bottomOffsetArrow = 85;
                    }

                    arrrowIcon.style.top = -paddingOffsetConceptContainer - arrrowIcon.getBoundingClientRect().height + bottomOffsetArrow + 'px';


                    let imageAnimate = conceptSection.querySelectorAll('.glitch-for-image');

                    function startRandomAnimation() {
                        const randomElement = imageAnimate[Math.floor(Math.random() * imageAnimate.length)];

                        randomElement.classList.add('animate');

                        setTimeout(() => {
                            randomElement.classList.remove('animate');
                        }, 3000);
                    }

                    setInterval(startRandomAnimation, 3000);
                });
            </script>
        </section>
    <?php } ?>
<?php } ?>

<?php get_template_part( 'parts/default-items/default', 'slider' ); ?>

<div class="about-page__background">
    <!--<div class="background__desktop" style="background-image: url('/wp-content/themes/lvlup_theme/assets/media-file/background-image-desktop.png')"></div>
    <div class="background__mobile" style="background-image: url('/wp-content/themes/lvlup_theme/assets/media-file/background-image-mobile.png')"></div>-->

    <div class="background__desktop">
        <svg viewBox="0 0 1920 505" preserveAspectRatio="xMinYMid slice">
            <g class="bottom-line">
                <path d="M83.5465 153.363H41.5342V505H83.5465V153.363Z" fill="#1126B6"/>
                <path d="M166.972 153.363H124.96V505H166.972V153.363Z" fill="#1126B6"/>
                <path d="M250.518 153.363H208.506V505H250.518V153.363Z" fill="#1126B6"/>
                <path d="M333.944 153.363H291.932V505H333.944V153.363Z" fill="#1126B6"/>
                <path d="M417.491 153.363H375.479V505H417.491V153.363Z" fill="#1126B6"/>
                <path d="M500.917 153.363H458.904V505H500.917V153.363Z" fill="#1126B6"/>
                <path d="M584.342 153.363H542.33V505H584.342V153.363Z" fill="#1126B6"/>
                <path d="M667.888 153.363H625.876V505H667.888V153.363Z" fill="#1126B6"/>
                <path d="M751.315 153.363H709.303V505H751.315V153.363Z" fill="#1126B6"/>
                <path d="M834.86 153.363H792.848V505H834.86V153.363Z" fill="#1126B6"/>
                <path d="M918.287 153.363H876.274V505H918.287V153.363Z" fill="#1126B6"/>
                <path d="M1001.71 153.363H959.7V505H1001.71V153.363Z" fill="#1126B6"/>
                <path d="M1085.26 153.363H1043.25V505H1085.26V153.363Z" fill="#1126B6"/>
                <path d="M1168.69 153.363H1126.67V505H1168.69V153.363Z" fill="#1126B6"/>
                <path d="M1252.23 153.363H1210.22V505H1252.23V153.363Z" fill="#1126B6"/>
                <path d="M1335.66 153.363H1293.64V505H1335.66V153.363Z" fill="#1126B6"/>
                <path d="M1419.08 153.363H1377.07V505H1419.08V153.363Z" fill="#1126B6"/>
                <path d="M1502.63 153.363H1460.62V505H1502.63V153.363Z" fill="#1126B6"/>
                <path d="M1586.06 153.363H1544.04V505H1586.06V153.363Z" fill="#1126B6"/>
                <path d="M1669.6 153.363H1627.59V505H1669.6V153.363Z" fill="#1126B6"/>
                <path d="M1753.03 153.363H1711.02V505H1753.03V153.363Z" fill="#1126B6"/>
                <path d="M1836.45 153.363H1794.44V505H1836.45V153.363Z" fill="#1126B6"/>
                <path d="M1920 153.363H1877.99V505H1920V153.363Z" fill="#1126B6"/>
            </g>

            <g class="middle-line">
                <path d="M42.0123 38.4243H0V153.363H42.0123V38.4243Z" fill="#1126B6"/>
                <path d="M125.439 38.4243H83.4268V153.363H125.439V38.4243Z" fill="#1126B6"/>
                <path d="M208.865 38.4243H166.853V153.363H208.865V38.4243Z" fill="#1126B6"/>
                <path d="M292.411 38.4243H250.398V153.363H292.411V38.4243Z" fill="#1126B6"/>
                <path d="M375.837 38.4243H333.824V153.363H375.837V38.4243Z" fill="#1126B6"/>
                <path d="M459.383 38.4243H417.371V153.363H459.383V38.4243Z" fill="#1126B6"/>
                <path d="M542.809 38.4243H500.797V153.363H542.809V38.4243Z" fill="#1126B6"/>
                <path d="M626.235 38.4243H584.223V153.363H626.235V38.4243Z" fill="#1126B6"/>
                <path d="M709.781 38.4243H667.769V153.363H709.781V38.4243Z" fill="#1126B6"/>
                <path d="M793.208 38.4243H751.195V153.363H793.208V38.4243Z" fill="#1126B6"/>
                <path d="M876.754 38.4243H834.741V153.363H876.754V38.4243Z" fill="#1126B6"/>
                <path d="M960.179 38.4243H918.167V153.363H960.179V38.4243Z" fill="#1126B6"/>
                <path d="M1043.61 38.4243H1001.59V153.363H1043.61V38.4243Z" fill="#1126B6"/>
                <path d="M1127.15 38.4243H1085.14V153.363H1127.15V38.4243Z" fill="#1126B6"/>
                <path d="M1210.58 38.4243H1168.57V153.363H1210.58V38.4243Z" fill="#1126B6"/>
                <path d="M1294.12 38.4243H1252.11V153.363H1294.12V38.4243Z" fill="#1126B6"/>
                <path d="M1377.55 38.4243H1335.54V153.363H1377.55V38.4243Z" fill="#1126B6"/>
                <path d="M1461.1 38.4243H1419.08V153.363H1461.1V38.4243Z" fill="#1126B6"/>
                <path d="M1544.52 38.4243H1502.51V153.363H1544.52V38.4243Z" fill="#1126B6"/>
                <path d="M1627.95 38.4243H1585.94V153.363H1627.95V38.4243Z" fill="#1126B6"/>
                <path d="M1711.49 38.4243H1669.48V153.363H1711.49V38.4243Z" fill="#1126B6"/>
                <path d="M1794.92 38.4243H1752.91V153.363H1794.92V38.4243Z" fill="#1126B6"/>
                <path d="M1878.47 38.4243H1836.45V153.363H1878.47V38.4243Z" fill="#1126B6"/>
            </g>

            <g class="top-line">
                <path d="M94.5014 12.9073L17.8594 0.0380859L12.3631 10.887L89.005 23.7562L94.5014 12.9073Z" fill="#1126B6"/>
                <path d="M177.449 12.9078L100.807 0.0385742L95.3103 10.8874L171.952 23.7567L177.449 12.9078Z" fill="#1126B6"/>
                <path d="M260.282 12.8883L183.64 0.019043L178.143 10.8679L254.785 23.7372L260.282 12.8883Z" fill="#1126B6"/>
                <path d="M343.23 12.8883L266.588 0.019043L261.092 10.8679L337.734 23.7372L343.23 12.8883Z" fill="#1126B6"/>
                <path d="M426.178 12.8883L349.536 0.019043L344.04 10.8679L420.682 23.7372L426.178 12.8883Z" fill="#1126B6"/>
                <path d="M509.125 12.8883L432.483 0.019043L426.987 10.8679L503.629 23.7372L509.125 12.8883Z" fill="#1126B6"/>
                <path d="M592.074 12.8883L515.432 0.019043L509.935 10.8679L586.577 23.7372L592.074 12.8883Z" fill="#1126B6"/>
                <path d="M675.021 12.8883L598.379 0.019043L592.883 10.8679L669.525 23.7372L675.021 12.8883Z" fill="#1126B6"/>
                <path d="M757.969 12.8883L681.327 0.019043L675.831 10.8679L752.473 23.7372L757.969 12.8883Z" fill="#1126B6"/>
                <path d="M840.917 12.8883L764.275 0.019043L758.779 10.8679L835.421 23.7372L840.917 12.8883Z" fill="#1126B6"/>
                <path d="M923.865 12.8883L847.223 0.019043L841.726 10.8679L918.368 23.7372L923.865 12.8883Z" fill="#1126B6"/>
                <path d="M1006.81 12.8888L930.171 0.0195312L924.675 10.8684L1001.32 23.7376L1006.81 12.8888Z" fill="#1126B6"/>
                <path d="M1089.76 12.8888L1013.12 0.0195312L1007.62 10.8684L1084.26 23.7376L1089.76 12.8888Z" fill="#1126B6"/>
                <path d="M1172.59 12.8692L1095.95 0L1090.45 10.8489L1167.1 23.7181L1172.59 12.8692Z" fill="#1126B6"/>
                <path d="M1255.54 12.8692L1178.9 0L1173.4 10.8489L1250.05 23.7181L1255.54 12.8692Z" fill="#1126B6"/>
                <path d="M1338.49 12.8693L1261.85 0L1256.35 10.8489L1332.99 23.7181L1338.49 12.8693Z" fill="#1126B6"/>
                <path d="M1421.44 12.8692L1344.79 0L1339.3 10.8489L1415.94 23.7181L1421.44 12.8692Z" fill="#1126B6"/>
                <path d="M1504.39 12.8693L1427.74 0L1422.25 10.8489L1498.89 23.7181L1504.39 12.8693Z" fill="#1126B6"/>
                <path d="M1587.33 12.8692L1510.69 0L1505.2 10.8489L1581.84 23.7181L1587.33 12.8692Z" fill="#1126B6"/>
                <path d="M1670.28 12.8692L1593.64 0L1588.14 10.8489L1664.78 23.7181L1670.28 12.8692Z" fill="#1126B6"/>
                <path d="M1753.23 12.8693L1676.59 0L1671.09 10.8489L1747.73 23.7181L1753.23 12.8693Z" fill="#1126B6"/>
                <path d="M1836.18 12.8697L1759.53 0.000488281L1754.04 10.8494L1830.68 23.7186L1836.18 12.8697Z" fill="#1126B6"/>
                <path d="M1919.12 12.8698L1842.48 0.000488281L1836.99 10.8494L1913.63 23.7186L1919.12 12.8698Z" fill="#1126B6"/>
            </g>
        </svg>
    </div>
</div>

<?php if ( have_rows( 'coaches' ) ) { ?>
    <?php while ( have_rows( 'coaches' ) ) { the_row(); ?>
        <section class="about-page__coaches" id="coaches-anchor">
            <div class="container">
                <div class="coaches__background">
                    <svg width="51" height="388" viewBox="0 0 51 388" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0782917 245.939L0.972595 247.157L24.5086 229.447L23.6143 228.229L0.0782917 245.939Z" fill="#6A6662"/>
                        <path d="M26.5654 229.454L50.1075 247.156L51.0014 245.938L27.4593 228.236L26.5654 229.454Z" fill="#6A6662"/>
                        <path d="M-1.63708e-05 229.559L0.894287 230.776L24.4303 213.066L23.536 211.849L-1.63708e-05 229.559Z" fill="#6A6662"/>
                        <path d="M26.4891 213.073L50.0312 230.775L50.9251 229.557L27.383 211.856L26.4891 213.073Z" fill="#6A6662"/>
                        <path d="M0.0782917 175.323L0.972595 176.541L24.5086 158.831L23.6143 157.613L0.0782917 175.323Z" fill="#6A6662"/>
                        <path d="M26.5654 158.838L50.1075 176.539L51.0014 175.322L27.4593 157.62L26.5654 158.838Z" fill="#6A6662"/>
                        <path d="M-1.63708e-05 158.943L0.894287 160.16L24.4303 142.45L23.536 141.233L-1.63708e-05 158.943Z" fill="#6A6662"/>
                        <path d="M26.4891 142.457L50.0312 160.159L50.9251 158.941L27.383 141.239L26.4891 142.457Z" fill="#6A6662"/>
                        <path d="M0.0782917 104.707L0.972595 105.925L24.5086 88.2146L23.6143 86.9972L0.0782917 104.707Z" fill="#6A6662"/>
                        <path d="M26.5654 88.2217L50.1075 105.923L51.0014 104.706L27.4593 87.0039L26.5654 88.2217Z" fill="#6A6662"/>
                        <path d="M-1.63708e-05 88.3263L0.894287 89.5437L24.4303 71.8337L23.536 70.6163L-1.63708e-05 88.3263Z" fill="#6A6662"/>
                        <path d="M26.4891 71.8408L50.0312 89.5425L50.9251 88.3248L27.383 70.6231L26.4891 71.8408Z" fill="#6A6662"/>
                        <path d="M0.0782917 210.631L0.972595 211.849L24.5086 194.139L23.6143 192.921L0.0782917 210.631Z" fill="#6A6662"/>
                        <path d="M26.5654 194.146L50.1075 211.848L51.0014 210.63L27.4593 192.929L26.5654 194.146Z" fill="#6A6662"/>
                        <path d="M-1.63708e-05 194.251L0.894287 195.468L24.4303 177.758L23.536 176.541L-1.63708e-05 194.251Z" fill="#6A6662"/>
                        <path d="M26.4891 177.765L50.0312 195.467L50.9251 194.249L27.383 176.547L26.4891 177.765Z" fill="#6A6662"/>
                        <path d="M0.0782917 281.247L0.972595 282.465L24.5086 264.755L23.6143 263.537L0.0782917 281.247Z" fill="#6A6662"/>
                        <path d="M26.5654 264.762L50.1075 282.464L51.0014 281.246L27.4593 263.544L26.5654 264.762Z" fill="#6A6662"/>
                        <path d="M-1.63708e-05 264.867L0.894287 266.084L24.4303 248.374L23.536 247.157L-1.63708e-05 264.867Z" fill="#6A6662"/>
                        <path d="M26.4891 248.381L50.0312 266.083L50.9251 264.865L27.383 247.164L26.4891 248.381Z" fill="#6A6662"/>
                        <path d="M0.0782917 140.015L0.972595 141.233L24.5086 123.523L23.6143 122.305L0.0782917 140.015Z" fill="#6A6662"/>
                        <path d="M26.5654 123.53L50.1075 141.231L51.0014 140.013L27.4593 122.312L26.5654 123.53Z" fill="#6A6662"/>
                        <path d="M-1.63708e-05 123.634L0.894287 124.852L24.4303 107.142L23.536 105.924L-1.63708e-05 123.634Z" fill="#6A6662"/>
                        <path d="M26.4891 107.149L50.0312 124.851L50.9251 123.633L27.383 105.931L26.4891 107.149Z" fill="#6A6662"/>
                        <path d="M0.0782917 69.3991L0.972595 70.6165L24.5086 52.9065L23.6143 51.6891L0.0782917 69.3991Z" fill="#6A6662"/>
                        <path d="M26.5654 52.9138L50.1075 70.6155L51.0014 69.3978L27.4593 51.6961L26.5654 52.9138Z" fill="#6A6662"/>
                        <path d="M-1.63708e-05 53.0182L0.894287 54.2356L24.4303 36.5256L23.536 35.3082L-1.63708e-05 53.0182Z" fill="#6A6662"/>
                        <path d="M26.4891 36.5327L50.0312 54.2344L50.9251 53.0167L27.383 35.315L26.4891 36.5327Z" fill="#6A6662"/>
                        <path d="M0.0782917 34.0907L0.972595 35.3081L24.5086 17.5981L23.6143 16.3807L0.0782917 34.0907Z" fill="#6A6662"/>
                        <path d="M26.5654 17.6055L50.1075 35.3071L51.0014 34.0894L27.4593 16.3877L26.5654 17.6055Z" fill="#6A6662"/>
                        <path d="M-1.63708e-05 17.7098L0.894287 18.9272L24.4303 1.21725L23.536 -0.00015227L-1.63708e-05 17.7098Z" fill="#6A6662"/>
                        <path d="M26.4891 1.22436L50.0312 18.926L50.9251 17.7083L27.383 0.00664122L26.4891 1.22436Z" fill="#6A6662"/>
                        <path d="M0.0783806 386.693L0.972595 387.91L24.5073 370.201L23.6131 368.984L0.0783806 386.693Z" fill="#6A6662"/>
                        <path d="M26.5667 370.208L50.1075 387.909L51.0013 386.691L27.4605 368.991L26.5667 370.208Z" fill="#6A6662"/>
                        <path d="M7.24834e-05 370.314L0.894287 371.532L24.429 353.823L23.5348 352.605L7.24834e-05 370.314Z" fill="#6A6662"/>
                        <path d="M26.4904 353.83L50.0312 371.531L50.925 370.313L27.3842 352.612L26.4904 353.83Z" fill="#6A6662"/>
                        <path d="M0.0783806 351.39L0.972595 352.607L24.5073 334.898L23.6131 333.681L0.0783806 351.39Z" fill="#6A6662"/>
                        <path d="M26.5667 334.906L50.1075 352.606L51.0013 351.389L27.4605 333.688L26.5667 334.906Z" fill="#6A6662"/>
                        <path d="M7.24834e-05 335.012L0.894287 336.229L24.429 318.52L23.5348 317.303L7.24834e-05 335.012Z" fill="#6A6662"/>
                        <path d="M26.4904 318.527L50.0312 336.228L50.925 335.01L27.3842 317.31L26.4904 318.527Z" fill="#6A6662"/>
                        <path d="M0.0783806 316.087L0.972595 317.305L24.5073 299.596L23.6131 298.378L0.0783806 316.087Z" fill="#6A6662"/>
                        <path d="M26.5667 299.603L50.1075 317.304L51.0013 316.086L27.4605 298.385L26.5667 299.603Z" fill="#6A6662"/>
                        <path d="M7.24834e-05 299.709L0.894287 300.926L24.429 283.217L23.5348 282L7.24834e-05 299.709Z" fill="#6A6662"/>
                        <path d="M26.4904 283.224L50.0312 300.925L50.925 299.707L27.3842 282.007L26.4904 283.224Z" fill="#6A6662"/>
                    </svg>
                </div>

                <div class="coaches__body">
                    <div class="body__title">
                        <h4><?php the_sub_field( 'coaches-title' ); ?></h4>
                        <p><?php the_sub_field( 'coaches-description' ); ?></p>
                    </div>
                    <div class="body__items parent-swiper-coaches">
                        <div class="swiper swiper-coaches">
                            <div class="swiper-category">
                                <?php $categories = get_terms( [
                                    'post_type' => 'coaches',
                                    'taxonomy' => 'category-coaches',
                                    'hide_empty' => false,
                                ] ); ?>

                                <a class="category__item active" href="#" data-post="coaches" data-slug="all">Все</a>

                                <?php foreach ( $categories as $category ) { ?>
                                    <a class="category__item" href="#" data-post="coaches" data-slug="<?php echo $category->slug?>"><?php echo $category->name?></a>
                                <?php } ?>
                            </div>

                            <div class="swiper-wrapper">
                                <?php $args = [
                                    'post_type' => 'coaches',
                                    'post_status' => 'publish',
                                    'order'       => 'DESC',
                                ]; $query = new WP_Query( $args ); ?>

                                <?php if ( $query->have_posts() ) { ?>

                                    <?php while ( $query->have_posts() ) { ?>

                                        <?php $query->the_post(); ?>

                                        <?php $params = [ 'id' => get_the_ID() ] ?>

                                        <?php get_template_part('parts/default-items/default', 'coaches', $params); ?>

                                    <?php } ?>

                                    <?php wp_reset_postdata(); ?>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="swiper-coaches-manage">
                            <div class="swiper-navigation">
                                <svg class="swiper-prev" width="18" height="53" viewBox="0 0 18 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9602 -2.40803e-05L17.6562 1.05981L1.76213 25.8564L0.0660368 24.7966L15.9602 -2.40803e-05Z" fill="white"/>
                                    <path d="M1.68916 26.8242L17.7305 51.5256L16.0407 52.5956L-0.000596066 27.8941L1.68916 26.8242Z" fill="white"/>
                                </svg>

                                <svg class="swiper-next" width="18" height="53" viewBox="0 0 18 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.77032 -2.40803e-05L0.0742188 1.05981L15.9683 25.8564L17.6644 24.7966L1.77032 -2.40803e-05Z" fill="white"/>
                                    <path d="M16.0413 26.8242L0 51.5256L1.68976 52.5956L17.7311 27.8941L16.0413 26.8242Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener( 'DOMContentLoaded', function () {
                    let swiperCoaches;

                    if (document.querySelector('.swiper-coaches')) {
                        let swiperContainer = document.querySelector('.swiper-coaches');

                        swiperCoaches = new Swiper(swiperContainer, {
                            slidesPerView: 'auto',
                            spaceBetween: 10,
                            loop: true,
                            speed: 650,
                            navigation: {
                                nextEl: swiperContainer.closest('.parent-swiper-coaches').querySelector('.swiper-coaches-manage .swiper-navigation .swiper-next'),
                                prevEl: swiperContainer.closest('.parent-swiper-coaches').querySelector('.swiper-coaches-manage .swiper-navigation .swiper-prev'),
                            },
                            breakpoints: {
                                1025: {
                                    slidesPerView: 3,
                                    spaceBetween: 35
                                },
                                1367: {
                                    slidesPerView: 3,
                                    spaceBetween: 50
                                },
                                1601: {
                                    slidesPerView: 3,
                                    spaceBetween: 60
                                },
                            }
                        });
                    }

                    //ВЫЗОВ ФУНКЦИИ ПОДГРУЗКИ ПОСТОВ ПЕРЕКЛЮЧЕНИИ КАТЕГОРИЙ
                    let selects = document.querySelectorAll( '.swiper-category .category__item' );

                    selects.forEach( function ( item ) {
                        item.onclick = function ( e ) {
                            e.preventDefault();

                            let post = item.getAttribute( 'data-post' ), category = item.getAttribute( 'data-slug' ),
                                isActive = item.classList.contains( 'active' );

                            selects.forEach( function ( el ) {
                                el.classList.remove( 'active' );
                            } );

                            if ( !isActive ) {
                                item.classList.add( 'active' );
                            }

                            loadCoaches( post, category )
                        };
                    } );

                    //ПОДГРУЗКА ПОСТОВ НОВОСТЕЙ ПРИ ПЕРЕКЛЮЧЕНИИ КАТЕГОРИЙ
                    function loadCoaches ( post, category ) {
                        document.querySelector( 'body' ).classList.add( 'loading' );

                        const formData = new FormData();
                        formData.append( 'action', "coaches_filter" );
                        formData.append( 'post', post );
                        formData.append( 'category', category );

                        fetch( '/wp-admin/admin-ajax.php', {
                            method:'POST', body:formData,
                        } ).then( ( response ) => {
                            if ( !response.ok ) {
                                alert( 'Ошибка запроса!' );
                            }
                            return response;
                        } ).then( async ( result ) => {
                            let element = await result.text();

                            let swiperParentCoaches = document.querySelector('.parent-swiper-coaches'),
                                swiperContainer = swiperParentCoaches.querySelector('.swiper-coaches'),
                                swiperWrapper = swiperParentCoaches.querySelector('.swiper-wrapper');

                            swiperWrapper.innerHTML = element;

                            swiperCoaches.destroy(true, true);
                            swiperCoaches = new Swiper(swiperContainer, {
                                slidesPerView: 'auto',
                                spaceBetween: 10,
                                loop: true,
                                speed: 650,
                                navigation: {
                                    nextEl: swiperContainer.closest('.parent-swiper-coaches').querySelector('.swiper-coaches-manage .swiper-navigation .swiper-next'),
                                    prevEl: swiperContainer.closest('.parent-swiper-coaches').querySelector('.swiper-coaches-manage .swiper-navigation .swiper-prev'),
                                },
                                breakpoints: {
                                    1025: {
                                        slidesPerView: 3,
                                        spaceBetween: 35
                                    },
                                    1367: {
                                        slidesPerView: 3,
                                        spaceBetween: 50
                                    },
                                    1601: {
                                        slidesPerView: 3,
                                        spaceBetween: 60
                                    },
                                }
                            });

                            document.querySelector( 'body' ).classList.remove( 'loading' );
                        } );
                    }

                    //ВЫЗОВ ФУНКЦИИ ПОКАЗА ПОДРОБНОСТЕЙ О ТРЕНЕРЕ
                    document.addEventListener('click', function (e) {
                        if (e.target.closest('.about-page__coaches .coaches__body .coaches-more')) {
                            e.preventDefault();

                            showCoaches(e.target.closest('.about-page__coaches .coaches__body .coaches-more').dataset.id);
                        }
                    });

                    //ФУНКЦИЯ ПОДГРУЗКИ ПОДРОБНОСТЕЙ ТРЕНЕРА
                    function showCoaches (id) {
                        document.querySelector( 'body' ).classList.add( 'loading' );

                        const formData = new FormData();
                        formData.append( 'action', "show_coaches" );
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

                                showPopupCoaches(result.data);
                            })
                            .catch(error => {
                                console.error('Ошибка:', error.message);
                            });
                    }

                    function showPopupCoaches(data) {
                        let popupCoaches = document.querySelector('.popup-coaches'),
                            backgroundPopupCoaches = document.querySelector('.background-popup-coaches'),
                            image = popupCoaches.querySelector('.coaches-image img'),
                            title = popupCoaches.querySelector('.coaches-info .info-title'),
                            post = popupCoaches.querySelector('.coaches-info .info-post'),
                            experienceItem = popupCoaches.querySelector('.coaches-info .info-item.experience-item'),
                            standing = popupCoaches.querySelector('.coaches-info .info-item.standing'),
                            retraining = popupCoaches.querySelector('.coaches-info .info-item.retraining'),
                            educationParent = popupCoaches.querySelector('.coaches-info .info-items.education'),
                            experienceParent = popupCoaches.querySelector('.coaches-info .info-items.experience'),
                            directionsParent = popupCoaches.querySelector('.coaches-info .info-items.directions');

                        image.src = data.image;
                        title.innerHTML = data.title;
                        post.innerHTML = data.post;

                        // Обработка experienceItem
                        const experienceBig = experienceItem.querySelector('big');
                        if (data.experienceItem) {
                            clearAndInsertAfter(experienceBig, data.experienceItem);
                            experienceItem.classList.remove('empty');
                        } else {
                            clearAndInsertAfter(experienceBig, '');
                            experienceItem.classList.add('empty');
                        }

                        // Обработка standing
                        const standingBig = standing.querySelector('big');
                        if (data.standing) {
                            clearAndInsertAfter(standingBig, data.standing);
                            standing.classList.remove('empty');
                        } else {
                            clearAndInsertAfter(standingBig, '');
                            standing.classList.add('empty');
                        }

                        // Обработка retraining
                        const retrainingBig = retraining.querySelector('big');
                        if (data.retraining) {
                            clearAndInsertAfter(retrainingBig, data.retraining);
                            retraining.classList.remove('empty');
                        } else {
                            clearAndInsertAfter(retrainingBig, '');
                            retraining.classList.add('empty');
                        }

                        // Обработка education
                        const educationItems = educationParent.querySelector('.items-items');
                        educationItems.innerHTML = '';
                        if (data.education && data.education.length > 0) {
                            data.education.forEach(item => {
                                const itemElement = document.createElement('p');
                                itemElement.textContent = item;
                                educationItems.appendChild(itemElement);
                            });
                            educationParent.classList.remove('empty');
                        } else {
                            educationParent.classList.add('empty');
                        }

                        // Обработка experience
                        const experienceItems = experienceParent.querySelector('.items-items');
                        experienceItems.innerHTML = '';
                        if (data.experience && data.experience.length > 0) {
                            data.experience.forEach(item => {
                                const itemElement = document.createElement('p');
                                itemElement.textContent = item;
                                experienceItems.appendChild(itemElement);
                            });
                            experienceParent.classList.remove('empty');
                        } else {
                            experienceParent.classList.add('empty');
                        }

                        // Обработка directions
                        const directionsItems = directionsParent.querySelector('.items-items');
                        directionsItems.innerHTML = '';
                        if (data.directions && data.directions.length > 0) {
                            data.directions.forEach(item => {
                                const itemElement = document.createElement('p');
                                itemElement.textContent = item;
                                directionsItems.appendChild(itemElement);
                            });
                            directionsParent.classList.remove('empty');
                        } else {
                            directionsParent.classList.add('empty');
                        }

                        document.querySelector('body').classList.remove('loading');
                        document.documentElement.classList.add('no-scroll');
                        document.documentElement.style.marginRight = window.scrollWidth + 'px';

                        backgroundPopupCoaches.classList.add('active');
                        popupCoaches.scrollTop = 0;
                        popupCoaches.classList.add('active');
                    }

                    function clearAndInsertAfter(bigTag, newData) {
                        let nextSibling = bigTag.nextSibling;
                        while (nextSibling) {
                            let toRemove = nextSibling;
                            nextSibling = nextSibling.nextSibling;
                            bigTag.parentNode.removeChild(toRemove);
                        }
                        if (newData) {
                            bigTag.insertAdjacentHTML('afterend', newData);
                        }
                    }
                });
            </script>
        </section>
    <?php } ?>
<?php } ?>

<?php get_footer(); ?>
