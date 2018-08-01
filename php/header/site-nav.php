<nav class="nav">
    <a href="<?php echo get_site_url(); ?>" class="nav__item nav__item--type--home-link">
        <svg class="home-link__part home-link__part--type--img" viewBox="0 0 1000 1403">
            <path d="M857.82 598.18C857.82 598.18 803.33 288 464.25 309.5 464.5 310 469 358.5 468.5 357.5 766.5 332.5 811.45 610.36 811.45 610.36 811.45 610.36 859 822 721.75 959.5 722.5 961.5 722 1024.5 722.5 1024 918.5 857 857.82 598.18 857.82 598.18ZM549.5 1047C275 1078 196 855.5 196 855.5 196 855.5 119.5 682.5 212.73 517.45 212.73 517.45 201 450 200.55 448.36 45.33 670.67 158.5 888 158.5 888 158.5 888 262 1136.67 563.09 1092.73 563.5 1092.5 550.5 1048.5 549.5 1047ZM189.64 379.82C55.5 511.5 33 725.5 100.5 888 168 1050.5 330 1178 578 1142.75 578.5 1144 597 1203 596.36 1204.18 462 1234 130 1210 23 864-50 607 53 410 177.25 304.25 178 307.5 190 379 189.64 379.82ZM454 199C454.5 201 461 264 460.67 263.67 879 238.5 924 612 924 612 924 612 991.5 919.5 722 1093.09 722 1093.09 721.33 1167.33 721.82 1165.64 1021.33 1016.67 1005 697.5 984 591 963 484.5 859.5 175.5 454 199ZM190.82 186.09C190.82 186.09 404.67 0.67 404.67 0.67 404.67 0.67 456.67 608.67 456.67 608.67 456.67 608.67 688 434.67 688 434.67 688 434.67 689.31 1398.69 689.31 1398.69 689.31 1398.69 505.09 783.45 505.09 783.45 505.09 783.45 307.45 886.55 307.45 886.55 307.45 886.55 190.82 186.09 190.82 186.09Z"/>
        </svg>
        <span class="home-link__part home-link__part--type--text">MERCURY 1089</span>
    </a>
    <a href="javascript:void(0)" class="nav__item nav__item--type--menu-toggle"></a>
    <?php 
        class NavWalker extends BEMWalkerNavMenu {
            protected $prefix = '';
            protected $navListClass = 'nav__menu';
            protected $navItemClass = 'nav-menu__item';
            protected $navLinkClass = 'nav-menu__anchor';
            protected $subNavClass = 'nav-menu__sub-menu';
            protected $subNavItemClass = 'nav-sub-menu__item';
            protected $subNavLinkClass = 'nav-sub-menu__anchor';
        }

        wp_nav_menu( array(
            'theme_location' => 'header',
            'walker' => new NavWalker(),
            'items_wrap' => '<ul class="nav__menu">%3$s</ul>',
            'container' => false
        ) );
    ?>
</nav>