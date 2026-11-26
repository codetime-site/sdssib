<?php
function get_site_info()
{
    // static запоминает результат после первого вызова
    static $ct_bloginfo = null;

    // Если функция вызывается впервые — собираем массив
    if ($ct_bloginfo === null) {
        $names = array('name', 'description', 'charset', 'html_type', 'language', 'template_directory');
        $ct_bloginfo = array();

        foreach ($names as $name) {
            $ct_bloginfo[$name] = get_bloginfo($name);
        }
    }

    // При повторных вызовах сразу отдаем готовый массив
    return $ct_bloginfo;
}
