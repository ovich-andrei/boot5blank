<?php


// boot5 Blank navigation
function boot5blank_nav()
{
    wp_nav_menu( array(
        'theme_location'  => 'header-menu',
        'menu_id'         => 'primary-menu',
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'primary-menu-wrap',
        'menu_class'      => 'navbar-nav ml-auto',
        'fallback_cb'     => '__return_false',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 2,
        'walker'          => new WP_shwp_walker_nav_menu()
    ) );
}

// Register boot5 Blank Navigation
function register_boot5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
//        'walker-menu' => __('Walker menu', 'boot5blank'), // Main Navigation
        'header-menu' => __('Header Menu', 'boot5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'boot5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'boot5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}
