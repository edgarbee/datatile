<?php $__env->startSection("content"); ?>

<?php if(session()->has('success')): ?>
<div class="alert alert-success m-4" role="alert">
    <?php echo e(session()->get('success')); ?>

</div>
<?php endif; ?>
<?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card m-4">
    <div class="card-body">
        <h5 class="card-title"><?php echo e($solution->title); ?></h5>
        <a href="<?php echo e(route('binshopsblog.admin.solutions.edit', ['solutions_id' => $solution->id])); ?>" class="card-link btn btn-primary">Edit Solution</a>
        <form onsubmit="return confirm('Are you sure you want to delete this Solution?\n You cannot undo this action!');" method="post" action="<?php echo e(route('binshopsblog.admin.solutions.delete', ['solutions_id' => $solution->id])); ?>" class="float-right">
            <?php echo csrf_field(); ?>                                   
            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
        </form>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("binshopsblog_admin::layouts.admin_layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c/cq12260/test/public_html/vendor/binshops/laravel-blog/src/Views/binshopsblog_admin/solutions/main.blade.php ENDPATH**/ ?>