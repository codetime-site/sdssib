<!DOCTYPE html>
<html lang="ru">

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
<style>
    a.logo>img {
        width: 50px;
        height: 50px;
    }
</style>
</head>

<body>
    <?php
    $logo_url = wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full');
    ?>


    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <a href="#" class="logo">
                        <img src="<?= $logo_url; ?>" alt="logo">
                    </a>
                </div>

                <?php $menu_items = get_cached_menu_items('main'); ?>
                <?php if ($menu_items): ?>
                    <nav class="header__nav">
                        <ul class="nav-menu">
                            <?php foreach ($menu_items as $item): ?>
                                <li class="nav-menu__item">
                                    <a href="<?php echo esc_url($item->url); ?>" class="nav-menu__link">
                                        <?php echo esc_html($item->title); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                <?php endif; ?>

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