
<?php $__env->startSection("content"); ?>

<form action="<?php echo e(route('binshopsblog.admin.page.update', ['pages_id' => $page->id])); ?>" enctype="multipart/form-data" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="page_name">Page Title</label>
        <input type="text" class="form-control" id="page_name"  aria-describedby="page_name_help" name="page_name" value="<?php echo e($page->title); ?>">
        <small id="category_category_name_help" class="form-text text-muted">Use only &lt;br class="d-xs-block"&gt;(for mobile) / &lt;br&gt;(for pc) and  &lt;span class="blue"&gt;&lt;/span&gt; or &lt;span class="red"&gt;&lt;/span&gt; or &lt;span class="fiolet"&gt;&lt;/span&gt; or &lt;span class="yellow"&gt;&lt;/span&gt; </small>

        <?php $__errorArgs = ['page_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback d-block">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
        <label for="page_subname">Page SubTitle</label>
        <input type="text" class="form-control" id="page_subname"  aria-describedby="page_subname_help" name="page_subname" value="<?php echo e($page->subtitle); ?>">
        <small id="category_category_name_help" class="form-text text-muted">Use only &lt;br class="d-xs-block"&gt;(for mobile) / &lt;br&gt;(for pc)</small>

        <?php $__errorArgs = ['page_subname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback d-block">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Page Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="page_description" rows="3" value="<?php echo e($page->description); ?>"><?php echo e($page->description); ?></textarea>
        <small id="category_category_name_help" class="form-text text-muted">Use only &lt;br&gt;</small>

        <?php $__errorArgs = ['page_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback d-block">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
        <label for="slug">Page URL (Slug)</label>
        <input type="text" class="form-control" id="slug"  aria-describedby="slug_help" name="slug" value="<?php echo e($page->slug); ?>">

        <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback d-block">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
        <label for="page_block_image">Page - Image</label>
        <div class="mb-2">
            <img src="<?php echo e(asset('storage/'.$page->image)); ?>" class="img-thumbnail" width="200px" height="auto">
        </div>
        <input class="form-control" type="file" name="page_block_image" id="page_block_image" aria-describedby="page_block_image_help">

        <?php $__errorArgs = ['page_block_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback d-block">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <input type="submit" name="submit_btn" class="btn btn-primary" value="Edit Page">

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("binshopsblog_admin::layouts.admin_layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\datatile\vendor\binshops\laravel-blog\src/Views/binshopsblog_admin/page/edit.blade.php ENDPATH**/ ?>