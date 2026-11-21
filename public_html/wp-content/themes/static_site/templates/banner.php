<?php /*// $featured_posts = get_sub_field('banner_logically');
if /* ($featured_posts): ?>
    <?php foreach ($featured_posts as $post): setup_postdata($post); ?>
        <?php if (have_rows("flex_page")): ?>
            <?php get_template_part("templates/flex/flex"); ?>
        <?php endif; ?>
    <?php endforeach;
    wp_reset_postdata(); ?>
<?php endif; */?>

<?php 
$test = get_sub_field("test_hello");
    
if($test):?> <h1> <?= $test;?> </h1>     <?php endif; ?>

