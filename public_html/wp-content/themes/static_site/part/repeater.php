<?php
// reapeter  btns
if (have_rows('btns')): ?>
    <?php while (have_rows('btns')): the_row();
        $btn = codetime_get_variables(['btn', 'link', 'clrs']);
        $btn['clrs'] = $btn['clrs'] ? "outline" : "primary"; ?>

        <a href="<?= esc_url($btn['link']); ?>" class="btn btn-lg btn-<?= esc_attr($btn['clrs']); ?> ">
            <?= esc_html($btn['btn']); ?>
        </a>
    <?php endwhile; ?>
<?php endif; ?>

<?php
// reapeter   Features
if (have_rows('Features')):
    while (have_rows('Features')): the_row();
        $rep = codetime_get_variables(['icon', 'title', 'sub_title']); ?>
        <div class="hero__feature">
            <?php if (!empty($rep['icon'])): ?>
                <div class="hero__feature-icon"><i><?= $rep['icon'] ?></i> </div>
            <?php endif; ?>

            <div class="hero__feature-text">
                <?php if (!empty($rep['title'])): ?>
                    <div class="hero__feature-title"><?= esc_html($rep['title']) ?></div>
                <?php endif; ?>

                <?php if (!empty($rep['sub_title'])): ?>
                    <div class="hero__feature-desc"><?= esc_html($rep['sub_title']) ?></div>
                <?php endif; ?>
            </div>
        </div>
<?php endwhile; endif; ?>