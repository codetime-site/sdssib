<?php while (have_rows("flex_page")): the_row(); ?>
    <?php if (get_row_layout() == "hero"): ?>
        <?php get_template_part("templates/hero"); ?>

    <?php elseif (get_row_layout() === "about"): ?>
        <?php get_template_part("templates/about"); ?>

    <?php elseif (get_row_layout() === "contacts"): ?>
        <?php get_template_part("templates/contacts"); ?>

    <?php elseif (get_row_layout() === "our_machine"): ?>
        <?php get_template_part("templates/our_machine"); ?>

    <?php elseif (get_row_layout() === "galary"): ?>
        <?php get_template_part("templates/galary"); ?>

    <?php elseif (get_row_layout() === "materials"): ?>
        <?php get_template_part("templates/materials"); ?>

    <?php elseif (get_row_layout() === "our_products"): ?>
        <?php get_template_part("templates/our_products"); ?>

    <?php elseif (get_row_layout() === "our_machine"): ?>
        <?php get_template_part("templates/our_machine"); ?>

    <?php elseif (get_row_layout() === "form_rec"): ?>
        <?php get_template_part("templates/form_rec"); ?>

    <?php elseif (get_row_layout() === "post_in_pages"): ?>
        <?php $acf_post_in_pages = get_sub_field('post_in_pages'); ?>
        <?php if ($acf_post_in_pages): ?>
            <?php foreach ($acf_post_in_pages as $post): setup_postdata($post); ?>
                <?php if (have_rows("flex_page")): ?>
                    <?php get_template_part("templates/flex/flex"); ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    <?php endif; ?>
<?php endwhile; ?>