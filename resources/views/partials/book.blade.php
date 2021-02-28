<article class="book">
    <div class="book-header">
        <a href="{{ the_permalink() }}" class="book-title">{{ the_title() }} </a>
        <div class="book-terms">
            <span>{{ the_category() }}</span> &#124; <span>{{ the_tags('<li class="post-tags">', '</li>') }}</span>
        </div>
    </div>
    <a href="{{ the_permalink() }}" class="book-img">
        <img src="{{ get_the_post_thumbnail_url(get_the_ID()) }}" title="{{ the_title() }}" alt="{{ the_title() }}">
    </a>
</article>