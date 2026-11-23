<?php function codetime_get_variables($fields)
{
    $variables = [];
    foreach ($fields as $key) {
        $variables[$key] = get_sub_field($key);
    }
    return $variables;
}


function codetime_esc_attr($field_name)
{
    return esc_attr($field_name ?: "Значение не добавлено");
}


/*
function codetime_get_variables() {
    $title = get_sub_field('title');
    $sub_title = get_sub_field('sub_title');
    $sub_subs = get_sub_field('sub_subs');
    $img = get_sub_field('img');
    $img_title = get_sub_field('img_title');
    return compact('title', 'sub_title', 'img_title', 'sub_subs', 'img');
};
*/

// function codetime_sub_get_variables() {

//     $title = get_sub_field('title');
//     $sub_title = esc_html(get_sub_field('sub_title') ?: "Заголовок не добавлен");
//     $icon = wp_kses_post(get_sub_field('icon') ?: "");

//     return compact('title', 'sub_title', 'icon');
// }
