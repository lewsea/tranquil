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

    public function recentSmol() {
        $args = [
            'post_type' => 'books',
            'posts_per_page' => 6,
            'offset' => 0,
            'order' => 'DESC',
            'orderby' => 'date'
        ];
        
        $query = new \WP_Query($args);

        return $query;
    }

    public function featuredLoop() {
        $args = [
            'post_type' => 'books',
            'posts_per_page' => 8,
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        ];
        
        $query = new \WP_Query($args);

        return $query;
    }

    public function pageBookCat() {
        $args = array ('exclude'=>1,'fields'=>'ids');   
        $exclude_uncategorized = get_terms('category',$args);

        $categories = get_categories(array(
            'post_type' => 'books',
            'taxonomy'   => 'category',
            'category__not_in' => array('1'),
            'cat' => -1,
            'hide_empty' => true,
            'number' => 7,
        ));

        return $categories;
    }


    public function catBookPost() {
        $args = [
            'post_type' => 'books',
            'posts_per_page' => -1,
        ];
        
        $query = new \WP_Query($args);

        return $query;
    }

    public function contemporaryLoop() {
        $args = [
            'post_type' => 'books',
            'category_name' => 'contemporary', 
            'posts_per_page' => '10', 
        ];

        $query = new \WP_Query($args); 
          
        return $query;
    }

    public function fantasyLoop() {
        $args = [
            'post_type' => 'books',
            'category_name' => 'fantasy', 
            'posts_per_page' => '10', 
        ];

        $query = new \WP_Query($args); 
          
        return $query;
    }

    public function romanceLoop() {
        $args = [
            'post_type' => 'books',
            'category_name' => 'romance', 
            'posts_per_page' => '10', 
        ];

        $query = new \WP_Query($args); 
          
        return $query;
    }
    
    public function scienceLoop() {
        $args = [
            'post_type' => 'books',
            'category_name' => 'science', 
            'posts_per_page' => '10', 
        ];

        $query = new \WP_Query($args); 
          
        return $query;
    }
}
