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
                <span class="menu-icon">
                    <span class="iconify" data-inline="false" data-icon="ant-design:search-outlined"></span>
                </span>
                <span class="menu-icon ml-3">
                    <span class="iconify" data-inline="false" data-icon="ant-design:menu-unfold-outlined"></span>
                </span>
                <div class="menu-icon ml-3">
                    <span class="iconify" data-inline="false" data-icon="ant-design:shopping-cart-outlined"></span>
                </div>
            </div>

        </div>

    </nav>
</header>
