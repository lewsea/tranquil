<div class="section-wrapper">
    <div class="container">
        <h4>Browse By Subject</h4>
        <div class="category-container">
            @foreach($book_cat as $category) 
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
            @endforeach
        </div>
    </div>
</div>