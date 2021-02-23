<div class="section-wrapper">
    <div class="container">
        @include('partials.section-header', ['subtitle' => 'LATEST BLOGS', 'title' => 'Read What’s Important'])
        <section class="blogs-container">
            @while ($post_loop->have_posts()) @php $post_loop->the_post() @endphp
                <article class="blog">
                    <div class="blog-bookmark"></div>
                    <div class="blog-header">
                        <span>{{ the_category() }}</span>  
                        <h4><a href="{{the_permalink()}}">{{ the_title() }}</a></h4>
                        <div class="blog-meta">
                            <span> @php echo reading_time(); @endphp  read</span> &#124; <span>{{ the_tags('<li class="post-tags">', '</li>') }}</span>
                        </div>
                    </div>
                    <p> {!! wp_trim_words(get_the_excerpt(), 25) !!} </p>
                    <a href="{{the_permalink()}}">Read More <span class="iconify" data-inline="false" data-icon="ant-design:arrow-right-outlined"></span></a>
                </article>
            @endwhile
        </section>
        @include('partials.section-button', ['class' => 'blk', 'name' => 'View Blogs'])
    </div>
</div>
