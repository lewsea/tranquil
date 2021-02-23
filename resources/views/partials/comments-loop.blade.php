@foreach (get_comments($blog_pagination) as $comment)
    <div class="comment-block">
        <p class="comment">	&ldquo; {{$comment->comment_content}} &rdquo;</p>
        <a href="" class="author"> <span>-</span> {{$comment->comment_author}}</a>
    </div>
@endforeach