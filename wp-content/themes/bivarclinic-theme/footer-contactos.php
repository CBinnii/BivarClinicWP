
        </section>

        <footer class="footer">
            <?php 
                $texto_footer = get_field('texto_footer','option');
            ?>
			<div class="container">
				<p><?php echo $texto_footer; ?></p>
			</div>
        </footer>

		<div id="pestana">
            <?php 
                $imagem = get_field('imagem','option');
                $link = get_field('link','option');
            ?>
			<div class="pestana_wrapper fullwidth">
				<div id="pestana_top">
					<img class="show" width="93" height="93" src="<?php echo $imagem; ?>" alt="Dr Eduardo Matos">
				</div>
		
				<div id="pestana_bottom">
					<span class="close_popup">x</span>
					<a class="cta" href="<?php echo $link; ?>" target="_blank">Pedir orçamento</a>
				</div>
			</div>
		</div>
        
		<!-- Swiper JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
		<!-- App JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>

		<!-- Initialize Swiper -->
		<script>
            var corpo = [];
            var face = [];

            <?php
                $catBody = get_category_by_slug('corpo'); 

                $argsBody = array(
                    'post_type' => 'servico',
                    'status' => 'publish',
                    'showposts' => 4,
                    'cat' => $catBody->term_id,
                    'orderby' => 'date',
                    'order' => 'ASC'
                );

                $moreBody = new WP_Query( $argsBody );
                if (!empty($moreBody->posts)): 
                    foreach ( $moreBody->posts as $post ):
                    endforeach;
                endif;
                wp_reset_query(); 
            ?>
            
            <?php
                $catFace = get_category_by_slug('face'); 

                $argsFace = array(
                    'post_type' => 'servico',
                    'status' => 'publish',
                    'showposts' => 4,
                    'cat' => $catFace->term_id,
                    'orderby' => 'date',
                    'order' => 'ASC'
                );

                $moreFace = new WP_Query( $argsFace );
                

                if (!empty($moreFace->posts)):
                    foreach ( $moreFace->posts as $post ):
                        
                    endforeach;
                endif;
                wp_reset_query(); 
            ?>

			var corpo = ['MAMOPLASTIA DE REDUÇÃO', 'MAMOPLASTIA DE AUMENTO', 'MASTOPEXIA SEM PROTÉSES', 'MASTOPEXIA COM PRÓTESES', 'LIPOBODYLIFT', 'LIPOABDOMINOPLASTIA 360 HD', 'LIPOESCULTURA', 'LIPOASPIRAÇÃO E LIPO ESCULTURA', 'MOMMY MAKEOVER' ]
			var face = [ 'RINOPLASTIA', 'BLEFAROPLASTIA', 'OTOPLASTIA', 'FENDA LABIAL', 'TOXINA BOTULINICA', 'PREENCHIMENTOS', 'PEELING FACIAL' ]

			var menu = [ 'MAMOPLASTIA DE REDUÇÃO', 'MAMOPLASTIA DE AUMENTO', 'MASTOPEXIA SEM PROTÉSES', 'MASTOPEXIA COM PRÓTESES', 'LIPOBODYLIFT', 'LIPOABDOMINOPLASTIA 360 HD', 'LIPOESCULTURA', 'LIPOASPIRAÇÃO E LIPO ESCULTURA', 'MOMMY MAKEOVER', 'RINOPLASTIA', 'BLEFAROPLASTIA', 'OTOPLASTIA', 'FENDA LABIAL', 'TOXINA BOTULINICA', 'PREENCHIMENTOS', 'PEELING FACIAL'];

			var swiper = new Swiper(".mySwiper", {
				pagination: {
					el: ".swiper-pagination",
					clickable: true,
					renderBullet: function (index, className) {
						return '<span class="' + className + '">' + ((menu[index])) + "</span>";
					},
				},
			});

			var swiper = new Swiper(".mySwiperBody", {
				pagination: {
					el: ".swiper-pagination-body",
					clickable: true,
					renderBullet: function (index, className) {
						return '<span class="' + className + '">' + ((corpo[index])) + "</span>";
					},
				},
			});

			var swiper = new Swiper(".mySwiperFace", {
				pagination: {
					el: ".swiper-pagination-face",
					clickable: true,
					renderBullet: function (index, className) {
						return '<span class="' + className + '">' + ((face[index])) + "</span>";
					},
				},
			});
		</script>
	</body>
</html>