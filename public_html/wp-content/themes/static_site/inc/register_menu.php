<?php
function codetime_reg_menu(){
	register_nav_menu('main', 'Главный меню');
	register_nav_menu('footer', 'Подвал меню');
	register_nav_menu('mobile', 'Мобилный меню');
}
add_action('init', 'codetime_reg_menu');



function get_cached_menu_items( $location = 'main' ) {
    // static запоминает результат для каждой области меню
    static $cached_menus = array();

    // Если это меню еще не запрашивали — идем в базу ОДИН раз
    if ( ! isset( $cached_menus[ $location ] ) ) {
        $locations = get_nav_menu_locations();
        
        if ( isset( $locations[ $location ] ) ) {
            $cached_menus[ $location ] = wp_get_nav_menu_items( $locations[ $location ] );
        } else {
            $cached_menus[ $location ] = array();
        }
    }

    // Возвращаем готовый массив из памяти
    return $cached_menus[ $location ];
}