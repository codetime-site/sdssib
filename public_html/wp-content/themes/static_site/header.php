<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    //чтобы не обращатся в базу каждый раз выполняем один запрос 
    $names = ["name", "description", "charset", "html_type", "language", "template_directory"];
    $ct_bloginfo = array_fill_keys($names, "");
    foreach ($ct_bloginfo as $name => &$value) {
        $value = get_bloginfo($name);
    }
    unset($value);

    ?>

    <meta charset="<?= $ct_bloginfo["charset"]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $ct_bloginfo["description"]; ?>">
    <meta name="keywords" content="<?php the_field('keyword', 'option'); ?>">
    <meta name="author" content="halil aliyew">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $ct_bloginfo["name"]; ?>>
    <meta property=" og:description" content="<?= $ct_bloginfo["description"]; ?>">

    <?php locate_template("inc/immidietly.php", true, true); ?>
    <!-- Google Fonts -->

    <title><?= $ct_bloginfo["name"]; ?> </title>
    <?php wp_head(); ?>

    <style>
        a.logo>img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>
    <?php
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
    ?>


    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <a href="#" class="logo">
                        <img src="<?= $logo_url; ?>" alt="logo">
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