@if(\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
    <a href="{{$post->edit_url()}}" class="btn btn-outline-secondary btn-sm pull-right float-right">Edit
        Post</a>
@endif

<?=$post->image_tag("large", false, 'd-block mx-auto'); ?>

<h1 class='blog_title'>{{$post->title}}</h1>

<div class="blog_body_content">
    {!! $post->post_body_output() !!}
</div>
