@extends('layouts.404')

@section('content')

    
    <div class="error-page-container container">
        <div class="error-desc">
            <h1>It looks like you are lost.</h1>
            <p>Go search or click some links below.</p>
            {{ get_search_form() }}
            {{ wp_nav_menu (array ('menu' => '23','menu_class' => 'm-0 footer-nav')) }}
        </div>
        <div class="error-img">
            @include('images.404')
        </div>
    </div>

@endsection

