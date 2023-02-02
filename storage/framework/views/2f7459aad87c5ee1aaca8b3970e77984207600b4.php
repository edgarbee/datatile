<h5 class="blog_title">Related Posts</h5>
<div class="row-posts">
    <?php
    $thisPost =\Illuminate\Support\Facades\DB::table('binshops_post_categories')->where('post_id', $post->id)->first();
    ?>
    <?php $__currentLoopData = \Illuminate\Support\Facades\DB::table('binshops_post_categories')->where('category_id', $thisPost->category_id)->where('post_id', '!=',$thisPost->post_id)->orderBy('post_id', 'desc')->limit(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
    $thisPostContent =\Illuminate\Support\Facades\DB::table('binshops_post_translations')->where('post_id', $relatedPost->id)->first();
    ?>
    <div class="post-container">
        <a href="<?php echo e(route('binshopsblog.single', ['blogPostSlug'=>$thisPostContent->slug, 'locale' => App::getLocale()])); ?>">
            <div class="post-body">
                <div class="post-image">
                    <img src="<?php echo e(asset('blog_images/'.$thisPostContent->image_medium)); ?>" alt="Sed ut perspiciatis unde omnis iste natus error 7" class="">
                </div>
                <div class="post-text">
                    <h3><?php echo e($thisPostContent->title); ?></h3>
                    <h5><?php echo e($thisPostContent->subtitle); ?></h5>
                </div>
            </div>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\OSPanel\domains\datatile\resources\views/vendor/binshopsblog/partials/related.blade.php ENDPATH**/ ?>