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
<!-- OPENING HOURS SECTION -->
<?php
    $monday = get_field('opening_monday', 'options');
    $tuesday = get_field('opening_tuesday', 'options');
    $wednesday = get_field('opening_wednesday', 'options');
    $thursday = get_field('opening_thursday', 'options');
    $friday = get_field('opening_friday', 'options');
    $saturday = get_field('opening_saturday', 'options');
    $sunday = get_field('opening_sunday', 'options');
?>

<div class="opening-hours-section page-margin" id="opening-hours-section">
    <div class="opening-hours-container">
        <div class="monday">
            <h2 class="opening-hours-days goldtext">Mandag</h2>
            <p><?= $monday; ?></p>
        </div>
        <div class="tuesday">
            <h2 class="opening-hours-days goldtext">Tirsdag</h2>
            <p><?= $tuesday; ?></p>
        </div>
        <div class="wednesday">
            <h2 class="opening-hours-days goldtext">Onsdag</h2>
            <p><?= $wednesday; ?></p>
        </div>
        <div class="thursday">
            <h2 class="opening-hours-days goldtext">Torsdag</h2>
            <p><?= $thursday; ?></p>
        </div>
        <div class="friday">
            <h2 class="opening-hours-days goldtext">Fredag</h2>
            <p><?= $friday; ?></p>
        </div>
        <div class="saturday">
            <h2 class="opening-hours-days goldtext">Lørdag</h2>
            <p><?= $saturday; ?></p>
        </div>
        <div class="sunday">
            <h2 class="opening-hours-days goldtext">Søndag</h2>
            <p><?= $sunday; ?></p>
        </div>
    </div>



</div>

<?php get_footer(); ?>