<?php get_header(); ?>

<div class="container">
    <h1><?php the_title();?></h1>
    <?php get_template_part('includes/section', 'content');?>
    <?php get_template_part('partials/components/hero');?>
    <?php get_template_part('partials/components/salon-section');?>

</div>

<?php get_footer(); ?>