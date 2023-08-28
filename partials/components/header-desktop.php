<header class="header">
    <div class="header-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="logo"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/antontzannis-logo.svg" />
        </a>
        
        <div class="menu-container">
            <div id="dropdownmenu" onclick="onClickMenu()">
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
        </div>
    </div>
</header>