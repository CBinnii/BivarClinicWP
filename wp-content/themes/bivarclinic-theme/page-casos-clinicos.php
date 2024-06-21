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

<?php
	get_footer();
?>