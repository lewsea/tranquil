<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    use Partials\PrimaryMenu; 

    public function bookPost() {
        $args = [
            'post_type' => 'books',
            'posts_per_page' => '4',
        ];
        
        $query = new \WP_Query($args);

        return $query;
    }

    public function featuredBookPost() {
        $args = [
            'post_type' => 'books',
            'posts_per_page' => '4',
            // make this filter to "featured
            'orderby' => 'rand'
        ];
        
        $query = new \WP_Query($args);

        return $query;
    }

    public function catLoop() {
        $args = get_terms(
            array(
                'taxonomy'   => 'category',
                'hide_empty' => true,
            )
        );
        
        $terms = new \WP_Query($args);

        return $terms;
    }

    public function postLoop() {
        $args = array (
            'post_type' => 'post',
            'posts_per_page' => 3,
        );

        $terms = new \WP_Query($args);

        return $terms;
    }

    public function bookCat() {
        $categories = get_categories(array(
            'post_type' => 'post',
            'taxonomy'   => 'category',
            'hide_empty' => true,
            'number' => 2,
        ));

        return $categories;
    }

    public function blogPagination() {
        $args = array(
            'number' => 7,
            'offset' => 0,
            'status' => 'approve',
        );

        return $args;
    }

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
}
