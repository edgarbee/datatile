
<?php $__env->startSection("content"); ?>


<?php if(session()->has('success')): ?>
<div class="alert alert-success mb-4" role="alert">
    <?php echo e(session()->get('success')); ?>

</div>
<?php endif; ?>
<h5>Setting up a mail recipient</h5>
<form action="<?php echo e(route('binshopsblog.admin.forms.forms_update', ['email_id'=>$setting->id])); ?>" class="mb-5" method="post">
    <div class="input-group">
        <?php echo csrf_field(); ?>
        <input type="email" name="email" value="<?php echo e($setting->email); ?>" class="form-control">
        <div class="input-group-append">
        <button class="btn btn-primary" type="btn">Edit</button>
        </div>
    </div>
</form>

<h5>Table Requests</h5>
<div class="table-responsive">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">Email</th>
        <th scope="col">Company</th>
        <th scope="col">Job Title</th>
        <th scope="col">Country</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td><?php echo e($form->first_name); ?></td>
        <td><?php echo e($form->last_name); ?></td>
        <td><?php echo e($form->email); ?></td>
        <td><?php echo e($form->company); ?></td>
        <td><?php echo e($form->job_title); ?></td>
        <td><?php echo e($form->country); ?></td>
        <td><?php echo e($form->message); ?></td>
        <td>
            <form onsubmit="return confirm('Are you sure you want to delete this Request?\n You cannot undo this action!');" method="post" action="<?php echo e(route('binshopsblog.admin.forms.delete', ['forms_id' => $form->id])); ?>">
                <?php echo csrf_field(); ?>                                   
                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
            </form>
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("binshopsblog_admin::layouts.admin_layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\datatile\vendor\binshops\laravel-blog\src/Views/binshopsblog_admin/forms/main.blade.php ENDPATH**/ ?>