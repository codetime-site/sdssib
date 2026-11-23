<?php 
// get_template_part('inc/variables');
$var = codetime_get_variables(['title', 'sub_title']); ?>

<section class="hero" id="hero">
    <div class="hero__overlay"></div>
    <div class="hero__background"> </div>

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
                    while (have_rows('btns')): the_row();
                        $btn = codetime_get_variables(['btn', 'link', 'clrs']);
                        $btn['clrs'] = $btn['clrs'] ? "outline" : "primary"; ?>

                        <a href="<?= esc_url($btn['link']); ?>" class="btn btn-lg btn-<?= esc_attr($btn['clrs']); ?> ">
                            <?= esc_html($btn['btn']); ?>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="hero__features">
                <?php if (have_rows('Features')): ?>
                    <?php get_template_part( "/part/repeater", null, "Features" );?>
                <?php endif; ?>
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
    </div>
</section>