<div class="cta-btn-section-container">
<div class="page-margin">
    <div class="cta-section">
        <!--- FACEBOOK CTA --->
        <div class="cta_card_inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cta-facebook.jpg)">
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
        <div class="cta_card_inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products.webp)">
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
        <div class="cta_card_inner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scissor.webp)">
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