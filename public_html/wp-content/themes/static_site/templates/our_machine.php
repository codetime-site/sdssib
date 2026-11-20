<?php
$title = esc_html(get_sub_field("title") ?? " Заголовок не добавлен.");
$repeater = "win";
?>

<section class="equipment section bg-dark" id="equipment">
    <div class="container">
        <h2 class="section-title text-white"> <?php echo $title; ?> </h2>

        <div class="equipment__grid">

            <?php if (have_rows($repeater)): while (have_rows($repeater)): the_row();
                    $win_img = get_sub_field("img") ? esc_url(get_sub_field("img")) : get_template_directory_uri() . "/assets/img/about-cnc.jpg";
                    $win_btn = esc_html(get_sub_field("btn"));
                    $win_title = esc_html(get_sub_field("title") ?? "Заголовок не добавлен.");
                    $win_sub_title = wp_kses_post( get_sub_field("sub_title") ?? "Под заголовок не добавлен.");
                    ?>

                    <div class="equipment__card">

                        <?php if ($win_img): ?>
                            <div class="equipment__card-image">
                                <img src="<?= $win_img; ?>" alt="Токарный станок с ЧПУ" loading="lazy">
                                <div class="equipment__card-overlay">
                                    <span class="equipment__card-badge">Токарная обработка</span>
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
                <?php endwhile; endif; ?>
        </div>
    </div>
</section>