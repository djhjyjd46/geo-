<?php get_header(); ?>

<section id="partner" class="partner">
    <div class="container">
        <div class="text-inner">
            <h2>УП&nbsp;&laquo;ГЕОКАРТ&raquo;&nbsp;&mdash; надежный партнер в&nbsp;геодезических услугах</h2>
            <p>Специализированное геодезическое предприятие УП&nbsp;&laquo;ГЕОКАРТ&raquo; работает на&nbsp;рынке
                геодезических услуг уже
                более 25&nbsp;лет. За&nbsp;это время мы&nbsp;накопили огромный опыт в&nbsp;области инженерной
                геодезии и&nbsp;топографии,
                выполняя как стандартные, так и&nbsp;прецизионные (высокоточные) работы.</p>
            <p>Мы&nbsp;предлагаем комплексное геодезическое обеспечение для строительных компаний
                и&nbsp;эксплуатирующих
                организаций, гарантируя качество и&nbsp;сроки выполнения работ.</p>
        </div>
        <div class="block-inner">
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partner/icon1.png" alt="">
                <h3>Более 20<br> лет на&nbsp;рынке</h3>
            </div>
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partner/icon2.png" alt="">
                <h3>Аттестация в&nbsp;РУП &laquo;Белстройцентр&raquo; (1-я категория сложности)</h3>
            </div>
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partner/icon3.png" alt="">
                <h3>Высокоточное геодезическое оборудование</h3>

            </div>
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partner/icon4.png" alt="">
                <h3>Аттестованный квалифицированный персонал</h3>
            </div>
        </div>

</section>
<section id="service" class="service">
    <div class="container">
        <div class="text-block">
            <h2>Полный комплекс геодезических услуг</h2>
            <p>Мы&nbsp;предлагаем все виды геодезических работ от&nbsp;предпроектных съёмок и&nbsp;разбивочных работ
                до&nbsp;исполнительных съёмок и&nbsp;мониторинга объектов, что обеспечивает полноценное
                сопровождение проектов на&nbsp;всех этапах</p>
        </div>
        <div class="cards_list">
            <div class="card">
                <h3>Геодезический мониторинг</h3>
                <p>Наблюдения за&nbsp;деформациями зданий и&nbsp;сооружений:</p>
                <ul>
                    <li>Вертикальные осадки</li>
                    <li>Крены и&nbsp;деформации</li>
                    <li>Сжатия</li>
                </ul>
                <button class="openModalConsult" type="button">Получить консультацию</button>
            </div>
            <div class="card">
                <h3>Разбивочные геодезические работы</h3>
                <ul>
                    <li>Создание и&nbsp;контроль опорной геодезической сети
                    </li>
                    <li>Вынос в&nbsp;натуру осей, габаритов, отметки на&nbsp;временный репер
                    </li>
                    <li>Вынос в&nbsp;натуру инженерных сетей</li>
                </ul>
                <button class="openModalConsult" type="button">Получить консультацию</button>
            </div>
            <div class="card">
                <h3>Исполнительные геодезические съемки</h3>
                <ul>
                    <li>Поэтажные плановые и&nbsp;высотные съемки</li>
                    <li>Съемки подземных и&nbsp;наземных коммуникаций</li>
                    <li>Съемки благоустройства территорий</li>
                    <li>Планово-высотная посадка зданий и&nbsp;сооружений</li>
                    <li>Съемки подкрановых путей и&nbsp;фасадов зданий</li>
                    <li>Вертикальная планировка с&nbsp;вычислением объемов земляных работ</li>
                </ul>
                <button class="openModalConsult" type="button">Получить консультацию</button>
            </div>
            <div class="card-inner">
                <div class="card">
                    <h3>Топографические съемки масштабов от&nbsp;1:500 до&nbsp;1:5000</h3>
                    <ul>
                        <li>Предпроектные и&nbsp;исполнительные съемки</li>
                    </ul>
                    <button class="openModalConsult" type="button">Получить консультацию</button>
                </div>
                <div class="card">
                    <h3>Составление проекта производства геодезических работ</h3>
                    <button class="openModalConsult" type="button">Получить консультацию</button>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="projects" id="projects">
    <div class="container">
        <div class="projects__text-inner">
            <h2>Реализованные проекты</h2>
            <p>В&nbsp;нашем портфолио&nbsp;&mdash; десятки успешно завершенных проектов в&nbsp;области инженерной
                геодезии и&nbsp;топографии. Мы&nbsp;работали над объектами различной сложности: от&nbsp;жилых
                комплексов до&nbsp;промышленных сооружений. Каждый проект&nbsp;&mdash; это пример нашего
                профессионализма и&nbsp;внимания к&nbsp;деталям.</p>
        </div>
        <div class="slider">
            <div class="swiper-container swiper-project">
                <div class="swiper-wrapper">
                    
                    <?php
                    $projects = get_field('project','option');
                    foreach ($projects as $project) :?>
                        <div class="swiper-slide">
                        <img src="<?= $project['img'] ?>" alt="Project 1">
                        <div class="text-inner">
                            <h3><?= $project['title'] ?></h3>
                            <p><?= $project['text'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <div class="swiper-btn-box">
            <div class="project-swiper-button-next"><svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="44" height="44" rx="22" fill="#0B62A0" />
                    <path d="M27 34L18.4391 22.1289C18.179 21.7682 18.1884 21.2789 18.4622 20.9284L27 10"
                        stroke="#F2F2F2" stroke-width="3" />
                </svg>
            </div>
            <div class="project-swiper-button-prev"><svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="44" height="44" rx="22" fill="#0B62A0" />
                    <path d="M18 10L26.5609 21.8711C26.821 22.2318 26.8116 22.7211 26.5378 23.0716L18 34"
                        stroke="#F2F2F2" stroke-width="3" />
                </svg>
            </div>
        </div>
    </div>
</section>
<section class="garant" id="garant">
    <div class="container">

        <div class="projects__text-inner">
        <h2>Гарантия качества и&nbsp;соответствия стандартам</h2>
<p>Наша компания имеет все необходимые лицензии и&nbsp;сертификаты, подтверждающие качество предоставляемых услуг. Мы&nbsp;строго соблюдаем нормативные требования и&nbsp;используем современное оборудование, чтобы гарантировать точность и&nbsp;надежность наших работ.</p>
</div>
        <div class="slider">
            <div class="swiper-container swiper-garant">
                <div class="swiper-wrapper">
    <?php
                  $garant = get_field('serteficat','option');
                  foreach ($garant as $image) :?>
                        <div class="swiper-slide">
                            <img src="<?= $image['img'] ?>" alt="Project 1">
                        </div>
                    <?php endforeach;
                  ?>
                </div>
            </div>
        </div>
        <div class="garant-swiper-btn-box visible-mobile">
            <div class="garant-swiper-button-next"><svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="44" height="44" rx="22" fill="#0B62A0" />
                    <path d="M27 34L18.4391 22.1289C18.179 21.7682 18.1884 21.2789 18.4622 20.9284L27 10"
                        stroke="#F2F2F2" stroke-width="3" />
                </svg>
            </div>
            <div class="garant-swiper-button-prev"><svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="44" height="44" rx="22" fill="#0B62A0" />
                    <path d="M18 10L26.5609 21.8711C26.821 22.2318 26.8116 22.7211 26.5378 23.0716L18 34"
                        stroke="#F2F2F2" stroke-width="3" />
                </svg>
            </div>
        </div>
    </div>
</section>
<section id="contact-form" class="contact-form">
    <div class="container">
        <h2>ОСТАВЬТЕ ЗАЯВКУ И&nbsp;МЫ&nbsp;ПЕРЕЗВОНИМ ВАМ В&nbsp;ТЕЧЕНИИ 2&nbsp;МИНУТ</h2>
        <?= get_template_part('components/form'); ?>

    </div>
</section>
<section class="contacts" id="contacts">
    <div class="container">

        <div class="contacts__inner">
            <h2>Свяжитесь с нами для сотрудничества</h2>
            <div class="contacts__block">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="44" height="44" rx="3" fill="#0B62A0" />
                    <path d="M33.345 27.6136L29.9958 24.2643C28.7996 23.0681 26.7661 23.5467 26.2876 25.1016C25.9288 26.1782 24.7326 26.7763 23.6561 26.537C21.2637 25.9389 18.0341 22.8289 17.436 20.317C17.0771 19.2404 17.7948 18.0442 18.8714 17.6854C20.4264 17.2069 20.9049 15.1734 19.7087 13.9773L16.3594 10.628C15.4025 9.79067 13.9671 9.79067 13.1298 10.628L10.8571 12.9007C8.58434 15.293 11.0963 21.6327 16.7183 27.2547C22.3403 32.8767 28.68 35.5083 31.0723 33.116L33.345 30.8432C34.1824 29.8863 34.1824 28.4509 33.345 27.6136Z" fill="white" />
                </svg>
                <div class="contacts__inner__block__box">
                    <div class="phone-inner">
                        <div class="phone-box">
                            <a href="tel:+375173514040"><?= the_field('phone-1', 'option'); ?></a>
                            <span>тел/факс</span>
                        </div>
                    </div>
                    <a href="tel:+375173514040"><?= the_field('phone-2', 'option'); ?></a>
                </div>
            </div>
            <div class="contacts__block">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="44" height="44" rx="3" fill="#0B62A0" />
                    <path d="M22 10.75C19.812 10.75 17.7135 11.6192 16.1664 13.1664C14.6192 14.7135 13.75 16.812 13.75 19C13.75 23.3575 21.1 32.575 21.415 32.9725C21.4853 33.0601 21.5743 33.1308 21.6756 33.1794C21.7768 33.2279 21.8877 33.2532 22 33.2532C22.1123 33.2532 22.2232 33.2279 22.3244 33.1794C22.4257 33.1308 22.5147 33.0601 22.585 32.9725C22.9 32.575 30.25 23.3575 30.25 19C30.25 16.812 29.3808 14.7135 27.8336 13.1664C26.2865 11.6192 24.188 10.75 22 10.75ZM22 21.25C21.4067 21.25 20.8266 21.0741 20.3333 20.7444C19.8399 20.4148 19.4554 19.9462 19.2284 19.3981C19.0013 18.8499 18.9419 18.2467 19.0576 17.6647C19.1734 17.0828 19.4591 16.5482 19.8787 16.1287C20.2982 15.7091 20.8328 15.4234 21.4147 15.3076C21.9967 15.1919 22.5999 15.2513 23.1481 15.4784C23.6962 15.7054 24.1648 16.0899 24.4944 16.5833C24.8241 17.0766 25 17.6567 25 18.25C25 19.0456 24.6839 19.8087 24.1213 20.3713C23.5587 20.9339 22.7956 21.25 22 21.25Z" fill="white" />
                </svg>

                <p>220113, г. Минск, ул. Мележа, 1, офис 1212
                    Бизнес-Центр "Парус"</p>
            </div>
            <div class="contacts__block">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="44" height="44" rx="3" fill="#0B62A0" />
                    <path d="M33.7886 14.7682L26.5099 22L33.7886 29.2318C33.9202 28.9568 34 28.6528 34 28.3281V15.6719C34 15.3472 33.9202 15.0432 33.7886 14.7682ZM31.8906 13.5625H12.1094C11.7847 13.5625 11.4807 13.6423 11.2057 13.7739L20.5086 23.03C21.3312 23.8525 22.6688 23.8525 23.4914 23.03L32.7943 13.7739C32.5193 13.6423 32.2153 13.5625 31.8906 13.5625ZM10.2114 14.7682C10.0798 15.0432 10 15.3472 10 15.6719V28.3281C10 28.6528 10.0798 28.9569 10.2114 29.2318L17.4901 22L10.2114 14.7682Z" fill="white" />
                    <path d="M25.517 22.9946L24.487 24.0246C23.1164 25.3952 20.8863 25.3952 19.5157 24.0246L18.4857 22.9946L11.207 30.2265C11.482 30.358 11.786 30.4379 12.1107 30.4379H31.892C32.2167 30.4379 32.5207 30.358 32.7957 30.2265L25.517 22.9946Z" fill="white" />
                </svg>
                <a href="mailto:GEOKART2000@MAIL.RU">GEOKART2000@MAIL.RU</a>
            </div>
            <div class="contacts__block">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="44" height="44" rx="3" fill="#0B62A0" />
                    <g clip-path="url(#clip0_31_551)">
                        <path d="M22 10C28.6276 10 34 15.3724 34 22C34 28.6276 28.6276 34 22 34C15.3724 34 10 28.6276 10 22C10 15.3724 15.3724 10 22 10ZM20.884 16.6972C20.6619 16.6972 20.4488 16.7854 20.2917 16.9425C20.1346 17.0996 20.0464 17.3127 20.0464 17.5348V24.232C20.0464 24.6952 20.4208 25.0696 20.884 25.0696H27.5812C27.6938 25.0739 27.8061 25.0554 27.9113 25.0152C28.0166 24.9751 28.1127 24.9141 28.1939 24.836C28.275 24.7578 28.3396 24.6641 28.3837 24.5604C28.4278 24.4568 28.4505 24.3453 28.4505 24.2326C28.4505 24.1199 28.4278 24.0084 28.3837 23.9048C28.3396 23.8011 28.275 23.7074 28.1939 23.6292C28.1127 23.5511 28.0166 23.4901 27.9113 23.45C27.8061 23.4098 27.6938 23.3913 27.5812 23.3956H21.7204V17.5348C21.7204 17.3129 21.6323 17.1 21.4755 16.943C21.3187 16.7859 21.1059 16.6975 20.884 16.6972Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_31_551">
                            <rect width="24" height="24" fill="white" transform="translate(10 10)" />
                        </clipPath>
                    </defs>
                </svg>
                <p>9.00-18.00</p>
            </div>

        </div>
        <div class="map">
        <iframe src="<?= the_field('map','option');?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>
    </div>
</section>

<?= get_template_part('components/modal-Thnx'); ?>
<?= get_template_part('components/modal-form'); ?>
<?= get_template_part('components/modal-form-consult'); ?>
<?= get_template_part('components/modal-policy'); ?>
<?= get_template_part('components/modal-policy-cookie'); ?>


<?php
get_footer();
