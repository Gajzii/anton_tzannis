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
                                <svg class="button-content-right" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 15 15"><path fill="currentColor" d="M8.293 2.293a1 1 0 0 1 1.414 0l4.5 4.5a1 1 0 0 1 0 1.414l-4.5 4.5a1 1 0 0 1-1.414-1.414L11 8.5H1.5a1 1 0 0 1 0-2H11L8.293 3.707a1 1 0 0 1 0-1.414Z"/></svg>
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