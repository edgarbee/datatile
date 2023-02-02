<h5 class="blog_title">Related Posts</h5>
<div class="row-posts">
    @php
    $thisPost =\Illuminate\Support\Facades\DB::table('binshops_post_categories')->where('post_id', $post->id)->first();
    @endphp
    @foreach(\Illuminate\Support\Facades\DB::table('binshops_post_categories')->where('category_id', $thisPost->category_id)->where('post_id', '!=',$thisPost->post_id)->inRandomOrder()->limit(3)->get() as $relatedPost)
    @php
    $thisPostContent =\Illuminate\Support\Facades\DB::table('binshops_post_translations')->where('post_id', $relatedPost->id)->first();
    @endphp
    <div class="post-container">
        <a href="{{ route('binshopsblog.single', ['blogPostSlug'=>$thisPostContent->slug, 'locale' => App::getLocale()]) }}">
            <div class="post-body">
                <div class="post-image">
                    <img src="{{asset('blog_images/'.$thisPostContent->image_medium)}}" alt="Sed ut perspiciatis unde omnis iste natus error 7" class="">
                </div>
                <div class="post-text">
                    <h3>{{ $thisPostContent->title }}</h3>
                    <h5>{{ $thisPostContent->subtitle }}</h5>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>