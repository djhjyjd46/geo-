<?php

require_once get_template_directory() . '/components/form-init.php';

function mytheme_enqueue_scripts() {
    // Подключение стилей
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/js/swiper/swiper-bundle.min.css');
    wp_enqueue_style('mythem-style', get_template_directory_uri() . '/css/styles.css');

    // Подключение основных библиотек
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('imask-js', get_template_directory_uri() . '/js/imask.js', array(), null, true);

    // Подключение модулей с зависимостями
    wp_enqueue_script('slider-init', get_template_directory_uri() . '/js/modules/slider-init.js', array('swiper-js'), null, true);
    wp_enqueue_script('mask-phone', get_template_directory_uri() . '/js/modules/mask-phone.js', array('imask-js'), null, true);
    wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/js/modules/mobile-menu.js', array(), null, true);
    wp_enqueue_script('modal-open', get_template_directory_uri() . '/js/modules/modal-open.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
show_admin_bar(false);

