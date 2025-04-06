<?php
if (!defined('ABSPATH')) {
    exit;
}

function init_contact_form() {
    // скрипт формы
    function mail_to()
    {
        $name = sanitize_text_field($_POST['name']);
        $phone = sanitize_text_field($_POST['phone']);
        
        $site_name = get_bloginfo('name');
        $admin_email = ('djhjyjd46@tut.by');
        // $admin_email = get_option('admin_email');
        
        $to = $admin_email;
        $subject = 'Новая заявка с сайта ' . $site_name;
        $body = "Поступила новая заявка с сайта:\n\n";
        $body .= "Имя: " . $name . "\n";
        $body .= "Телефон: " . $phone . "\n";        
        $headers = array(
            'From: ' . $site_name . ' <' . $admin_email . '>',
            'Content-Type: text/plain; charset=UTF-8'
        );
        
        if (wp_mail($to, $subject, $body, $headers)) {
            wp_send_json_success(['message' => 'Письмо успешно отправлено!', 'success' => true]);
        } else {
            wp_send_json_error(['message' => 'Ошибка при отправке письма.', 'success' => false]);
        }
        
        wp_die();
    }

    // хуки почты
    add_action('wp_ajax_mail_to', 'mail_to');
    add_action('wp_ajax_nopriv_mail_to', 'mail_to');

    add_action('phpmailer_init', function ($phpmailer) {
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.gmail.com';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = 'djhjyjd46@gmail.com';
        $phpmailer->Password = 'gell dglw jqmf yvew';
        $phpmailer->SMTPSecure = 'ssl';
        $phpmailer->Port = 465;
        $phpmailer->From = 'djhjyjd46@gmail.com';
        $phpmailer->FromName = get_bloginfo('name');
        $phpmailer->SMTPDebug = 0;
        $phpmailer->CharSet = 'UTF-8';
    });

    wp_register_script('form-js', get_template_directory_uri() . '/js/modules/form.js', array(), '1.0', true);    
    wp_localize_script('form-js', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));    
    wp_enqueue_script('form-js');
}

