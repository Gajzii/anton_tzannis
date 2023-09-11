<?php   
/**
 *  Template Name: About */
?>

<?php get_header();?>

<div class="page-margin">
    <h1 class="goldtext"><?php echo get_the_title(); ?></h1>
    <div class="whitespace"></div>
    <div class="about-section-flex">
        <div class="about-section-description">
            <p><?php the_content(); ?></p>
            <img alt="Frisør Anton Tzannis’ logo." class="about-logo"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/images/antontzannis_secondary-logo.svg" />
        </div>

        <img alt="Profilbillede af salonens ejer og frisør Anton Tzannis." class="about-section-img" alt="anton tzannis"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/images/at_profile_compressed.jpg" />
    </div>
</div>

<?php
    $red_floor_description_heading = get_field('red_floor_description_heading');
    $red_floor_description = get_field('red_floor_description');
?>

<div class="about-salon-section">
    <div class="about-salon-section-description">
        <h2 class="goldtext"><?= $red_floor_description_heading; ?></h2>
        <p><?= $red_floor_description; ?></p>
    </div>
</div>

<?php get_footer(); ?>