<?php $dataforordning = get_field('dataforordning', 'options'); ?>

<footer class="footer-background">
    <div class="footer-grid">
        <div class="footer-logo">
            <img class="footer-logo"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/antontzannis-logo-red.png" />
        </div>

        <div class="footer-links">
            <!-- ADRESS -->
            <?php echo '<a href="' . get_site_url() . '/contact">' ?>
            <h4><?php _e( 'Adresse' ); ?></h4>
            </a>

            <!-- CONTACT -->
            <?php echo '<a href="' . get_site_url() . '/contact">' ?>
            <h4>Kontakt</h4>
            </a>

            <!-- OPENING HOURS -->

            <?php echo '<a href="' . get_site_url() . '/#opening-hours-section">' ?>
            <h4>Åbningstider</h4>
            </a>

            <!-- DATAFORORDNING -->
            <a target="_blank" href="<?= $dataforordning['url']; ?>">
                <h4>Dataforordning</h4>
            </a>
        </div>
        <!-- COPYRIGHT -->
        <div class="footer-copyright">
            <h4>© <?php echo get_the_date('Y'); ?> Frisør Anton Tzannis</h4>
        </div>
    </div>

    <p class="footer-credit">m.wennerwald og c.nørgaard.</p>
</footer>

<?php wp_footer(); ?>
<?php wp_enqueue_script( 'script', get_template_directory_uri() . 'script.js', array( 'jquery' ), 1.1, true); ?>
</body>

</html>