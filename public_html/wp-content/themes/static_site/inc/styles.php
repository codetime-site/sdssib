<?php

// 1. Подключаем файл стилей (CSS) — «одежду» сайта
wp_enqueue_style('my_main_styles', get_stylesheet_uri(), array(), '1.0.0');
// 1.2. Подключаем файл стилей (favicon.ico) сайта
wp_enqueue_style('codetime_favicon', get_template_directory_uri() . "/assets/img/favicon.ico", array(), '1.0.0');
// 1.3. Подключаем файл стилей (favicon.ico) сайта
wp_enqueue_style(
    'my-google-fonts',
    'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Roboto:wght@300;400;500;600;700&display=swap',
    array(),
    null
);

