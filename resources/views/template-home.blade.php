{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')

    @typeone([
        'name' => 'hero',
        'subtitle' => 'TRANQUIL',
        'title' => 'Book Catalog WordPress Theme',
        ])
        @slot('desc')
            Tranquil is a Book Catalog WordPress Theme that lets you create your own catalog and easily search and filter through each catalog items.
        @endslot
        @slot('btn')
            <a href="" class="btn-main">Explore Collection</a>
            <a href="" class="btn-sec">Learn More</a>
        @endslot
        @slot('img')
            @include('images.hero')
        @endslot
    @endtypeone
    
    @include('partials.book-loop', ['title' => 'Latest Collection'])

    @include('partials.category-loop')

    @typeone([
            'name' => 'about',
            'subtitle' => 'ABOUT TRANQUIL',
            'title' => 'Get To Know Us',
        ])
        @slot('desc')
            What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?
        @endslot
        @slot('btn')
            <a href="" class="btn-blk">About Us</a>
        @endslot
        @slot('img')
            @include('images.about-us')
        @endslot
    @endtypeone

    @typeone([
            'name' => 'collection',
            'subtitle' => 'COLLECTION',
            'title' => 'Browse Our Collection',
        ])
        @slot('desc')
            What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?
        @endslot
        @slot('btn')
            <a href="" class="btn-main">View Catalog</a>
        @endslot
        @slot('img')
            @include('partials.book-loop', ['title' => ''])
        @endslot
    @endtypeone

    @include('partials.blogpost-loop')

    @typetwo(['name' => 'faq'])
        @slot('sectionheader')
            @include('partials.section-header', ['subtitle' => 'FAQ SECTION', 'title' => 'How Can We Help You', 'align' => 'text-right'])
        @endslot
        @slot('content')
            <div class="faq-desc">
                @include('partials.faq')
            </div>
            <div class="faq-img">
                @include('images.faq')
            </div>
        @endslot
        @slot('sectionbtn')
            @include('partials.section-button', ['class' => 'blk', 'name' => 'Help Center'])
        @endslot
    @endtypetwo

    @typetwo(['name' => 'testimonials'])
        @slot('sectionheader')
            @include('partials.section-header', ['subtitle' => 'TESTIMONIALS', 'title' => 'What Our Readers Says'])
        @endslot
        @slot('content')
            @include('partials.comments-loop')
        @endslot
        @slot('sectionbtn')
            @include('partials.section-button', ['class' => 'main', 'name' => 'More Comments'])
        @endslot
    @endtypetwo
    
    <div class="footer-img">
        @include('images.footer-humaaans')
    </div>
@endsection