<article class="category">
    <div class="cat-title">
        <a href="{{get_category_link($category->term_id)}}">{{$category->name}}</a>
        @if ($category->count == 1) 
            <p>{{$category->count}} Book </p>
            @else 
            <p>{{$category->count}} Books </p>
        @endif
    </div>
    <img src="{{get_field('category_image', $category->taxonomy . "_" . $category->term_id)}}" alt="{{$category->name}}" title="{{$category->name}}">
    <div class="cat-desc">
        @php echo category_description( $category->term_id ) @endphp
        <a class="btn-main" href="{{get_category_link($category->term_id)}}">Go to Category</a>
    </div>
</article>