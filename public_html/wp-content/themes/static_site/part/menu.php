<?php
// 1. Получаем все зарегистрированные области меню
$locations = get_nav_menu_locations();

// 2. Проверяем, привязано ли меню к области 'main'
if (isset($locations['main'])) {
    // Получаем массив всех пунктов этого меню
    $menu_items = wp_get_nav_menu_items($locations['main']); 

    // 3. Теперь у тебя есть чистый список (массив) $menu_items!
    // Выводим его как угодно через обычный foreach:
    if ($menu_items): ?>
        <ul class="footer__menu">
            <?php foreach ($menu_items as $item): ?>
                <li>
                    <a href="<?php echo esc_url($item->url); ?>">
                        <?php echo esc_html($item->title); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif;
}