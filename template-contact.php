<?php   
/**
 *  Template Name: Contact */
?>

<h1>PRiser</h1>
<h3>sub titiel</h3>

<?php if ( have_rows('prices_cut') ) : ?>
<div class="price-table">
    <?php while ( have_rows('prices_cut') ) : the_row(); ?>
    <?php
                $product_name = get_sub_field('product_name');
                $product_price = get_sub_field('product_price');
            ?>

    <div class="price-table__item">
        <span><strong><?= $product_name; ?></strong><?= $product_price; ?>,-</span>
    </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>