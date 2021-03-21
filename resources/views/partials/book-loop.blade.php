<div class="section-wrapper">
    <div class="container">
        <h4>{{$title}}</h4>
        <div class="books-container">
            {{-- i didnt even know that i wrote a book partials tf haha --}}
            @while ($book_post->have_posts()) @php $book_post->the_post() @endphp
                @include('partials.book')
            @endwhile
        </div>
    </div>
</div>