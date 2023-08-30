<?php   
/**
 *  Template Name: About */
?>

<?php get_header();?>

<div class="page-margin">
    <h1 class="goldtext"><?php echo get_the_title(); ?></h1>
    <div class="whitespace"></div>
    <div class="about-section-flex">
        <div class="about-section-description">
            <h2 class="goldtext about-section-description-heading">Anton Tzannis</h2>
            <p><?php the_content(); ?></p>
        </div>
        <img class="about-section-img" alt="anton tzannis"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/anton_tzannis.png" />
    </div>
</div>
<div class="about-salon-section">
    <div class="about-salon-section-description">
        <h2 class="goldtext">Frisøren med det røde gulv</h2>
        <p>Når du træder ind i salonen vil du hurtigt opdage det ikoniske røde gulv. Ved overtagelsen af lokalerne i 2009, var salonens gulv malet i en flot dyb rød farve.  Idag forbliver det røde gulv hjertet i salonens design, hvor også logoet, der bærer den samme røde farve som gulvet, har en symbolsk forbindelse til stedets oprindelse. Antons frisørsalon er ikke bare et sted for hårpleje, det er en hyldest til passion og skønhed, forankret i det røde gulvs varige charme.</p>
    </div>
</div>

<?php get_footer(); ?>