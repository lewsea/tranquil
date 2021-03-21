<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function pageBookCat() {
        $args = array ('exclude'=>1,'fields'=>'ids');   
        $exclude_uncategorized = get_terms('category',$args);

        $categories = get_categories(array(
            'post_type' => 'books',
            'taxonomy'   => 'category',
            'category__not_in' => array('1'),
            'cat' => -1,
            'hide_empty' => true,
            'number' => 2,
        ));

        return $categories;
    }
}
