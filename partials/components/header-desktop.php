<header class="header">
    <div class="header-container">
        <div class="header-inner">

            <div class="logo-container">
                <a src="/">
                    <img class="logo"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/antontzannis-logo-red.png" />
                </a>
            </div>

            <div id="menu" onclick="onClickMenu()">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </div>

        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'container_class' => 'top-menu',
                'menu_class' => 'nav_list'
            )
            );
        ?>
        </div>
    </div>
</header>