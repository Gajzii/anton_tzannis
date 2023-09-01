<?php   
/**
 *  Template Name: Products */
?>
<?php get_header(); ?>
<div class="page-margin">
    <h1 class="goldtext"><?php echo get_the_title(); ?></h1>
    <div class="center"><?php the_content(); ?></div>
    <div class="whitespace"></div>


    <?php if ( have_rows('products') ) : ?>
    <div class="product_card">
        <?php while ( have_rows('products') ) : the_row(); ?>

        <?php
        $product_name = get_sub_field('product_name');
        $product_specification = get_sub_field('product_specification');
        $btn_text = get_sub_field('btn_text');
        $background_image = get_sub_field('background_image');
        $product_description = get_sub_field('product_description');
    ?>

        <div class="cta_card_inner product_card_inner" style="background-image: url(<?= $background_image['url']; ?>)">
            <div class="cta_card_inner_background">
                <h3 class="goldtext"><?= $product_name; ?></h3>
                <div class="ctadetails">
                    <p class="cta_description"><?= $product_description; ?></p>
                    <form target="_blank" action="<?= $product_specification['url']; ?>">
                        <button class="primary-btn center">
                            <span class="button-leftpart-primary">
                                <?= $btn_text; ?>
                            </span>
                            <span class="button-rightpart-primary">
                                <p class="button-content-right">&#129106;</p>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
    </div>

    <?php endif; ?>
</div>
<?php get_footer(); ?>