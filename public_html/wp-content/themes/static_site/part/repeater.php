
<?php while (have_rows($args)): the_row();
    $win_title = esc_html(get_sub_field("title") ?? "Заголовок не добавлен.");
    $win_sub_title = wp_kses_post(get_sub_field("sub_title") ?? "Под заголовок не добавлен.");
    $rep_icon = get_sub_field("icon");
    $win_img = get_sub_field("img") ? esc_url(get_sub_field("img")) : get_template_directory_uri() . "/assets/img/about-cnc.jpg";
    $win_btn = esc_html(get_sub_field("btn"));
    $icons = get_sub_field("icon_materials");
    $icons_title = get_sub_field("title_materials");
    

    // $rep = codetime_get_variables(['icon', 'title', 'sub_title']);
    ?>
    <?php if ($args === "win_btns"): ?>

        <div class="equipment__material">
            <?php if ($icons): ?>
                <span class="equipment__material-icon"> <?= $icons; ?> </span>
            <?php endif; ?>
            <?php if ($icons_title): ?>
                <span class="equipment__material-name"> <?= $icons_title; ?> </span>
            <?php endif; ?>
        </div>

    <?php elseif ($args === 'win'): ?>
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

    <?php elseif ($args === 'Features'): ?>
        <div class="hero__feature">

            <?php if ($rep_icon): ?>
                <div class="hero__feature-icon">
                    <i> <?= $rep_icon; ?> </i>
                </div>
            <?php endif; ?>

            <div class="hero__feature-text">

                <?php if ($win_title): ?>
                    <div class="hero__feature-title">
                        <?= esc_html($win_title) ?>
                    </div>
                <?php endif; ?>

                <?php if ($win_sub_title): ?>
                    <div class="hero__feature-desc">
                        <?= esc_html( $win_sub_title ); ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    <?php endif; ?>

<?php endwhile; ?>