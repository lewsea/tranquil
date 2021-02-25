<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageBooks extends Controller
{
    public function pageLoop() {
        $args = [
            'post_type' => 'books',
            'posts_per_page' => -1,
            'offset' => 0,
            'order' => 'DESC',
            'orderby' => 'date'
        ];
        
        $query = new \WP_Query($args);

        return $query;
    }
}
