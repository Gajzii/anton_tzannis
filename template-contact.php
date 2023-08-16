<?php   
/**
 *  Template Name: Contact */
?>

<h1>PRiser</h1>
<h3>sub titiel</h3>

<?php if ( have_rows('pricet') ) : ?>
<div class="price-table">
    <?php while ( have_rows('repeater_field') ) : the_row(); ?>
    <?php
                $product_name = get_sub_field('product_name');
                $product_price = get_sub_field('product_name');
            ?>

    <div class="price-table__item">
        <span><?= $product_name; ?></span>
        <span><?= $product_price; ?></span>
    </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>