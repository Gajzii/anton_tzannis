<?php   
/**
 *  Template Name: Produkter */
?>
<?php get_header(); ?>
<div class="page-margin">
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
            <div class="product_card_inner_background">
                <h3><?= $product_name; ?></h3>
                <div class="productdetails">
                    <p class="product_description"><?= $product_description; ?></p>
                    <form target="_blank" action="<?= $product_specification['url']; ?>">
                        <button class="goldbutton">Læs mere</button>
                    </form>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
    </div>

    <?php endif; ?>
</div>
<?php get_footer(); ?>