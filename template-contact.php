<?php   
/**
 *  Template Name: Contact */
?>

<?php get_header();?>

<div class="contact-hero">
    <div class="contact-hero-left">
    </div>



    <h1 style="display:none">Anton Tzannis</h1>

    <div class="contact-information">
        <!----------------- PHONE NUMBER ----------------->
        <div class="contact-heading">
            <iconify-icon class="contact-heading-icon" icon="material-symbols:phone-enabled" flip="horizontal">
            </iconify-icon>
            <h2>Kontakt</h2>
        </div>

        <a href="tel:+4586188277">
            <p class="contact-text">+45 <?php echo esc_html( get_field('contact_phone_number') ); ?></p>
        </a>

        <!----------------- ADRESS ----------------->
        <div class="contact-heading">
            <iconify-icon class="contact-heading-icon" icon="mdi:map-marker"></iconify-icon>
            <h2>Adresse</h2>
        </div>

        <a target="_blank" href="https://goo.gl/maps/ZbdRa6aoySkK1iWF9">
            <p class="contact-text">
                <?php echo esc_html( get_field('contact_adress') ); ?>
                <br>
                <?php echo esc_html( get_field('contact_zip_code') ); ?>
            </p>
        </a>
        <!----------------------------------------->
        <img class="contact-logo"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/antontzannis_secondary-logo.svg" />
    </div>

    <?php get_footer(); ?>