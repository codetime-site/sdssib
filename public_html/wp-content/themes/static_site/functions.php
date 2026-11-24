<?php

add_action('wp_enqueue_scripts', 'codetime_scripts');
function codetime_scripts()
{
    $styles = ['styles', 'scripts'];
    // Подключение стили
    foreach ($styles as $style) {
        locate_template(["inc/" . $style . ".php"], true, true);
    }
    // Подключение скриптов

    // проверка 
    // 2. Объявляем строку с JS-кодом внутри функции
    $custom_js = "console.log('Скрипт успешно работает!');";
    // 3. Привязываем инлайновый JS к первому скрипту (my_main_js)
    wp_add_inline_script("my_main_js", $custom_js);

}

function codetime_setup()
{
    $styles = ['acf', 'variables'];
    foreach ($styles as $style) {
        locate_template(["inc/" . $style . ".php"], true, true);
    }
}
add_action('after_setup_theme', 'codetime_setup');


/**
 * Get the site notice message, and display it.
 *
 * @return void
 */
function demo_acf_output_notification() {
    $has_notice = get_field( 'notification_bar', 'options' );

    if ( ! $has_notice || ! $has_notice['notification_onoff'] ) {
        return;
    }
    ?>

    <div class="notification-bar">
        <div class="notification-bar__wrapper">
            <p class="notification-bar__text"><?php echo wp_kses_post( $has_notice['notification_message'] ); ?></p>
        </div>
    </div>
    <?php
}
// Notification to be placed after opening body tag.
add_action( 'wp_body_open', 'demo_acf_output_notification' );




function codetime_register_menu() {
    
    // возможность изменять фон из админки
	add_theme_support( 'custom-background' );

	// возможность изменять изображения в шапке из админки
	add_theme_support( 'custom-header' );

	// включаем меню в админке
	add_theme_support( 'menus' );

	// создание метатега <title> через хук
	add_theme_support( 'title-tag' );

	// возможность загрузить картинку логотипа в админке
	add_theme_support( 'custom-logo', [
		'height'      => 190,
		'width'       => 190,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
	] );
}

add_action( 'after_setup_theme', "codetime_register_menu");

