
<?php $__env->startSection('title', strip_tags($page->title)); ?>
<?php $__env->startSection('body-class', 'white-bg'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make("includes.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="about-us">
    <div class="line">
        <img class="pc-human" loading="lazy" src="<?php echo e(asset('storage/'.$page->image)); ?>" alt="">
        <img class="mob-human" loading="lazy" src="<?php echo e(asset('storage/'.$page->image)); ?>" alt="">
    </div>
    <div class="container">
        <div class="main-section-solutions">
            <div class="main-title">
                <h1>
                    <?php echo $page->title; ?>

                </h1>
            </div>

            <div class="pre-text">
                <div class="black-text">
                <?php echo $page->subtitle; ?>               
                </div>
            </div>

            <div class="main-text-container">
                <div class="main-text">
                    <p class="black-text">
                        <?php echo $page->description; ?> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make("includes.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\datatile\resources\views/page.blade.php ENDPATH**/ ?>