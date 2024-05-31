        <footer class="footer">
            <div class="container">
                <div class="partner">
                    <?php echo the_field('text_footer', 'option'); ?>
                </div>
            </div>
        </footer>

		<?php wp_footer(); ?>
        <!-- Bootstrap JS -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
        <!-- App JS -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
    </body>
</html>