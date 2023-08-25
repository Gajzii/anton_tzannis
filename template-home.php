<?php   
/**
 *  Template Name: Home */
?>

<?php get_header();?>
<!-- HERO VIDEO -->
<div class="hero">
    <video class="hero-video" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero.mp4" autoplay muted
        loop>
    </video>

    <div class="hero-container">
        <h1 class="hero-text">Anton Tzannis | Bedste frisør i Aarhus</h1>
        <div class="hero-btn-container">
            <a href="https://salonbook.one/?anton-tzannis#/" target="_blank">
                <button class="hero-btn">
                    Book tid online
                </button>
            </a>
            <?php echo '<a href="' . get_site_url() . '/prices">' ?>
            <button class="gradient-border-mask">
                Se priser
            </button>
            </a>
        </div>
    </div>
</div>
<!-- CTA SECTION -->
<div class="cta-btn-section-container">
    <div class="page-margin">
        <div class="cta-section">
            <!--- FACEBOOK CTA --->
            <div class="cta_card_inner"
                style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cta-facebook.jpg)">
                <div class="cta_card_inner_background">
                    <h3 class="goldtext">Følg os på Facebook</h3>
                    <div class="ctadetails">
                        <p class="cta_description">Følg os på vores Facebook-side for nyheder mv.</p>
                        <form action="https://www.facebook.com/AntonTzannis" target="_blank">
                            <button class="primary-btn center">
                                <span class="button-leftpart-primary">
                                    Gå til Facebook
                                </span>
                                <span class="button-rightpart-primary">
                                    <iconify-icon class="button-content-right"
                                        icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="primary-whitespace-horizontal"></div>
            <!--- PRODUCTS CTA --->
            <div class="cta_card_inner"
                style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products.webp)">
                <div class="cta_card_inner_background">
                    <h3 class="goldtext">Se produkter</h3>
                    <div class="ctadetails">
                        <p class="cta_description">Vi forhandler en række eksklusive produkter i butikken.</p>
                        <?php echo '<form action="' . get_site_url() . '/products">' ?>
                        <button class="primary-btn center">
                            <span class="button-leftpart-primary">
                                Gå til produkter
                            </span>
                            <span class="button-rightpart-primary">
                                <iconify-icon class="button-content-right"
                                    icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                            </span>
                        </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="primary-whitespace-horizontal"></div>
            <!--- OFFER CTA --->
            <div class="cta_card_inner"
                style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scissor.webp)">
                <div class="cta_card_inner_background">
                    <h3 class="goldtext">Vi giver studierabat</h3>
                    <div class="ctadetails">
                        <p class="cta_description">Har du studiekort, trækker vi 10% fra prisen på klip.</p>
                        <?php echo '<form action="' . get_site_url() . '/prices">' ?>
                        <button class="primary-btn center">
                            <span class="button-leftpart-primary">
                                Gå til priser
                            </span>
                            <span class="button-rightpart-primary">
                                <iconify-icon class="button-content-right"
                                    icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                            </span>
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----------- OPENING HOURS SECTION ----------->
<div class="opening-hours-section page-margin" id="opening-hours-section">
    <div class="opening-hours-container">

        <!-- MONDAY -->
        <?php if ( have_rows('opening_hours_monday') ) : ?>
        <?php while ( have_rows('opening_hours_monday') ) : the_row(); ?>
        <?php
                $monday = get_sub_field('monday');
                $time_opening = get_sub_field('time_opening');
                $time_closed = get_sub_field('time_closed');
            ?>

        <div class="monday">
            <h2 class="opening-hours-days goldtext"><?= $monday; ?></h2>

            <div class="opening-hours-time">
                <p><?= $time_opening; ?></p>
                <p>&nbsp;-&nbsp;</p>
                <p><?= $time_closed; ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <!-- TUESDAY -->
        <?php if ( have_rows('opening_hours_tuesday') ) : ?>
        <?php while ( have_rows('opening_hours_tuesday') ) : the_row(); ?>
        <?php
                $tuesday = get_sub_field('tuesday');
                $time_opening = get_sub_field('time_opening');
                $time_closed = get_sub_field('time_closed');
            ?>

        <div class="tuesday">
            <h2 class="opening-hours-days goldtext"><?= $tuesday; ?></h2>

            <div class="opening-hours-time">
                <p><?= $time_opening; ?></p>
                <p>&nbsp;-&nbsp;</p>
                <p><?= $time_closed; ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <!-- WEDNESDAY -->
        <?php if ( have_rows('opening_hours_wednesday') ) : ?>
        <?php while ( have_rows('opening_hours_wednesday') ) : the_row(); ?>
        <?php
                $wednesday = get_sub_field('wednesday');
                $time_opening = get_sub_field('time_opening');
                $time_closed = get_sub_field('time_closed');
            ?>

        <div class="wednesday">
            <h2 class="opening-hours-days goldtext"><?= $wednesday; ?></h2>

            <div class="opening-hours-time">
                <p><?= $time_opening; ?></p>
                <p>&nbsp;-&nbsp;</p>
                <p><?= $time_closed; ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <!-- THURSDAY -->
        <?php if ( have_rows('opening_hours_thursday') ) : ?>
        <?php while ( have_rows('opening_hours_thursday') ) : the_row(); ?>
        <?php
                $thursday = get_sub_field('thursday');
                $time_opening = get_sub_field('time_opening');
                $time_closed = get_sub_field('time_closed');
            ?>

        <div class="thursday">
            <h2 class="opening-hours-days goldtext"><?= $thursday; ?></h2>

            <div class="opening-hours-time">
                <p><?= $time_opening; ?></p>
                <p>&nbsp;-&nbsp;</p>
                <p><?= $time_closed; ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <!-- FRIDAY -->
        <?php if ( have_rows('opening_hours_friday') ) : ?>
        <?php while ( have_rows('opening_hours_friday') ) : the_row(); ?>
        <?php
                $friday = get_sub_field('friday');
                $time_opening = get_sub_field('time_opening');
                $time_closed = get_sub_field('time_closed');
            ?>

        <div class="friday">
            <h2 class="opening-hours-days goldtext"><?= $friday; ?></h2>

            <div class="opening-hours-time">
                <p><?= $time_opening; ?></p>
                <p>&nbsp;-&nbsp;</p>
                <p><?= $time_closed; ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <!-- SATURDAY -->
        <?php if ( have_rows('opening_hours_saturday') ) : ?>
        <?php while ( have_rows('opening_hours_saturday') ) : the_row(); ?>
        <?php
                $saturday = get_sub_field('saturday');
                $time_opening = get_sub_field('time_opening');
                $time_closed = get_sub_field('time_closed');
            ?>

        <div class="saturday">
            <h2 class="opening-hours-days goldtext"><?= $saturday; ?></h2>

            <div class="opening-hours-time">
                <p><?= $time_opening; ?></p>
                <p>&nbsp;-&nbsp;</p>
                <p><?= $time_closed; ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <!-- SUNDAY -->
        <?php if ( have_rows('opening_hours_sunday') ) : ?>
        <?php while ( have_rows('opening_hours_sunday') ) : the_row(); ?>
        <?php
                $sunday = get_sub_field('sunday');
                $time_opening = get_sub_field('time_opening');
            ?>

        <div class="sunday">
            <h2 class="opening-hours-days goldtext"><?= $sunday; ?></h2>

            <div class="opening-hours-time">
                <p><?= $time_opening; ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>