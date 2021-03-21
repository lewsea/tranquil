<div class="single-hero">
    <div class="single-hero-img">
        <img src="{{ get_field('cover') }}" alt="{{ the_title() }}" title="{{ the_title() }}">
    </div>
    <div class="single-hero-desc">
        <span style="background-color: #61dafb; color: #fff" >Some deals shit idk</span>
        <h2>{{ the_title() }}</h2>
        <div class="book-terms">
            <span>{{ the_category() }}</span> &#124; <span>{{ the_tags('<li class="post-tags">', '</li>') }}</span>
        </div>
        <p>{{ get_field('description') }}</p>
        <a href="{{ the_permalink() }}" class="single-link"> Read Now </a>
    </div>
</div>

<div class="single-books-container">
    <article @php post_class() @endphp>

        <div class="entry-header"> 
            <ul id="navs-tab">
                <li><a href="#tab1">Description</a><div class="bookmark"></div></li>
                <li><a href="#tab2">Reviews</a><div class="bookmark"></div></li>
            </ul>
            <ul id="navs-aside">
                <li><a href="">Share 
                    <span class="iconify" data-inline="false" data-icon="ant-design:share-alt-outlined"></span>
                </a></li>
                <li><a href="">Download
                    <span class="iconify" data-inline="false" data-icon="ant-design:download-outlined"></span>
                </a></li>
            </ul>
        </div>

        <div class="entry-content">
            <div id="tabs-content">
                <div id="tab1" class="tab-content">
                    <div class="row">
                        <div class="col-8">
                            {{the_content()}}
                        </div>
                        <div class="col-1"></div>
                        <div class="col-3">
                            <p>Author: {{get_field('author')}}</p>
                            <p>Pages: {{get_field('pages')}}</p>
                        </div>
                    </div>
                </div>
                <div id="tab2" class="tab-content">
                    <h2>sup from tab2</h2>
                    <p>Lets just pretend that this is a reviews tab for a moment</p>
                </div>
            </div>
        </div>

    </article>
</div>

  