<!DOCTYPE html>
<html lang="ru">

<head>

    <?php $info = get_site_info(); ?>
    <meta charset="<?= $info["charset"]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $info["description"]; ?>">
    <meta name="keywords" content="<?php the_field('keyword', 'option'); ?>">
    <meta name="author" content="halil aliyew">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $info["name"]; ?>>
    <meta property=" og:description" content="<?= $info["description"]; ?>">

    <?php locate_template("inc/immidietly.php", true, true); ?>
    <!-- Google Fonts -->

    <title><?= $info["name"]; ?> </title>
    <?php wp_head(); ?>
</head>

<body>

    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">

                    <div class="site-logo">
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            // Если логотип не загружен — выводим название сайта ссылкой на главную
                            echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
                        }
                        ?>
                    </div>
s
                    <a href="#" class="logo">
                        <span class="logo__subtext">Machining</span>
                    </a>
                </div>

                <?php $args = [
                    'theme_location' => 'main',
                    'container' => 'nav',
                    'container_class' => 'header__nav',
                    'menu_class' => 'nav-menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ]; ?>

                <?php wp_nav_menu($args); ?>

                <div class="header__actions">
                    <a href="tel:+7(913) 788-88-86" class="header__phone">+7(913) 788-88-86</a>
                    <button class="btn btn-primary btn-sm" data-modal="callback">Заказать звонок</button>
                </div>

                <button class="header__burger" aria-label="Открыть меню" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>