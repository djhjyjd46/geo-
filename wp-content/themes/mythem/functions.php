<?php

require_once get_template_directory() . '/components/form-init.php';

function mytheme_enqueue_scripts() {
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/js/swiper/swiper-bundle.min.css', array(), '1.0');
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper/swiper-bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('swiper-init', get_stylesheet_directory_uri() . '/js/modules/slider-init.js', array('swiper-js'), '1.0', true);
    
    // Подключение скриптов
    wp_enqueue_script('mask-phone', get_template_directory_uri() . '/js/imask.js', array(), null, true);
    wp_enqueue_script('mask-init', get_template_directory_uri() . '/js/modules/mask-phone.js', array('mask-phone'), null, true);
    wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/js/modules/mobile-menu.js', array(), null, true);
    wp_enqueue_script('modal-open', get_template_directory_uri() . '/js/modules/modal-open.js', array(), null, true);
    wp_enqueue_style('mythem-style', get_template_directory_uri() . '/css/styles.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
// add_action('init', 'init_contact_form');
show_admin_bar(false);

