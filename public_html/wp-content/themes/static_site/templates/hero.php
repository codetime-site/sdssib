<?php $var = codetime_get_variables(['title', 'sub_title']); ?>
<pre> <?php print_r(get_fields()); ?> </pre>

<section class="hero" id="hero">
    <div class="hero__overlay"></div>
    <div class="hero__background">
    </div>

    <div class="container">
        <div class="hero__content">
            <?php if ($var['title']): ?>
                <h1 class="hero__title"><?= wp_kses_post($var['title']); ?> </h1>
            <?php endif; ?>

            <?php if ($var['sub_title']): ?>
                <p class="hero__subtitle"> <?= esc_html($var['sub_title']); ?> </p>
            <?php endif; ?>

            <div class="hero__actions">
                <?php if (have_rows('btns')):
                    while (have_rows('button')):
                        the_row();
                        $btn = codetime_get_variables(['btn', 'link', 'clrs']);
                        $btn['clrs'] = $btn['clrs'] ? "outline" : "primary"; ?>
                        <a href="<?= esc_url($btn['link']); ?>" class="btn btn-lg btn-<?= esc_attr($btn['clrs']); ?> ">
                            <?= esc_html($btn['btn']); ?>
                        </a>

                    <?php endwhile;
                endif; ?>
            </div>

            <div class="hero__features">


                <?php if (have_rows('Features')):
                    while (have_rows('Features')): the_row();
                        $rep = codetime_get_variables('icon', 'title', 'sub_title');
                        ?>
                        <div class="hero__feature">
                            <?php if (!empty($rep['icon'])): ?>
                                <div class="hero__feature-icon">
                                    <i><?php echo $rep['icon'] ?></i>
                                </div>
                            <?php endif; ?>
                            
                            <div class="hero__feature-text">
                                <?php if (!empty($rep['title'])): ?>
                                    <div class="hero__feature-title"><?= $rep['title'] ?></div>
                                <?php endif; ?>
                                <?php if (!empty($rep['sub_title'])): ?>
                                    <div class="hero__feature-desc"><?= $rep['sub_title'] ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>

    <div class="hero__scroll">
        <a href="#about" class="hero__scroll-link">
            <span>Прокрутите вниз</span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M12 5V19M12 19L5 12M12 19L19 12" stroke="currentColor" stroke-width="2" />
            </svg>
        </a>
    </div>
</section>