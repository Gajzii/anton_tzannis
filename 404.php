<?php   
/**
* The template for displaying 404 pages (Not Found) */
?>

<?php get_header(); ?>
<div class="page-margin">
    <h1 class="goldtext"><?php _e( 'Siden blev ikke fundet', 'anton_tzannis' ); ?></h1>

    <h4 class="center">
        <?php _e( 'Vi beklager, men den side, du forsøgte at besøge, eksisterer ikke.', 'anton_tzannis' ); ?></h4>

    <div class="page-not-found">
        <p><?php _e( 'Du kan prøve følgende:', 'anton_tzannis' ); ?></p>

        <ul class="page-not-found-ul">
            <li>
                <p><?php _e( 'Kontrollér, at du har skrevet adressen korrekt i adresselinjen.', 'anton_tzannis' ); ?>
                </p>
            </li>
            <li>
                <p><?php printf( __( 'Gå til <a href="%1$s">hjemmesiden</a>.', 'anton_tzannis' ), esc_url( home_url() ) ); ?>
                </p>
            </li>
            <li>
                <p><?php _e( 'Klik på tilbage-knappen i din browser for at gå til den side, du kom fra.', 'anton_tzannis' ); ?>
                </p>
            </li>
        </ul>
    </div>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img alt="Frisør Anton Tzannis’ logo." class="contact-logo center"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/images/antontzannis_secondary-logo.svg" />
    </a>
</div>


<?php get_footer(); ?>