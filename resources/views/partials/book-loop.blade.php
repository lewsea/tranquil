<div class="section-wrapper">
    <div class="container">
        <h4>{{$title}}</h4>
        <div class="blocks-container">
            @while ($book_post->have_posts()) @php $book_post->the_post() @endphp
                <article class="block">
                    <div class="block-header">
                        <a href="{{ the_permalink() }}" class="block-title">{{ the_title() }} </a>
                        <div class="block-terms">
                            <span>{{ the_category() }}</span> &#124; <span>{{ the_tags('<li class="post-tags">', '</li>') }}</span>
                        </div>
                    </div>
                    <a href="{{ the_permalink() }}">
                        <img class="block-img" src="{{ get_the_post_thumbnail_url(get_the_ID()) }}" title="{{ the_title() }}" alt="{{ the_title() }}">
                    </a>
                </article>
            @endwhile
        </div>
    </div>
</div>