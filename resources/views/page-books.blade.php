@extends('layouts.app')

@section('content')

    <div class="blocks-container">

    @while($page_loop->have_posts()) @php $page_loop->the_post() @endphp

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

    @php 
        wp_reset_postdata();
    @endphp
    
    <div class="footer-img">
        @include('images.footer-open-doodle')
    </div>
@endsection
