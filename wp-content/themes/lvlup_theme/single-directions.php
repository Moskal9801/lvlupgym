<?php get_header(); ?>

<h1 class="for-title">LVLUP | <?php echo get_the_title(); ?></h1>

<?php get_template_part( 'parts/default-items/default', 'banner' ); ?>

<section class="single-page__features">
    <div class="container">
        <div class="features__body">
            <p class="body__description"><?php the_field( 'directions-description' ); ?></p>
            <div class="body__items <?php if ( have_rows( 'directions-features' ) ) { $counter = 0; while ( have_rows( 'directions-features' ) ) { the_row(); $counter++; } echo 'items-' . $counter; } ?>">
                <?php if ( have_rows( 'directions-features' ) ) { $counter = 1; ?>
                    <?php while ( have_rows( 'directions-features' ) ) { the_row(); ?>
                        <div class="items__item item-<?php echo $counter; ?>" data-id="<?php echo get_the_ID(); ?>" data-counter="<?php echo $counter; ?>">
                            <div class="item__title">
                                <p><?php the_sub_field( 'features-title' ); ?></p>
                                <?php if (get_sub_field( 'features-more' )) { ?>
                                    <a class="my-popup" href="#">Подробнее</a>
                                <?php } ?>

                                <?php if (get_sub_field( 'features-link-button_1' ) && get_sub_field( 'features-text-button_1' )) { ?>
                                    <a href="<?php the_sub_field( 'features-link-button_1' ); ?>" target='_blank'><?php the_sub_field( 'features-text-button_1' ); ?></a>
                                <?php } ?>
                            </div>
                            <p class="item__description"><?php the_sub_field( 'features-description' ); ?></p>

                            <div class="item__icons">
                                <?php if ($counter === 1) { ?>
                                    <svg width="185" height="185" viewBox="0 0 185 185" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_425_11023)">
                                            <path d="M157.023 157.022C192.658 121.388 192.658 63.6124 157.023 27.9777C121.388 -7.65699 63.613 -7.65699 27.9784 27.9777C-7.65633 63.6124 -7.65633 121.388 27.9784 157.022C63.613 192.657 121.388 192.657 157.023 157.022Z" stroke="#1126B6" stroke-width="2" stroke-miterlimit="10"/>
                                            <path d="M142.12 155.562C172.548 125.134 172.548 75.7988 142.12 45.37C111.691 14.9412 62.356 14.9412 31.9273 45.37C1.49846 75.7988 1.49846 125.134 31.9272 155.562C62.356 185.991 111.691 185.991 142.12 155.562Z" stroke="#1126B6" stroke-width="1.8" stroke-miterlimit="10"/>
                                            <path d="M81.5599 173.034C117.231 173.034 146.147 144.117 146.147 108.447C146.147 72.776 117.231 43.8593 81.5599 43.8593C45.8894 43.8593 16.9727 72.776 16.9727 108.447C16.9727 144.117 45.8894 173.034 81.5599 173.034Z" stroke="#1126B6" stroke-width="1.6" stroke-miterlimit="10"/>
                                            <path d="M76.0782 167.664C104.38 167.664 127.322 144.721 127.322 116.42C127.322 88.1184 104.38 65.1756 76.0782 65.1756C47.7768 65.1756 24.834 88.1184 24.834 116.42C24.834 144.721 47.7768 167.664 76.0782 167.664Z" stroke="#1126B6" stroke-width="1.4" stroke-miterlimit="10"/>
                                            <path d="M70.6081 162.307C91.5472 162.307 108.522 145.332 108.522 124.393C108.522 103.454 91.5472 86.4794 70.6081 86.4794C49.6689 86.4794 32.6943 103.454 32.6943 124.393C32.6943 145.332 49.6689 162.307 70.6081 162.307Z" stroke="#1126B6" stroke-width="1.2" stroke-miterlimit="10"/>
                                            <path d="M65.1379 156.95C78.7148 156.95 89.7211 145.943 89.7211 132.366C89.7211 118.789 78.7148 107.783 65.1379 107.783C51.561 107.783 40.5547 118.789 40.5547 132.366C40.5547 145.943 51.561 156.95 65.1379 156.95Z" stroke="#1126B6" stroke-miterlimit="10"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_425_11023">
                                                <rect width="185" height="185" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                <?php } elseif ($counter === 2) { ?>
                                    <svg width="217" height="87" viewBox="0 0 217 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_425_11035)">
                                            <path d="M1.22559 0V87" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M21.6318 0V87" stroke="white" stroke-width="1.69" stroke-miterlimit="10"/>
                                            <path d="M42.0205 0V87" stroke="white" stroke-width="2.38" stroke-miterlimit="10"/>
                                            <path d="M62.4268 0V87" stroke="white" stroke-width="3.06" stroke-miterlimit="10"/>
                                            <path d="M82.833 0V87" stroke="white" stroke-width="3.75" stroke-miterlimit="10"/>
                                            <path d="M103.222 0V87" stroke="white" stroke-width="4.44" stroke-miterlimit="10"/>
                                            <path d="M123.629 0V87" stroke="white" stroke-width="5.12" stroke-miterlimit="10"/>
                                            <path d="M144.035 0V87" stroke="white" stroke-width="5.81" stroke-miterlimit="10"/>
                                            <path d="M164.441 0V87" stroke="white" stroke-width="6.5" stroke-miterlimit="10"/>
                                            <path d="M184.83 0V87" stroke="white" stroke-width="7.19" stroke-miterlimit="10"/>
                                            <path d="M205.237 0V87" stroke="white" stroke-width="7.88" stroke-miterlimit="10"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_425_11035">
                                                <rect width="338" height="87" fill="white" transform="translate(0.333984)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                <?php } elseif ($counter === 3 && get_the_ID() != 51 && get_the_ID() != 48 && get_the_ID() != 34) { ?>
                                    <svg width="412" height="62" viewBox="0 0 412 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_425_11127)">
                                            <path d="M-48.0225 61.3311L0.301819 0.668915" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
                                            <path d="M-23.8389 61.3311L24.4854 0.668915" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
                                            <path d="M0.302734 61.3311L48.6688 0.668915" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
                                            <path d="M24.4854 61.3311L72.8096 0.668915" stroke="white" stroke-width="0.5" stroke-miterlimit="10"/>
                                            <path d="M48.668 61.3311L96.9922 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M72.8096 61.3311L121.176 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M96.9922 61.3311L145.316 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M121.176 61.3311L169.5 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M145.317 61.3311L193.684 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M169.5 61.3311L217.824 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M193.683 61.3311L242.007 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M217.824 61.3311L266.19 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M242.008 61.3311L290.332 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M266.19 61.3311L314.515 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M290.332 61.3311L338.656 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M314.515 61.3311L362.839 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M338.656 61.3311L387.022 0.668915" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M362.839 61.3311L411.163 0.668915" stroke="white" stroke-miterlimit="10"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_425_11127">
                                                <rect width="485" height="62" fill="white" transform="translate(-73)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                <?php } elseif ($counter === 4 && get_the_ID() != 51 && get_the_ID() != 34 && get_the_ID() != 45 && get_the_ID() != 48) { ?>
                                    <svg width="217" height="87" viewBox="0 0 217 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.890625 87L0.89064 -2.01881e-07" stroke="#1126B6" stroke-miterlimit="10"/>
                                        <path d="M21.2969 87L21.2969 -2.01881e-07" stroke="#1126B6" stroke-width="1.69" stroke-miterlimit="10"/>
                                        <path d="M41.6855 87L41.6856 -2.01881e-07" stroke="#1126B6" stroke-width="2.38" stroke-miterlimit="10"/>
                                        <path d="M62.0938 87L62.0938 -2.01881e-07" stroke="#1126B6" stroke-width="3.06" stroke-miterlimit="10"/>
                                        <path d="M82.5 87L82.5 -2.01881e-07" stroke="#1126B6" stroke-width="3.75" stroke-miterlimit="10"/>
                                        <path d="M102.889 87L102.889 -2.01881e-07" stroke="#1126B6" stroke-width="4.44" stroke-miterlimit="10"/>
                                        <path d="M123.295 87L123.295 -2.01881e-07" stroke="#1126B6" stroke-width="5.12" stroke-miterlimit="10"/>
                                        <path d="M143.701 87L143.701 -2.01881e-07" stroke="#1126B6" stroke-width="5.81" stroke-miterlimit="10"/>
                                        <path d="M164.107 87L164.107 -2.01881e-07" stroke="#1126B6" stroke-width="6.5" stroke-miterlimit="10"/>
                                        <path d="M184.496 87L184.496 -2.01881e-07" stroke="#1126B6" stroke-width="7.19" stroke-miterlimit="10"/>
                                        <path d="M204.902 87L204.902 -2.01881e-07" stroke="#1126B6" stroke-width="7.88" stroke-miterlimit="10"/>
                                    </svg>
                                <?php } elseif ($counter === 5) { ?>
                                    <svg width="104" height="203" viewBox="0 0 104 203" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_425_11171)">
                                            <path d="M0 101.5H54.3484" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M101.073 0V54.5778" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M101.073 148.422V203" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M29.6143 29.7391L68.0246 68.3117" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M68.0246 134.688L29.6143 173.282" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M7.30957 63.6005L57.7206 83.9804" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M83.6273 145.036L63.333 195.66" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M61.4482 8.11835L82.7478 58.3215" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M58.0761 119.903L8.08398 141.292" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M2.15723 80.5943L55.3537 91.8464" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M91.4606 147.413L80.2559 200.834" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M45.8457 16.489L75.5436 62.1914" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M61.9301 127.138L16.4199 156.961" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M17.0898 45.0293L62.244 75.3994" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M75.0822 140.493L44.8398 185.838" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M81.4492 1.93494L92.0047 55.4612" stroke="white" stroke-miterlimit="10"/>
                                            <path d="M55.228 110.607L1.92676 121.207" stroke="white" stroke-miterlimit="10"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_425_11171">
                                                <rect width="202" height="203" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                <?php } elseif ($counter === 6 && get_the_ID() != 48) { ?>
                                    <svg width="52" height="246" viewBox="0 0 52 246" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.666332 83.9202L1.56055 85.1375L25.0953 67.4284L24.2011 66.2112L0.666332 83.9202Z" fill="#1126B6"/>
                                        <path d="M27.1545 67.4358L50.6953 85.1365L51.5891 83.9189L28.0483 66.2182L27.1545 67.4358Z" fill="#1126B6"/>
                                        <path d="M0.744457 29.6931L1.63867 30.9103L25.1734 13.2013L24.2792 11.984L0.744457 29.6931Z" fill="#1126B6"/>
                                        <path d="M27.2306 13.2087L50.7715 30.9094L51.6653 29.6918L28.1244 11.9911L27.2306 13.2087Z" fill="#1126B6"/>
                                        <path d="M0.666332 13.3148L1.56055 14.5321L25.0953 -3.17692L24.2011 -4.39419L0.666332 13.3148Z" fill="#1126B6"/>
                                        <path d="M27.1545 -3.16956L50.6953 14.5311L51.5891 13.3135L28.0483 -4.38716L27.1545 -3.16956Z" fill="#1126B6"/>
                                        <path d="M0.744457 64.9953L1.63867 66.2126L25.1734 48.5036L24.2792 47.2863L0.744457 64.9953Z" fill="#1126B6"/>
                                        <path d="M27.2306 48.511L50.7715 66.2117L51.6653 64.9941L28.1244 47.2934L27.2306 48.511Z" fill="#1126B6"/>
                                        <path d="M0.666332 48.6171L1.56055 49.8344L25.0953 32.1253L24.2011 30.9081L0.666332 48.6171Z" fill="#1126B6"/>
                                        <path d="M27.1545 32.1327L50.6953 49.8334L51.5891 48.6158L28.0483 30.9151L27.1545 32.1327Z" fill="#1126B6"/>
                                        <path d="M0.666332 243.92L1.56055 245.137L25.0953 227.428L24.2011 226.211L0.666332 243.92Z" fill="#1126B6"/>
                                        <path d="M27.1545 227.436L50.6953 245.136L51.5891 243.919L28.0483 226.218L27.1545 227.436Z" fill="#1126B6"/>
                                        <path d="M0.744457 189.693L1.63867 190.91L25.1734 173.201L24.2792 171.984L0.744457 189.693Z" fill="#1126B6"/>
                                        <path d="M27.2306 173.209L50.7715 190.909L51.6653 189.692L28.1244 171.991L27.2306 173.209Z" fill="#1126B6"/>
                                        <path d="M0.666332 173.315L1.56055 174.532L25.0953 156.823L24.2011 155.606L0.666332 173.315Z" fill="#1126B6"/>
                                        <path d="M27.1545 156.83L50.6953 174.531L51.5891 173.314L28.0483 155.613L27.1545 156.83Z" fill="#1126B6"/>
                                        <path d="M0.744457 224.995L1.63867 226.213L25.1734 208.504L24.2792 207.286L0.744457 224.995Z" fill="#1126B6"/>
                                        <path d="M27.2306 208.511L50.7715 226.212L51.6653 224.994L28.1244 207.293L27.2306 208.511Z" fill="#1126B6"/>
                                        <path d="M0.666332 208.617L1.56055 209.834L25.0953 192.125L24.2011 190.908L0.666332 208.617Z" fill="#1126B6"/>
                                        <path d="M27.1545 192.133L50.6953 209.833L51.5891 208.616L28.0483 190.915L27.1545 192.133Z" fill="#1126B6"/>
                                        <path d="M0.744457 154.39L1.63867 155.607L25.1734 137.898L24.2792 136.681L0.744457 154.39Z" fill="#1126B6"/>
                                        <path d="M27.2326 137.906L50.7734 155.606L51.6672 154.389L28.1264 136.688L27.2326 137.906Z" fill="#1126B6"/>
                                        <path d="M0.666332 138.012L1.56055 139.229L25.0953 121.52L24.2011 120.303L0.666332 138.012Z" fill="#1126B6"/>
                                        <path d="M27.1564 121.527L50.6973 139.228L51.5911 138.01L28.0502 120.31L27.1564 121.527Z" fill="#1126B6"/>
                                        <path d="M0.744457 119.087L1.63867 120.305L25.1734 102.596L24.2792 101.378L0.744457 119.087Z" fill="#1126B6"/>
                                        <path d="M27.2326 102.603L50.7734 120.304L51.6672 119.086L28.1264 101.385L27.2326 102.603Z" fill="#1126B6"/>
                                        <path d="M0.666332 102.709L1.56055 103.926L25.0953 86.2173L24.2011 85L0.666332 102.709Z" fill="#1126B6"/>
                                        <path d="M27.1564 86.2244L50.6973 103.925L51.5911 102.707L28.0502 85.0068L27.1564 86.2244Z" fill="#1126B6"/>
                                    </svg>
                                <?php }?>
                            </div>
                        </div>
                    <?php $counter++; } ?>
                <?php } ?>
            </div>

            <?php if (get_the_ID() != 54) { ?>
                <a class="body__schedule default-border-button blue-border" href="/schedule/">СМОТРЕТЬ РАСПИСАНИЕ</a>
            <?php } ?>
        </div>
    </div>

    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            //ВЫЗОВ ФУНКЦИИ ПОКАЗА ПОДРОБНОСТЕЙ ОСОБЕННОСТИ
            document.addEventListener('click', function (e) {
                if (e.target.closest('.single-page__features .body__items .items__item a.my-popup')) {
                    e.preventDefault();

                    showCoaches(e.target.closest('.single-page__features .body__items .items__item').dataset.id, e.target.closest('.single-page__features .body__items .items__item').dataset.counter);
                }

                //ФУНКЦИЯ ПОДГРУЗКИ ОСОБЕННОСТЕЙ
                function showCoaches (id, counter) {
                    document.querySelector( 'body' ).classList.add( 'loading' );

                    const formData = new FormData();
                    formData.append( 'action', "show_features" );
                    formData.append( 'id', id );
                    formData.append( 'counter', counter)

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

                            showPopupFeatures(result.data);
                        })
                        .catch(error => {
                            console.error('Ошибка:', error.message);
                        });
                }

                //ВЫЗОВ ПОПАПА ПОДРОБНОСТЕЙ ТРЕНЕРА
                function showPopupFeatures (data) {
                    let popupFeatures = document.querySelector('.popup-features'),
                        backgroundPopupFeatures = document.querySelector('.background-popup-features'),
                        infoFeatures = popupFeatures.querySelector('.features-info'),
                        title = infoFeatures.querySelector('.info-title'),
                        more = infoFeatures.querySelector('.info-more'),
                        button = infoFeatures.querySelector('.info-button');

                    title.innerHTML = data.title;
                    more.innerHTML = data.more;

                    if (!data.textButton || !data.linkButton) {
                        button.style.display = 'none';
                    } else {
                        button.innerHTML = data.textButton;
                        button.href = data.linkButton;
                        button.style.display = 'flex';
                    }

                    document.querySelector( 'body' ).classList.remove( 'loading' );

                    document.documentElement.classList.add('no-scroll');
                    document.documentElement.style.marginRight = window.scrollWidth + 'px';

                    backgroundPopupFeatures.classList.add('active');
                    popupFeatures.scrollTop = 0;
                    popupFeatures.classList.add('active');
                }
            });
        });
    </script>
</section>

<?php get_template_part( 'parts/default-items/default', 'slider' ); ?>

<?php get_footer(); ?>
