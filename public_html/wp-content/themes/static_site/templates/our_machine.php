<?php $title = esc_html(get_sub_field("title") ?? " Заголовок не добавлен.");
$repeater = "win";

?>
<pre>
    <?php print_r(get_fields()); ?>
</pre>
<section class="equipment section bg-dark" id="equipment">
    <div class="container">
        <?php if ($title): ?>
            <h2 class="section-title text-white"> <?= $title; ?> </h2>
        <?php endif; ?>
        <div class="equipment__grid">

            <?php if (have_rows($repeater)):
                while (have_rows($repeater)):
                    the_row();
                    $win_img = get_sub_field("img") ? esc_url(get_sub_field("img")) : get_template_directory_uri() . "/assets/img/about-cnc.jpg";
                    $win_btn = esc_html(get_sub_field("btn"));
                    $win_title = esc_html(get_sub_field("title") ?? "Заголовок не добавлен.");
                    $win_sub_title = wp_kses_post(get_sub_field("sub_title") ?? "Под заголовок не добавлен.");
                    ?>

                    <div class="equipment__card">

                        <?php if ($win_img): ?>
                            <div class="equipment__card-image">
                                <img src="<?= $win_img; ?>" alt="<?= $win_title; ?>" loading="lazy">
                                <div class="equipment__card-overlay">
                                    <span class="equipment__card-badge"><?= $win_title; ?></span>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="equipment__card-content">
                            <?php if ($win_title): ?>
                                <h3 class="equipment__card-title"> <?= $win_title; ?></h3>
                            <?php endif; ?>
                            <?= $win_sub_title; ?>
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>

        <?php if (have_rows("win_btns")): ?>
            <div class="equipment__materials">
                <h3 class="equipment__materials-title">Материалы для обработки</h3>
                <div class="equipment__materials-list">
                    <?php while (have_rows("win_btns")): the_row();
                        $icons = get_sub_field("icon_materials");
                        $icons_title = get_sub_field("title_materials");
                        ?>

                        <div class="equipment__material">
                            <?php if($icons):?>
                                <span class="equipment__material-icon"><?= $icons;?></span>
                            <?php endif;?>
                            <?php if($icons_title):?>
                                <span class="equipment__material-name"><?= $icons_title;?></span>
                            <?php endif;?>
                        </div>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>