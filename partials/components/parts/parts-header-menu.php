<header class="header">
    <div class="header-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img alt="Frisør Anton Tzannis’ logo." class="logo"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/images/antontzannis-logo.svg" />
        </a>
        <nav class="menu-container">
            <div id="dropdownmenu" onclick="onClickMenu()">
                <div class="dropdownmenuBg"></div>

                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </div>


            <?php wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'container_class' => 'top-menu',
                )
                );
            ?>
        </nav>

    </div>
</header>