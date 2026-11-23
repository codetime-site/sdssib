<?php
// get_template_part('inc/variables');
$var = codetime_get_variables(['title', 'sub_title', 'sub_subs', 'img', 'img_title']);
?>

<section class="about section" id="about">
    <div class="container">
        <?php if ($var['title']): ?>
            <h2 class="section-title"><?= esc_html($var['title']) ?></h2> <?php endif; ?>
        <div class="about__content">

            <?php if ($var['img']): ?>
                <div class="about__image">
                    <img src="<?= $var['img'] ?>" alt="CNC оборудование" loading="lazy"> <?= $var['img_title']; ?>
                </div>
            <?php endif; ?>

            <div class="about__text">
                <?php if ($var['sub_title']): ?>
                    <h3 class="about__sub sub_title"><?= esc_html($var['sub_title']) ?></h3> <?php endif; ?>
                <?php if ($var['sub_subs']): ?>
                    <p class="about__description"><?= esc_html($var['sub_subs']) ?> </p> <?php endif; ?>

                <div class="about__features">

                    <?php if (have_rows("Features")): ?>
                        <?php while (have_rows("Features")): the_row();
                            $sub_vars = codetime_get_variables(['icon', 'title', 'sub_title']); ?>
                            <div class="about__feature">
                                <?php if ($sub_vars['icon']): ?>
                                    <div class="about__feature-icon"> <?= esc_html($sub_vars['icon']); ?> </div>
                                <?php endif; ?>
                                <div class="about__feature-content">
                                    <?php if ($sub_vars['title']): ?>
                                        <h4 class="about__feature-title"><?= esc_html($sub_vars['title']); ?></h4>
                                    <?php endif; ?>
                                    <?php if ($sub_vars['sub_title']): ?>
                                        <p class="about__feature-desc"><?= esc_html($sub_vars['sub_title']); ?></p>
                                    <?php endif; ?>
                                </div>

                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>

                <div class="about__actions">
                    <?php if (have_rows("btns")): ?>
                        <?php while (have_rows("btns")):
                            the_row();
                            $btn_vars = codetime_get_variables(['btn_title', 'btn_link', 'clrs']);
                            $btn_vars['clrs'] = $btn_vars['clrs'] ? "outline" : "primary"; ?>

                            <a href="<?= esc_url($btn_vars['btn_link']); ?>"
                                class="btn btn-<?= esc_attr($btn_vars['clrs']); ?>"><?= esc_html($btn_vars['btn_title']); ?>
                            </a>
                        <?php endwhile;
                    endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>