<?php $title = esc_html(get_sub_field("title") ?? " Заголовок не добавлен.");
?>
<section class="equipment section bg-dark" id="equipment">
    <div class="container">
        <?php if ($title): ?>
            <h2 class="section-title text-white"> <?= $title; ?> </h2>
        <?php endif; ?>
        <div class="equipment__grid">
            <?php if (have_rows("win")): ?>
                <?php get_template_part('/part/repeater', null, 'win'); ?>
            <?php endif; ?>
        </div>
        <?php if (have_rows("win_btns")): ?>
            <div class="equipment__materials">
                <h3 class="equipment__materials-title">Материалы для обработки</h3>
                <div class="equipment__materials-list">
                    <?php get_template_part('/part/repeater', null, 'win_btns'); ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>