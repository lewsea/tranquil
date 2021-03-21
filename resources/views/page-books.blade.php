@extends('layouts.app')

@section('content')

    @include('partials.page-header', ['img' => 'images/page-book.png'])

    <div class="section-wrapper">
        <div class="searchform-container">
            {{ get_search_form() }}
        </div>
    </div>

    @book(['smol' => 'recent-smol'])
        @slot('content')
            @while ($recent_smol->have_posts()) @php $recent_smol->the_post() @endphp
                @include('partials.book')
            @endwhile
        @endslot
    @endbook

    @book(['title' => 'Featured Collection', 'slick' => 'book-slick-container'])
        @slot('content')
            @while ($featured_loop->have_posts()) @php $featured_loop->the_post() @endphp
                @include('partials.book')
            @endwhile
        @endslot
    @endbook

    @book(['title' => 'Romance', 'slick' => 'book-slick-container'])
        @slot('content')
            @while ($romance_loop->have_posts()) @php $romance_loop->the_post() @endphp
                @include('partials.book')
            @endwhile
        @endslot
    @endbook

    @book(['title' => 'Science', 'slick' => 'book-slick-container'])
        @slot('content')
            @while ($science_loop->have_posts()) @php $science_loop->the_post() @endphp
                @include('partials.book')
            @endwhile
        @endslot
    @endbook

    
    @category(['title' => 'Browse By Subject'])
        @slot('content')
        {{-- wow why did i name that as page_book_cat --}}
            @foreach($page_book_cat as $category)
                @include('partials.category')
            @endforeach
        @endslot
    @endcategory

    <div class="footer-img">
        @include('images.footer-open-doodle')
    </div>
@endsection
