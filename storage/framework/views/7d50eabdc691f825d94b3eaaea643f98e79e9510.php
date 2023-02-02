<div class="post-container">
    <a href="<?php echo e(route('binshopsblog.single', ['blogPostSlug'=>$post->slug, 'locale' => App::getLocale()])); ?>">
        <div class="post-body">
            <div class="post-image">
                <img src="<?php echo e(asset('blog_images/'.$post->image_medium)); ?>" alt="Sed ut perspiciatis unde omnis iste natus error 7" class="">
            </div>
            <div class="post-text">
                <h3><?php echo e($post->title); ?></h3>
                <h5><?php echo e($post->subtitle); ?></h5>
            </div>
        </div>
    </a>
</div><?php /**PATH C:\OpenServer\domains\datatile\resources\views/vendor/binshopsblog/partials/index_loop.blade.php ENDPATH**/ ?>