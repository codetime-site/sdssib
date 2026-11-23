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


