<?php get_header();?>

<div class="container">
    <!-- GET TITLE FRA WORDPRESS INDLÆG  -->
    <h1><?php the_title();?></h1>
    <?php get_template_part('includes/section', 'content');?>
    <?php get_template_part('partials/components/hero');?>
    <?php get_template_part('partials/components/salon-section');?>
    <?php get_template_part('partials/components/opening-hours-section');?>
    <?php get_template_part('partials/components/cta-btn-section');?>

</div>

<?php get_footer(); ?>