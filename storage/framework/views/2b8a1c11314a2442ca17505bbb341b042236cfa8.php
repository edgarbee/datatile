
<?php $__env->startSection('title', strip_tags($post->gen_seo_title())); ?>
<?php $__env->startSection('content'); ?>
<div class="main-section">
        <?php echo $__env->make("includes.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container single-container">
            <?php echo $__env->make("binshopsblog::partials.full_post_details", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make("binshopsblog::partials.related", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
</div>
<?php echo $__env->make("includes.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\datatile\resources\views/vendor/binshopsblog/single_post.blade.php ENDPATH**/ ?>