<?php

// 1. Добавляем класс nav-menu__item для тега <li>
add_filter('nav_menu_css_class', 'add_my_menu_item_class', 10, 4);
function add_my_menu_item_class($classes, $item, $args, $depth)
{
    if ($args->theme_location === 'main') {
        $classes[] = 'nav-menu__item';
    }
    return $classes;
}

// 2. Добавляем класс nav-menu__link для тега <a>
add_filter('nav_menu_link_attributes', 'add_my_menu_link_class', 10, 4);
function add_my_menu_link_class($atts, $item, $args, $depth)
{
    if ($args->theme_location === 'main') {
        $atts['class'] = 'nav-menu__link';
    }
    return $atts;
}