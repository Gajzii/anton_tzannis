<footer>
    <div class="footer-grid">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img alt="Frisør Anton Tzannis’ logo." class="footer-logo"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/images/antontzannis-logo.svg" />
        </a>

        <?php wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'container_class' => 'footer-menu'
            )
        ); ?>
        <div class="footer-copyright">
            <h4>©<?php echo get_the_date('Y'); ?> Frisør Anton Tzannis</h4>
        </div>
    </div>
    <div class="credits">
        <p class="footer-credit">m.wennerwald og c.nørgaard</p>
        <p class="secondary-credit">
            <a href="https://icons8.com/" target="_blank">Icons by Icons8</a> | 
            <a href="https://www.freepik.com/" target="_blank">Stockphotos by Freepik</a>
        </p>
    </div>
</footer>