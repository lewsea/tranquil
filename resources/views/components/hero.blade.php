<section class="{{$class}} section-wrapper">
    <div class="container">
        <div class="hero-desc">
            <span>{{$meta}}</span>
            <h2>{{$title}}</h2>
            <p>{{$desc}}</p>
            <div class="hero-cta">
                {{$btn}}
            </div>
        </div>
        <div class="hero-img">
            @include('{!!$img!!}')
        </div>
    </div>
</section>