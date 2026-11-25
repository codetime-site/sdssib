<?php
function codetime_reg_menu(){
	register_nav_menu('main', 'Главный меню');
	register_nav_menu('footer', 'Подвал меню');
	register_nav_menu('mobile', 'Мобилный меню');
}
add_action('init', 'codetime_reg_menu');