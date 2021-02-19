{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')

    @twocol([
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
    @endtwocol
    
    @include('partials.block-loop')

    @include('partials.category-loop')

    @twocol([
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
    @endtwocol

    @twocol([
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
            @include('partials.block-loop')
        @endslot
    @endtwocol

    @include('partials.blogpost-loop')

    @include('components.faq')

    @include('components.testimonials')
    

@endsection
