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

    <div class="section blog" style="background: rgb(70,93,108); background: linear-gradient(180deg, rgba(70,93,108,1) 0%, rgba(255,255,255,1) 0%, rgba(104,143,164,1) 100%);">
        <div class="container">
            <h1 class="title-section">Blog</h1>

            <div class="row">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'status' => 'publish',
                        'showposts' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $more = new WP_Query( $args );

                    if (!empty($more->posts)):
                        foreach ( $more->posts as $post ): /*echo '<pre>'; var_dump($post); echo '</pre>';*/ ?>
                            <div class="col-sm-4 post">
                                <div class="img" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>');">
                                    <a href="<?php echo $post->post_name; ?>">
                                        <div class="overlay">
                                            <p><?php echo get_the_title($post->ID); ?></p>
                                        </div>

                                        <div class="see-more">
                                            Ver mais
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach;
                    endif;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>

<?php
	get_footer('contactos');
?>