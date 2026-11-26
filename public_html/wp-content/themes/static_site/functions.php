<?php
function codetime_func()
{
    locate_template(array('inc/acf.php'), true, true); // acf functions get_sub_filed()
    locate_template(array('inc/register_menu.php'), true, true); //register munu self
    locate_template(array('inc/acf_setting_page.php'), true, true); //for opinons notifications
    locate_template(array('inc/header_menu.php'), true, true); //for header menu class add
    locate_template(array('inc/blog_info.php'), true, true); //for header menu class add
}
add_action('after_setup_theme', 'codetime_func');

function codetime_scripts()
{
    locate_template(array('inc/styles.php'), true, true); // Подключение стили
    locate_template(array('inc/scripts.php'), true, true); // Подключение скриптов   
}

add_action('wp_enqueue_scripts', 'codetime_scripts');



add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup()
{
    add_theme_support('custom-logo', array(
        'height' => 50, // рекомендуемая высота (в пикселях)
        'width' => 50, // рекомендуемая ширина (в пикселях)
        'flex-height' => true, // разрешаем любую высоту (чтобы не обрезало)
        'flex-width' => true, // разрешаем любую ширину
    ));


}





