<?php   
/**
 *  Template Name: Contact */
?>

<?php get_header();?>

<div class="contact-hero">
    <div class="contact-hero-left">


    </div>

    <div class="contact-hero-right">
        <iframe class="adress-map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3142.1051971419192!2d10.205686892099356!3d56.16049524830549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c3f9664d62dd9%3A0x947605e35fcfb27b!2sN%C3%B8rregade%2053%2C%208000%20Aarhus!5e0!3m2!1sda!2sdk!4v1669634132310!5m2!1sda!2sdk"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <h1 style="display:none">Anton Tzannis</h1>

    <div class="contact-information">
        <!----------------- PHONE NUMBER ----------------->
        <div class="contact-heading">
            <iconify-icon class="contact-heading-icon" icon="material-symbols:phone-enabled" flip="horizontal">
            </iconify-icon>
            <h2 class="goldtext contact-h2">Kontakt</h2>
        </div>

        <a href="tel:+4586188277">
            <p class="contact-text">+45 <?php echo esc_html( get_field('contact_phone_number') ); ?></p>
        </a>

        <!----------------- ADRESS ----------------->
        <div class="contact-heading">
            <iconify-icon class="contact-heading-icon" icon="mdi:map-marker"></iconify-icon>
            <h2 class="goldtext contact-h2">Adresse</h2>
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