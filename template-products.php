<?php   
/**
 *  Template Name: Products */
$card_counter = 0; 
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
                $btn_text = get_sub_field('btn_text');
                $background_image = get_sub_field('background_image');
                $product_description = get_sub_field('product_description');
                $images = get_sub_field('product_gallery');
            ?>

        <div class="cta_card_inner product_card_inner" style="background-image: url(<?= $background_image['url']; ?>)">
            <div class="cta_card_inner_background">
                <h3 class="goldtext"><?= $product_name; ?></h3>
                <div class="ctadetails">
                    <p class="cta_description"><?= $product_description; ?></p>
                    <button class="primary-btn center openModal">
                        <span class="button-leftpart-primary">
                            <?= $btn_text; ?>
                        </span>
                        <span class="button-rightpart-primary">
                            <img class="button-content-right"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/images/icons/arrow.png" />
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="modal productsPopupModal" id="card-<?php echo $card_counter; ?>">
            <div class="products-popup productsPopup" id="cards-<?php echo $card_counter; $card_counter += 1; ?>">
                <div class="products-popup-heading">
                    <button type="button" class="products-close-popup goldtext closeModal">&#10006;</button>
                    <h3 class="goldtext center"><?= $product_name; ?></h3>
                </div>
                <div class="products-slideshow">
                    <?php if($images): ?>
                    <?php foreach( $images as $image ): ?>
                    <img class="productsSlideImg" src="<?php echo $image['url']; ?>" />
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <button class="slideshow-arrow-left goldtext"
                        onclick="decrementSlideIndex(this.closest('.productsPopup'))">&#10094;</button>
                    <button class="slideshow-arrow-right goldtext"
                        onclick="incrementSlideIndex(this.closest('.productsPopup'))">&#10095;</button>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>