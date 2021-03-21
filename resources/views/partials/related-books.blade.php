<div class="section-wrapper related-books">
    <h4>Related Books</h4>

    {{-- @if ($related_books->have_posts())
        @while ($related_books->have_posts()) @php $related_books->the_post() @endphp
            <h4>wew</h4>
        @endwhile
            
        @else {!!'<p>No Book Found </p>' !!}
    @endif --}}
    @php
    $customTaxonomyTerms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );
    $args = array(
        'post_type' => 'books',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'post__not_in' => array ($post->ID),
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $customTaxonomyTerms
            )
        ),
    );
    $relatedPosts = new WP_Query( $args );
    @endphp
    <div class="books-container">
        @if($relatedPosts->have_posts())
        @while($relatedPosts->have_posts()) @php $relatedPosts->the_post() @endphp
            @include('partials.book')
        @endwhile
        @else
        {!!'<p>No Post Found</p>'!!}
        @endif
    </div>
    @php wp_reset_postdata(); @endphp
</div>