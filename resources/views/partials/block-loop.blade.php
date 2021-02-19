<div class="section-wrapper">
    <div class="container">
        <h4>Latest Collection</h4>
        <div class="blocks-container">
            @while ($book_post->have_posts()) @php $book_post->the_post() @endphp
                <article class="block">
                    <div class="block-header">
                        <h3 class="block-title">{{ the_title() }} </h3>
                        <div class="block-terms">
                            <span>{{ the_category() }}</span> &#124; <span>{{ the_tags('<li class="post-tags">', '</li>') }}</span>
                        </div>
                    </div>
                    <img class="block-img" src="{{ get_the_post_thumbnail_url(get_the_ID()) }}" title="{{ the_title() }}" alt="{{ the_title() }}">
                </article>
            @endwhile
        </div>
    </div>
</div>