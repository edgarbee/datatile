
<?php $__env->startSection("content"); ?>

<style>
    .card-title>br {
        display: none !important;
    }
</style>
<?php if(session()->has('success')): ?>
<div class="alert alert-success m-4" role="alert">
    <?php echo e(session()->get('success')); ?>

</div>
<?php endif; ?>
<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card m-4">
    <div class="card-body">
        <h5 class="card-title"><?php echo $page->title; ?></h5>
        <a href="<?php echo e(route('pages', ['slug' => $page->slug])); ?>" class="card-link btn btn-outline-secondary"><i class="fa fa-file-text-o" aria-hidden="true"></i> View page</a>
        <a href="<?php echo e(route('binshopsblog.admin.page.edit', ['pages_id' => $page->id])); ?>" class="card-link btn btn-primary">Edit page</a>
        <form onsubmit="return confirm('Are you sure you want to delete this Page?\n You cannot undo this action!');" method="post" action="<?php echo e(route('binshopsblog.admin.page.delete', ['pages_id' => $page->id])); ?>" class="float-right">
            <?php echo csrf_field(); ?>                                   
            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
        </form>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("binshopsblog_admin::layouts.admin_layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\datatile\vendor\binshops\laravel-blog\src/Views/binshopsblog_admin/page/main.blade.php ENDPATH**/ ?>