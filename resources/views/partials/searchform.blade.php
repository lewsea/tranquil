<form method="get" id="searchform" action=" {{ esc_url( home_url( '/' ) ) }} " role="search">
    <label class="sr-only" for="s"> {!! _(esc_html_e( 'Search', 'sage' )) !!} </label>
    <div class="input-group">
        <input class="field form-control" id="s" name="s" type="text"
            placeholder=" {!! _(esc_attr_e( 'Search for Books &hellip;', 'sage') )!!}" value="{{ the_search_query() }}">
        <span class="input-group-append">
            <button class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
            value="{!! _(esc_attr_e( 'Search', 'sage' )) !!}">
                <span class="iconify" data-inline="false" data-icon="codicon:search" ></span>
            </button>
        </span>
    </div>
</form>


