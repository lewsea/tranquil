<div class="section-wrapper">
    <div class="container">
        <span>LATEST BLOGS</span>
        <h4>Read What’s Important</h4>
        <section class="blogs-container">
            @while ($post_loop->have_posts()) @php $post_loop->the_post() @endphp
                <article class="blog">
                    <div class="blog-bookmark"></div>
                    <div class="blog-header">
                        <span>{{ the_category() }}</span>  
                        <h2 class="blog-title">{{ the_title() }} </h2>
                        <div class="blog-meta">
                            <span>3 mins read</span>
                            <span>{{ the_tags('<li class="post-tags">', '</li>') }}</span>
                        </div>
                    </div>
                    <p>{{the_content()}}</p>
                    <a href="{{the_permalink()}}">Read More shite icon</a>
                </article>
            @endwhile
        </section>
        <a href="" class="btn-blk">View Blogs</a>
    </div>
</div>
