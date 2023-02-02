<div class="post-container">
    <a href="{{ route('binshopsblog.single', ['blogPostSlug'=>$post->slug, 'locale' => App::getLocale()]) }}">
        <div class="post-body">
            <div class="post-image">
                <img src="{{asset('blog_images/'.$post->image_medium)}}" alt="Sed ut perspiciatis unde omnis iste natus error 7" class="">
            </div>
            <div class="post-text">
                <h3>{{ $post->title }}</h3>
                <h5>{{ $post->subtitle }}</h5>
            </div>
        </div>
    </a>
</div>