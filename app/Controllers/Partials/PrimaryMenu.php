<?php // app/Controllers/Partials/PrimaryMenu.php

namespace App\Controllers\Partials;

trait PrimaryMenu {

    /**
     * Primary Nav Menu
     * @return array
    */
    public function primarymenu() {
        $args = array(
        'theme_location'    => 'primary_navigation',
        'container_class' => 'navbar-collapse',
        'container_id'    => 'navbarNavDropdown',
        'menu_class'      => 'navbar-nav ml-auto main-nav',
        'fallback_cb'     => '',
        'menu_id'         => 'main-menu',
        'depth'           => 2,
        'walker'            => new \App\wp_bootstrap4_navwalker(),
        );
        return $args;
    }

}
    

