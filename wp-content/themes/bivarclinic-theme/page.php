<?php 
	get_header();
?>

    <?php 
        $banner = get_field('banner');
    ?>
    <?php if ($banner) : ?>
        <div class="slider">
            <div class="banner" style="background-image: url(<?php echo $banner; ?>);"></div>
        </div>
    <?php endif; ?>

    <div class="section single">
        <div class="container">
            <h1 class="title-single"><?php echo get_the_title(); ?></h1>

            <?php echo apply_filters('the_content', $post->post_content); ?>
        </div>
    </div>

<?php
	get_footer();
?>