<?php
// для безопасности, чтобы не было прямого доступа к файлу
function get_acf_field($field_name)
{
    if (function_exists('get_sub_field')) {
        return get_sub_field($field_name);
    }
    return 'добавьте значение для поля ';
}

// получение безопасного Html заголовку
function my_esc_html($esc_html){
     return esc_html( get_sub_field($esc_html) ?: "Заголовок пусто");
}

// укорачивать функции
// function gsf($field){ return get_sub_field($field); }

