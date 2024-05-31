<?php 
	get_header();
?>

    <section class="single">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text">
                            <h1><?php echo get_the_title(); ?></h1>
            
                            <?php echo apply_filters('the_content', $post->post_content); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
	get_footer();
?>