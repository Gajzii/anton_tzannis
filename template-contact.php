<?php   
/**
 *  Template Name: Contact */
?>

<!-- <h1>PRiser</h1>
<h3>sub titiel</h3> -->

<?php get_header();?>
<div class="page-margin">
    <h1 class="goldtext text-padding">Priser</h1>
    <p>Priserne er opgivet i DKK.</p>
    <div class="prices-grid">
        <!----------------- HAIRCUT ----------------->
        <?php if ( have_rows('prices_cut') ) : ?>
        <div class="price-category haircut">
            <div class="price-category-heading">
                <img class="price-category-heading-icon" alt="haircut icon"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/haircut.svg" />
                <h2>Klip</h2>
            </div>

            <?php while ( have_rows('prices_cut') ) : the_row(); ?>
            <?php
                $product_name = get_sub_field('product_name');
                $price_specification = get_sub_field('price_specification');
                $product_price = get_sub_field('product_price');
                $price_format = get_sub_field('price_format');

            ?>
            <div class="price-category__item">
                <span><?= $product_name; ?></span>
                <div class="price-category__item-price">
                    <span><?= $price_specification; ?></span>
                    <span><?= $product_price; ?></span>
                    <span><?= $price_format; ?></span>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <!------------------- BROWS AND LASHES ----------------->
        <?php if ( have_rows('prices_brows_and_lashes') ) : ?>
        <div class="price-category brows">
            <div class="price-category-heading">
                <img class="price-category-heading-icon" alt="brows and lashes icon"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brows-and-lashes.svg" />
                <h2>Bryn og vipper</h2>
            </div>
            <?php while ( have_rows('prices_brows_and_lashes') ) : the_row(); ?>
            <?php
                $product_name = get_sub_field('product_name');
                $price_specification = get_sub_field('price_specification');
                $product_price = get_sub_field('product_price');
                $price_format = get_sub_field('price_format');

            ?>

            <div class="price-category__item">
                <span><?= $product_name; ?></span>
                <div class="price-category__item-price">
                    <span><?= $price_specification; ?>&nbsp;</span>
                    <span><?= $product_price; ?></span>
                    <span><?= $price_format; ?></span>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>


        <!------------------- PERMANENT ----------------->
        <?php if ( have_rows('prices_permanent') ) : ?>
        <div class="price-category permanent">
            <div class="price-category-heading">
                <img class="price-category-heading-icon" alt=""
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/permanent.svg" />
                <h2>Permanent</h2>
            </div>
            <?php while ( have_rows('prices_permanent') ) : the_row(); ?>
            <?php
                $product_name = get_sub_field('product_name');
                $price_specification = get_sub_field('price_specification');
                $product_price = get_sub_field('product_price');
                $price_format = get_sub_field('price_format');

            ?>

            <div class="price-category__item">
                <span><?= $product_name; ?></span>
                <div class="price-category__item-price">
                    <span><?= $price_specification; ?>&nbsp;</span>
                    <span><?= $product_price; ?></span>
                    <span><?= $price_format; ?></span>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <!------------------- OTHER TREATMENTS ----------------->
        <?php if ( have_rows('prices_other_treatments') ) : ?>
        <div class="price-category other-treatments">
            <div class="price-category-heading">
                <img class="price-category-heading-icon" alt=""
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/other-treatments.svg" />
                <h2>Anden behandling</h2>
            </div>
            <?php while ( have_rows('prices_other_treatments') ) : the_row(); ?>
            <?php
                $product_name = get_sub_field('product_name');
                $price_specification = get_sub_field('price_specification');
                $product_price = get_sub_field('product_price');
                $price_format = get_sub_field('price_format');

            ?>

            <div class="price-category__item">
                <span><?= $product_name; ?></span>
                <div class="price-category__item-price">
                    <span><?= $price_specification; ?>&nbsp;</span>
                    <span><?= $product_price; ?></span>
                    <span><?= $price_format; ?></span>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <!------------------- COLORING ----------------->
        <?php if ( have_rows('prices_coloring') ) : ?>
        <div class="price-category haircolor">
            <div class="price-category-heading">
                <img class="price-category-heading-icon" alt=""
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coloring.svg" />
                <h2>Farve</h2>
            </div>
            <div class="price-category__item-coloring">
                <?php while ( have_rows('prices_coloring') ) : the_row(); ?>
                <?php
                $product_name = get_sub_field('product_name');
                $price_specification = get_sub_field('price_specification');
                $product_price = get_sub_field('product_price');
                $price_format = get_sub_field('price_format');

            ?>
                <div class="price-category__item">
                    <span><?= $product_name; ?></span>
                    <div class="price-category__item-price">
                        <span><?= $price_specification; ?>&nbsp;</span>
                        <span><?= $product_price; ?></span>
                        <span><?= $price_format; ?></span>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>