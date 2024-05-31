<?php 
	get_header();

    $categories = get_the_category();
?>

    <section class="single">
        <div class="section">
            <div class="container">
                <div class="row m-0">
                    <div class="col-12" style="padding: 0 4px;">
                        <div class="text text-justify">
                            <div class="row row-adjust mb-3">
                                <div class="col-md-9">
                                    <h1><?php echo get_the_title(); ?></h1>
                                    <h3><?php echo $post->post_excerpt; ?></h3>
                                </div>

                                <div class="col-md-3 category">
                                    <p class="category-text"><span class="material-symbols-outlined primary">schedule</span><?php the_time( 'j F Y' ); ?></p>

                                    <?php
                                        if (!empty( $categories ) ) :
                                            foreach( $categories as $category ) : ?>
                                            <p class="category-text"><span class="material-symbols-outlined primary">folder_copy</span><a href="<?php echo get_home_url(); ?>/category/<?php echo $category->slug;?>" target="_blank"><?php echo $category->name;?></a></p>

                                            <?php endforeach;
                                        endif;
                                    ?>
                                </div>
                            </div>
            
                            <?php echo apply_filters('the_content', $post->post_content); ?>
                        </div>
                    </div>
                </div>

                <div class="gallery">
                    <div class="row row-adjust m-0">
                        <?php 
                            $youtube_url = get_field('youtube_url');
                            $youtube_thumb = get_field('youtube_thumb');
                            
                            if( $youtube_url && empty($youtube_thumb)) {
                                $video_id = explode("https://youtu.be/", trim($youtube_url, " "));
                                $video_id = $video_id[1];

                                $youtube_thumb = "http://img.youtube.com/vi/".$video_id."/hqdefault.jpg";
                            }
                        ?>
                            <a data-fslightbox="gallery_2" class="col-md-12" href="<?php echo $youtube_url; ?>">
                                <div class="image video" style="background-image: url('<?php echo $youtube_thumb; ?>');"></div>
                            </a>

                        <?php 
                            $images = get_field('images');
                            if( $images ):
                                foreach( $images as $image_id ): ?>
                                    <a data-fslightbox="gallery_1" class="col-md-6" href="<?php echo $image_id; ?>">
                                        <div class="image" style="background-image: url('<?php echo $image_id; ?>');"></div>
                                    </a>
                                <?php endforeach;
                            endif; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
	get_footer();
?>