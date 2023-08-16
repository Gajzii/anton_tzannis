<?php   
/**
 *  Template Name: Produkter */
?>
<?php get_header(); ?>

<h1><?php echo get_the_title(); ?></h1>
<p><?php the_content(); ?></p>

<?php if ( have_rows('products') ) : ?>
<div class="product_card">
    <?php while ( have_rows('products') ) : the_row(); ?>

    <?php
        $product_name = get_sub_field('product_name');
        $product_specification = get_sub_field('product_specification');
        $background_image = get_sub_field('background_image');
        $product_description = get_sub_field('product_description');
    ?>

    <div class="product_card_inner" style="background-image: url(<?= $background_image['url']; ?>)">
        <h4><?= $product_name; ?></h4>
        <p><?= $product_description; ?></p>
        <form target="_blank" action="<?= $product_specification['url']; ?>">
            <button>Læs mere</button>
        </form>
        
    </div>

    <?php endwhile; ?>
</div>

<?php endif; ?>
<?php get_footer(); ?>