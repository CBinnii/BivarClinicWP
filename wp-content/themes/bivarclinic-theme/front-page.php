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

    <div class="section about">
        <div class="container">
            <div class="row">
                <div class="col-md-3 left">
                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>" alt="Imagem com 2 pessoas conversando">

                    <p class="name">Bívar Clinic</p>
                    <p class="signature">by Eduardo Matos</p>
                </div>
                <div class="col-md-9 right">
                    <h1 class="title-section primary right">Sobre nós</h1>
    
                    <?php echo apply_filters('the_content', $post->post_content); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="section services">
        <div class="container">
            <h1 class="title-section primary">Serviços</h1>

            <div class="grid">
                <div class="row m-0">
                    <?php
                        $args = array(
                            'post_type' => 'servico',
                            'status' => 'publish',
                            'showposts' => 4,
                            'orderby' => 'date',
                            'order' => 'ASC'
                        );

                        $more = new WP_Query( $args );

                        if (!empty($more->posts)):
                            foreach ( $more->posts as $post ): ?>
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

    <div class="section clinic-case">
        <div class="container">
            <h1 class="title-section primary">Casos clínicos</h1>

            <div class="row">
                    <div class="col-lg-3">
                        <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link mb-3 p-3 shadow active" id="body-tab" data-toggle="pill" href="#body" role="tab" aria-controls="body" aria-selected="true">
                                <i class="fa fa-user-circle-o mr-2"></i>
                                <span class="font-weight-bold small text-uppercase title-tab">Corpo</span>

                                <div class="nav-pills-content">
                                    <div class="swiper-pagination swiper-pagination-body"></div>
                                </div>
                            </a>
        
                            <a class="nav-link mb-3 p-3 shadow" id="face-tab" data-toggle="pill" href="#face" role="tab" aria-controls="face" aria-selected="false">
                                <i class="fa fa-calendar-minus-o mr-2"></i>
                                <span class="font-weight-bold small text-uppercase title-tab">Face</span>

                                <div class="nav-pills-content">
                                    <div class="swiper-pagination swiper-pagination-face"></div>
                                </div>
                            </a>
                        </div>
                    </div>
        
                    <div class="col-lg-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade shadow rounded bg-white show active overflow-hidden" id="body" role="tabpanel" aria-labelledby="body-tab">
                                <div class="swiper mySwiperBody">
                                    <div class="swiper-wrapper">
                                        <?php
                                            $catBody = get_category_by_slug('corpo'); 
                                            $args = array(
                                                'post_type' => 'caso-clinico',
                                                'status' => 'publish',
                                                'showposts' => -1,
                                                'cat' => $catBody->term_id,
                                                'orderby' => 'date',
                                                'order' => 'ASC'
                                            );

                                            $more = new WP_Query( $args );

                                            if (!empty($more->posts)):
                                                foreach ( $more->posts as $post ): ?>
                                                    <div class="swiper-slide">
                                                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>" alt="Imagem <?php echo get_the_title($post->ID); ?>">
                                                        <div class="about-slider">
                                                            <a href="<?php echo $post->post_name; ?>"><?php echo get_the_title($post->ID); ?></a>
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow.svg" alt="Arrow">
                                                        </div>
                                                    </div>
                                                <?php endforeach;
                                            endif;
                                        wp_reset_query(); ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade shadow rounded bg-white overflow-hidden" id="face" role="tabpanel" aria-labelledby="face-tab">
                                <div class="swiper mySwiperFace">
                                    <div class="swiper-wrapper">
                                        <?php
                                            $catFace = get_category_by_slug('face'); 
                                            $args = array(
                                                'post_type' => 'caso-clinico',
                                                'status' => 'publish',
                                                'showposts' => -1,
                                                'cat' => $catFace->term_id,
                                                'orderby' => 'date',
                                                'order' => 'ASC'
                                            );

                                            $more = new WP_Query( $args );

                                            if (!empty($more->posts)):
                                                foreach ( $more->posts as $post ): ?>
                                                    <div class="swiper-slide">
                                                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>" alt="Imagem <?php echo get_the_title($post->ID); ?>">
                                                        <div class="about-slider">
                                                            <a href="<?php echo $post->post_name; ?>"><?php echo get_the_title($post->ID); ?></a>
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow.svg" alt="Arrow">
                                                        </div>
                                                    </div>
                                                <?php endforeach;
                                            endif;
                                        wp_reset_query(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="section blog">
        <div class="container">
            <h1 class="title-section">Blog</h1>

            <div class="row">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'status' => 'publish',
                        'showposts' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $more = new WP_Query( $args );

                    if (!empty($more->posts)): ?>
                            <div class="col-sm-4 post">
                                <div class="img" style="background-image: url('<?php echo wp_get_attachment_url($more->posts[0]->ID, 'full');?>');">
                                    <a href="<?php echo $more->posts[0]->post_name; ?>">
                                        <div class="overlay">
                                            <p><?php echo get_the_title($more->posts[0]->ID); ?></p>
                                        </div>
            
                                        <div class="see-more">
                                            Ver mais
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 post-2">
                                <div class="img" style="background-image: url(<?php echo wp_get_attachment_url($more->posts[1]->ID, 'full');?>');">
                                    <a href="<?php echo $more->posts[1]->post_name; ?>">
                                        <div class="overlay">
                                            <p><?php echo get_the_title($more->posts[1]->ID); ?></p>
                                        </div>
            
                                        <div class="see-more">
                                            Ver mais
                                        </div>
                                    </a>
                                </div>
                                <hr class="divider">
                                <div class="img" style="background-image: url('<?php echo wp_get_attachment_url($more->posts[2]->ID, 'full');?>');">
                                    <a href="<?php echo $more->posts[2]->post_name; ?>">
                                        <div class="overlay">
                                            <p><?php echo get_the_title($more->posts[2]->ID); ?></p>
                                        </div>
            
                                        <div class="see-more">
                                            Ver mais
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 post">
                                <div class="img" style="background-image: url('<?php echo wp_get_attachment_url($more->posts[3]->ID, 'full');?>');">
                                    <a href="<?php echo $more->posts[3]->post_name; ?>">
                                        <div class="overlay">
                                            <p><?php echo get_the_title($more->posts[3]->ID); ?></p>
                                        </div>
            
                                        <div class="see-more">
                                            Ver mais
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php
                    endif;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>

<?php
	get_footer();
?>