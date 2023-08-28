<footer>
    <div class="footer-background">
        <div class="footer-grid">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class="footer-logo"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/antontzannis-logo-red.png" />
            </a>

            <?php wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'container_class' => 'footer-menu',
                )
                );
            ?>

            <div class="footer-copyright">
                <h4>©<?php echo get_the_date('Y'); ?> Frisør Anton Tzannis</h4>
            </div>
        </div>
        <p class="footer-credit">m.wennerwald og c.nørgaard.</p>
    </div>
    </div>
</footer>