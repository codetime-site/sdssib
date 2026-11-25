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


