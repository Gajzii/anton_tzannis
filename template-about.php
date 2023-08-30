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
            <img class="about-logo"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/antontzannis_secondary-logo.svg" />
        </div>
        
        <img class="about-section-img" alt="anton tzannis"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/anton_tzannis.png" />
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