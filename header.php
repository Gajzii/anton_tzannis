<!DOCTYPE html>

<html>

<head>
    <?php wp_head(); ?>
    <!-- Links to stylesheet named "style" -->

</head>

<!--- LOGO --->
<a href="<?php echo get_stylesheet_directory_uri(); ?>index.php">
    <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/image/antontzannis-logo-red.png" />

</a>
<!--- MOBILE MENU --->
<div id="menu" onclick="onClickMenu()">
    <div id="bar1" class="bar"></div>
    <div id="bar2" class="bar"></div>
    <div id="bar3" class="bar"></div>
</div>
<!--- NAVIGATION --->
<nav>
    <ul class="nav_list">
        <li>
            <a href="<?php echo get_stylesheet_directory_uri(); ?>index.php" class="navigation_link">Forside</a>
        </li>
        <li>
            <a href="<?php echo get_stylesheet_directory_uri(); ?>booking.php" class="navigation_link">Book tid</a>
        </li>
        <li>
            <a href="<?php echo get_stylesheet_directory_uri(); ?>pricing.php" class="navigation_link">Priser</a>
        </li>
        <li>
            <a href="<?php echo get_stylesheet_directory_uri(); ?>products.php" class="navigation_link">Produkter</a>
        </li>
        <li>
            <a href="<?php echo get_stylesheet_directory_uri(); ?>about.php" class="navigation_link">Om frisøren</a>
        </li>
        <li>
            <a href="<?php echo get_stylesheet_directory_uri(); ?>contact.php" class="navigation_link">Kontakt</a>
        </li>
        <!--- LANGUAGE --->
        <div class="flag">
            <li>
                <a href="" class="navigation_link">
                    <div class="flags-image en-flag"></div>
                </a>
            </li>
            <li>
                <a href="" class="navigation_link">
                    <div class="flags-image dk-flag"></div>
                </a>
            </li>
        </div>
    </ul>
</nav>
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>