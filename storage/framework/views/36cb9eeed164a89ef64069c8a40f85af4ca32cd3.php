
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
<div class="main-section">
    <?php echo $__env->make("includes.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <?php echo $__env->make('binshopsblog::sitewide.search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row-posts">
            <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php echo $__env->make("binshopsblog::partials.index_loop", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class='alert alert-danger'>No posts!</div>
            <?php endif; ?>
            <?php echo e($posts->links('vendor.pagination.bootstrap-4')); ?>

        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    $('.row-posts').infiniteScroll({
    path: '.pagination__next',
    append: '.post-container',
    history: false,
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make("includes.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\datatile\resources\views/vendor/binshopsblog/index.blade.php ENDPATH**/ ?>