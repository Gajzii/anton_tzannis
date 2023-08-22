<footer class="footer-background">

    <div class="footer-grid">


        <div class="footer-logo">
            <img class="footer-logo"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/antontzannis-logo-red.png" />
        </div>

        <div class="footer-links">
            <!-- ADRESS -->
            <?php echo '<a href="' . get_site_url() . '/contact">' ?>
            <h4>Adresse</h4>
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
            <h4>
                <?php if( get_field('dataforordning') ): ?>
                <a href="<?php the_field('dataforordning'); ?>">d</a>
                <?php endif; ?>
            </h4>
        </div>
        <!-- COPYRIGHT -->
        <div class="footer-copyright">
            <h4>©2023 Frisør Anton Tzannis</h4>
        </div>
    </div>

    <p class="footer-credit">m.wennerwald og c.nørgaard.</p>



</footer>

<?php wp_footer(); ?>
<?php wp_enqueue_script( 'script', get_template_directory_uri() . 'script.js', array( 'jquery' ), 1.1, true); ?>
</body>

</html>
<!-- HVOR SKAL REFERANCEN VÆRE? -->
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>