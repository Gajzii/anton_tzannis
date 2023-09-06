<?php   
/**
 *  Template Name: Contact */
?>

<?php
    $phone_heading = get_field('contact_phone_heading');
    $phone = get_field('contact_phone');
    $address_heading = get_field('contact_address_heading');
    $address = get_field('contact_address');
    $zipcode = get_field('contact_zipcode');
    $mail = get_field('contact_mail'); 
    $facebook = get_field('contact_facebook');
?>


<?php get_header();?>
<div class="page-margin page-height">
    <h1 class="goldtext"><?php echo get_the_title(); ?></h1>
    <div class="center"><?php the_content(); ?></div>
    <div class="contact-page">
        <div>
            <div class="contact-information">  
                <!----------------- PHONE NUMBER ----------------->
                <div class="phone">
                    <div class="contact-heading">
                        <img alt="Salonens telefonnummer." class="contact-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/images/icons/icon-phone.png">
                        <h2 class="goldtext contact-header"><?= $phone_heading; ?></h2>
                    </div>

                    <a href="tel:+4586188277">
                        <p class="center">+45 <?= $phone; ?></p>
                    </a>
                </div>
                <!------------------- ADDRESS -------------------->
                <div class="address">
                    <div class="contact-heading">
                        <img alt="Salonens lokation." class="contact-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/images/icons/icon-location.png">
                        <h2 class="goldtext contact-header"><?= $address_heading; ?></h2>
                    </div>

                    <a target="_blank" href="https://goo.gl/maps/ZbdRa6aoySkK1iWF9">
                        <p class="center">
                            <?= $address; ?>
                            <br>
                            <?= $zipcode; ?>
                        </p>
                    </a>
                </div>
                <!-------------------- MAIL ---------------------->
                <div class="mail">
                    <div class="contact-heading">
                        <img alt="Salonens mail." class="mail-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/images/icons/icon-mail.png">
                        <h2 class="goldtext contact-header">Mail</h2>
                    </div>

                    <a href="mailto:anton-tzannis@hairtools.dk">
                        <p class="center"><?= $mail; ?></p>
                    </a>
                </div>
                <!------------------- FACEBOOK ------------------->
                <div class="facebook">
                    <div class="contact-heading">
                        <img alt="Salonens Facebook." class="contact-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/images/icons/icon-facebook.png">
                        <h2 class="goldtext contact-header">Facebook</h2>
                    </div>

                    <a target="_blank" href="https://www.facebook.com/AntonTzannis">
                        <p class="center"><?= $facebook; ?></p>
                    </a>
                </div>    
            </div>
            <!----------------------------------------->
            <img alt="Frisør Anton Tzannis’ logo." class="contact-logo"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/images/antontzannis_secondary-logo.svg" />
                
        </div>
        <div class="contact-map">
            <iframe class="contact-map-inner"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3142.1051971419192!2d10.205686892099356!3d56.16049524830549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c3f9664d62dd9%3A0x947605e35fcfb27b!2sN%C3%B8rregade%2053%2C%208000%20Aarhus!5e0!3m2!1sda!2sdk!4v1669634132310!5m2!1sda!2sdk"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<?php get_footer(); ?>