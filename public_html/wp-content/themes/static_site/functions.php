<?php
function codetime_func()
{
    locate_template(array('inc/acf.php'), true, true); // acf functions get_sub_filed()
    locate_template(array('inc/register_menu.php'), true, true); //register munu self
    locate_template(array('inc/acf_setting_page.php'), true, true); //for opinons notifications
}
add_action('after_setup_theme', 'codetime_func');

function codetime_scripts()
{
    locate_template(array('inc/styles.php'), true, true); // Подключение стили
    locate_template(array('inc/scripts.php'), true, true); // Подключение скриптов   
}

add_action('wp_enqueue_scripts', 'codetime_scripts');




