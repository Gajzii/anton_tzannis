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

    <?php
        $hero_btn_book = get_field('hero_btn_book');
        $hero_btn_prices = get_field('hero_btn_prices');
    ?>

    <div class="hero-container">
        <h1 class="hero-text"><?php echo get_the_title(); ?></h1>
        <div class="hero-btn-container">
            <a href="<?= $hero_btn_book['url']; ?>" target="<?= $hero_btn_book['target']; ?>">
                <button class="hero-btn">
                    <?= $hero_btn_book['title']; ?>
                </button>
            </a>
            <a href="<?= $hero_btn_prices['url']; ?>" target="<?= $hero_btn_prices['target']; ?>">
                <button class="gradient-border-mask">
                    <?= $hero_btn_prices['title']; ?>
                </button>
            </a>
        </div>
    </div>
</div>
<!-- CTA SECTION -->
<div class="page-margin">

    <?php if ( have_rows('ctahome') ) : ?>
    <div class="cta-section">
        <?php while ( have_rows('ctahome') ) : the_row(); ?>

        <?php
            $cta_title = get_sub_field('cta_title');
            $cta_link = get_sub_field('cta_link');
            $cta_background_image = get_sub_field('cta_background_image');
            $cta_description = get_sub_field('cta_description');
        ?>

        <!--- FACEBOOK CTA --->
        <div class="cta_card_inner" style="background-image: url(<?= $cta_background_image['url']; ?>)">
            <div class="cta_card_inner_background">
                <h3 class="goldtext"><?= $cta_title; ?></h3>
                <div class="ctadetails">
                    <p class="cta_description"><?= $cta_description; ?></p>
                    <form target="<?= $cta_link['target']; ?>" action="<?= $cta_link['url']; ?>">
                        <button class="primary-btn center">
                            <span class="button-leftpart-primary">
                                <?= $cta_link['title']; ?>
                            </span>
                            <span class="button-rightpart-primary">
                                <p class="button-content-right">&#x1F852;</p>
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