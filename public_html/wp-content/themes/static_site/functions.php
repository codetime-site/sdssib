<?php

add_action('wp_enqueue_scripts', 'codetime_scripts');

function codetime_scripts()
{
    // Подключение стили
    locate_template(["inc/styles.php"], true, true);
    // Подключение скриптов
    locate_template(["inc/scripts.php"], true, true);

    // проверка 
    // 2. Объявляем строку с JS-кодом внутри функции
    $custom_js = "console.log('Скрипт успешно работает!');";
    // 3. Привязываем инлайновый JS к первому скрипту (my_main_js)
    wp_add_inline_script("my_main_js", $custom_js);

}

function codetime_setup(){
    locate_template(["inc/acf.php"], true, true);
    // locate_template(["inc/variables.php"], true, true);
    
}
add_action('after_setup_theme', 'codetime_setup');


