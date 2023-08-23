<?php   
/**
 *  Template Name: About */
?>

<?php get_header();?>

<div class="page-margin">
    <h1 class="goldtext"><?php echo get_the_title(); ?></h1>

    <div class="about-section-flex">
        <div class="about-section-description">
            <h2 class="goldtext about-section-description-heading">Anton Tzannis</h2>
            <p><?php echo esc_html( the_field('about_description') ); ?></p>
        </div>
        <img class="about-section-img" alt="anton tzannis"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/anton-tzannis.jpg" />
    </div>
</div>
<div class="about-salon-section">
    <div class="about-salon-section-description">
        <h2 class="goldtext">Frisøren med det røde gulv</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat.</p>
    </div>
</div>

<?php get_footer(); ?>