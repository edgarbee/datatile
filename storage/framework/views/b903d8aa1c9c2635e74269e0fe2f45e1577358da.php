
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
<div class="main-section">
    <?php echo $__env->make("includes.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container search-container">
        <?php echo $__env->make('binshopsblog::sitewide.search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h2>Search Results for - <?php echo e($query); ?></h2>

        <div class="row-posts">
        <?php $search_count = 0;?>
        <?php $__empty_1 = true; $__currentLoopData = $search_results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if(isset($result->indexable)): ?>
                <?php $search_count += $search_count + 1; ?>
                <?php $post = $result->indexable; ?>
                <?php if($post && is_a($post,\BinshopsBlog\Models\BinshopsPostTranslation::class)): ?>
                    <?php echo $__env->make("binshopsblog::partials.index_loop", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                    <div class='alert alert-danger'>Unable to show this search result - unknown type</div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class='alert alert-danger'>Sorry, but there were no results!</div>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php echo $__env->make("includes.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\datatile\resources\views/vendor/binshopsblog/search.blade.php ENDPATH**/ ?>