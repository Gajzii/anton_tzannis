<?php   
/**
 *  Template Name: Prices */
?>

<?php get_header();?>

<div class="page-margin">
    <h1 class="goldtext"><?php echo get_the_title(); ?></h1>
    <div class="center"><?php the_content(); ?></div>
    <div class="whitespace"></div>
    <div class="prices-grid">
        <!----------------- HAIRCUT ----------------->
        <?php if ( have_rows('prices_cut') ) : ?>
        <div class="price-category haircut">
            <div class="price-category-heading">
                <img alt="Klipning af hår." class="price-category-heading-icon" alt="haircut icon"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/icon-haircut.svg" />
                <h2 class="goldtext price_heading"><?php echo esc_html( the_field('heading_cut') ); ?></h2>
            </div>

            <?php while ( have_rows('prices_cut') ) : the_row(); ?>
            <?php
                $service = get_sub_field('service');
                $price_specification = get_sub_field('price_specification');
                $service_price = get_sub_field('service_price');
                $price_format = get_sub_field('price_format');
            ?>

            <div class="price-category__item">
                <span class="service"><?= $service; ?></span>
                <div class="price-category__item-price">
                    <span><?= $price_specification; ?></span>
                    <span><?= $service_price; ?></span>
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
                <img alt="Øjenbryn og vipper." class="price-category-heading-icon" alt="brows and lashes icon"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/icon-brows_and_lashes.svg" />
                <h2 class="goldtext price_heading"><?php echo esc_html( the_field('heading_eye_brows_and_lashes') ); ?>
                </h2>
            </div>
            <?php while ( have_rows('prices_brows_and_lashes') ) : the_row(); ?>
            <?php
                $service = get_sub_field('service');
                $price_specification = get_sub_field('price_specification');
                $service_price = get_sub_field('service_price');
                $price_format = get_sub_field('price_format');
            ?>

            <div class="price-category__item">
                <span class="service"><?= $service; ?></span>
                <div class="price-category__item-price">
                    <span><?= $price_specification; ?>&nbsp;</span>
                    <span><?= $service_price; ?></span>
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
                <img alt="Hår permanent." class="price-category-heading-icon" alt="permanent curls icon"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/icon-permanent.svg" />
                <h2 class="goldtext price_heading"><?php echo esc_html( the_field('heading_perm') ); ?></h2>
            </div>
            <?php while ( have_rows('prices_permanent') ) : the_row(); ?>
            <?php
                $service = get_sub_field('service');
                $price_specification = get_sub_field('price_specification');
                $service_price = get_sub_field('service_price');
                $price_format = get_sub_field('price_format');
            ?>

            <div class="price-category__item">
                <span class="service"><?= $service; ?></span>
                <div class="price-category__item-price">
                    <span><?= $price_specification; ?>&nbsp;</span>
                    <span><?= $service_price; ?></span>
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
                <img alt="Generelle frisør ydelser og behandlinger." class="price-category-heading-icon" alt="other treatments icon"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/icon-other_treatments.svg" />
                <h2 class="goldtext price_heading"><?php echo esc_html( the_field('heading_other_treatment') ); ?></h2>
            </div>
            <?php while ( have_rows('prices_other_treatments') ) : the_row(); ?>
            <?php
                $service = get_sub_field('service');
                $price_specification = get_sub_field('price_specification');
                $service_price = get_sub_field('service_price');
                $price_format = get_sub_field('price_format');
            ?>

            <div class="price-category__item">
                <span class="service"><?= $service; ?></span>
                <div class="price-category__item-price">
                    <span><?= $price_specification; ?>&nbsp;</span>
                    <span><?= $service_price; ?></span>
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
                <img alt="Farvning af hår til ny hårfarve." class="price-category-heading-icon" alt="haircoloring icon"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/icon-coloring.svg" />
                <h2 class="goldtext price_heading"><?php echo esc_html( the_field('heading_colour') ); ?></h2>
            </div>
            <div class="price-category__item-coloring">
                <?php while ( have_rows('prices_coloring') ) : the_row(); ?>
                <?php
                $service = get_sub_field('service');
                $price_specification = get_sub_field('price_specification');
                $service_price = get_sub_field('service_price');
                $price_format = get_sub_field('price_format');
            ?>

                <div class="price-category__item">
                    <span class="service"><?= $service; ?></span>
                    <div class="price-category__item-price">
                        <span><?= $price_specification; ?>&nbsp;</span>
                        <span><?= $service_price; ?></span>
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