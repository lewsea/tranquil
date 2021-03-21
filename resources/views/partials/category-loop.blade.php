<div class="section-wrapper">
    <div class="container">
        <h4>Browse By Subject</h4>
        {{-- ahhhhhh this is in the front page, going back on this code after almost 2weeks of not coding makes me feel so lost on the files lol  --}}
        <div class="category-container">
            @foreach($page_book_cat as $category) 
                @include('partials.category')
            @endforeach
        </div>
    </div>
</div>