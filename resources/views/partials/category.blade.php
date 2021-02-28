<article class="category">
    <div class="cat-desc">
        <a href="{{get_category_link($category->term_id)}}">{{$category->name}}</a>
        @if ($category->count == 1) 
            <p>{{$category->count}} Book </p>
            @else 
            <p>{{$category->count}} Books </p>
        @endif
    </div>
    <a href="{{get_category_link($category->term_id)}}">
        <img src="{{get_field('category_image', $category->taxonomy . "_" . $category->term_id)}}" alt="{{$category->name}}" title="{{$category->name}}">
    </a>
</article>