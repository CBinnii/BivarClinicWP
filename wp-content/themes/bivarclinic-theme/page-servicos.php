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

    <div class="section services">
        <div class="container">
            <h1 class="title-section primary">Serviços</h1>

            <div class="grid">
                <div class="row m-0">
                    <?php
                        $args = array(
                            'post_type' => 'servico',
                            'status' => 'publish',
                            'showposts' => -1,
                            'orderby' => 'date',
                            'order' => 'ASC'
                        );

                        $more = new WP_Query( $args );

                        if (!empty($more->posts)):
                            foreach ( $more->posts as $post ): /*echo '<pre>'; var_dump($post); echo '</pre>';*/ ?>
                                <div class="col-md-6 col-lg-3 p-0 d-flex justify-content-center mb-4">
                                    <figure class="effect-goliath">
                                        <?php if (has_post_thumbnail( $post->ID ) ) { ?>
                                            <div class="box-image">
                                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>" alt="<?php echo get_the_title($post->ID); ?>" />
                                            </div>
                                        <?php } else { ?>
                                            <div class="box-image">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no-image.jpg" alt="<?php echo get_the_title($post->ID); ?>" />
                                            </div>
                                        <?php } ?>
                                        <figcaption>
                                            <p><?php echo get_the_title($post->ID); ?></p>
                                            <a href="<?php echo $post->post_name; ?>">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            <?php endforeach;
                        endif;
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>

<?php
	get_footer();
?>