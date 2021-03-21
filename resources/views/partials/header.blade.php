<header class="page-header">

    <div id="scroll-top-button" title="Scroll To Top"></div>

    <a class="skip-link sr-only sr-only-focusable" href="#content">@php esc_html_e( 'Skip to content', 'sage')@endphp</a>

    <nav id="main-nav" class="navbar navbar-expand-md" aria-labelledby="main-nav-label">

        <div class="container">
            @if ( function_exists( 'the_custom_logo' ) )
            
                <a class="navbar-brand brand" href="{{ home_url('/') }}">
                    <h1>Tranquil <div class="bookmark"></div></h1>
                </a>

                @else
                {!! the_custom_logo() !!}

            @endif
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="@php esc_attr_e( 'Toggle navigation', 'sage'); @endphp">
                <span class="iconify" data-inline="false" data-icon="ant-design:menu-unfold-outlined"></span>
            </button>

            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu($primarymenu) !!}
            @endif

            <div class="menu-option ml-5">
                <button id="page-menu-btn" class="menu-icon ml-3" data-toggle="tooltip" data-placement="bottom" title="Page Menu">
                    <span class="iconify" data-inline="false" data-icon="ant-design:menu-unfold-outlined"></span>   
                </button>

                <button id="page-search-btn" class="menu-icon" data-toggle="tooltip" data-placement="bottom" title="Page Search">
                    <span class="iconify" data-inline="false" data-icon="ant-design:search-outlined"></span>
                </button>
                
                {{-- <div class="menu-icon ml-3">
                    <span class="iconify" data-inline="false" data-icon="ant-design:shopping-cart-outlined"></span>
                </div> --}}
            </div>

            {{-- <div id="side-menu" class="page-menu">
                <div class="page-menu-content">
                    <h3>Explore</h3>
                    {{ wp_nav_menu (array ('menu' => '24','menu_class' => 'p-0 m-0 list-unstyled footer-nav')) }}
                    <h3>Discover</h3>
                    {{ wp_nav_menu (array ('menu' => '4','menu_class' => 'p-0 m-0 list-unstyled footer-nav')) }}
                    <div class="page-menu-socials">
                        <a href="#"><span class="iconify" data-inline="false" data-icon="feather:facebook"></span></a>
                        <a href="#"><span class="iconify" data-inline="false" data-icon="fe:instagram"></span></a>
                        <a href="#"><span class="iconify" data-inline="false" data-icon="ant-design:twitter-outlined"></span></a>
                        <a href="#"><span class="iconify" data-inline="false" data-icon="ant-design:youtube-outlined"></span></a>
                        <a href="#"><span class="iconify" data-inline="false" 
                        data-icon="mdi:spotify"></span></a>
                    </div>
                </div>
            </div> --}}

            {{-- <div id="page-search" class="page-search">
                <div class="page-search-overlay"></div>
                <div class="page-search-content">
                    {{ get_search_form() }}
                </div>
                <div class="search-close" id="search-close-btn"><span class="iconify" data-inline="false" data-icon="fe:close"></span></div>
            </div> --}}

        </div>

    </nav>
</header>
