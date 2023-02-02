
<?php $__env->startSection("content"); ?>

<form action="<?php echo e(route('binshopsblog.admin.solutions.add')); ?>" enctype="multipart/form-data" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="solution_name">Solution Title</label>
        <input   type="text" class="form-control" id="solution_name"  aria-describedby="solution_name_help" name="solution_name" value="<?php echo e(old('solution_name')); ?>">
        <small id="category_category_name_help" class="form-text text-muted">Use only &lt;br class="d-xs-block"&gt;</small>

        <?php $__errorArgs = ['solution_name'];
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
        <label for="solution_subname">Solution SubTitle</label>
        <input   type="text" class="form-control" id="solution_subname"  aria-describedby="solution_subname_help" name="solution_subname" value="<?php echo e(old('solution_subname')); ?>">
        <small id="category_category_name_help" class="form-text text-muted">Use only &lt;br class="d-xs-block"&gt;</small>

        <?php $__errorArgs = ['solution_subname'];
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
        <label for="solution_description">Solution Description</label>
        <input   type="text" class="form-control" id="solution_description"  aria-describedby="solution_description_help" name="solution_description" value="<?php echo e(old('solution_description')); ?>">
        <small id="category_category_name_help" class="form-text text-muted">Use only &lt;br class="d-xs-block"&gt;</small>

        <?php $__errorArgs = ['solution_description'];
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
        <label for="solution_first_block">First block</label>
        <input   type="text" class="form-control" id="solution_first_block"  aria-describedby="solution_first_block_help" name="solution_first_block" value="<?php echo e(old('solution_first_block')); ?>">
        <?php $__errorArgs = ['solution_first_block'];
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
        <br>
        <label for="solution_first_block_image">First block - Image</label>
        <input   class="form-control" type="file" name="solution_first_block_image" id="solution_first_block_image" aria-describedby="solution_first_block_image_help">
        <?php $__errorArgs = ['solution_first_block_image'];
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
        <label for="solution_second_block">Second block</label>
        <input   type="text" class="form-control" id="solution_second_block"  aria-describedby="solution_second_block_help" name="solution_second_block" value="<?php echo e(old('solution_second_block')); ?>">
        <?php $__errorArgs = ['solution_second_block'];
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
        <br>
        <label for="solution_second_block_image">Second block - Image</label>
        <input   class="form-control" type="file" name="solution_second_block_image" id="solution_second_block_image" aria-describedby="solution_second_block_image_help">
        <?php $__errorArgs = ['solution_second_block_image'];
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
        <label for="solution_third_block">Third block</label>
        <input   type="text" class="form-control" id="solution_third_block"  aria-describedby="solution_third_block_help" name="solution_third_block" value="<?php echo e(old('solution_third_block')); ?>">
        <?php $__errorArgs = ['solution_third_block'];
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
        <br>
        <label for="solution_third_block_image">Third block - Image</label>
        <input   class="form-control" type="file" name="solution_third_block_image" id="solution_third_block_image" aria-describedby="solution_third_block_image_help">
        <?php $__errorArgs = ['solution_third_block_image'];
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
        <label for="solution_fourth_block">Fourth block</label>
        <input   type="text" class="form-control" id="solution_fourth_block"  aria-describedby="solution_fourth_block_help" name="solution_fourth_block" value="<?php echo e(old('solution_fourth_block')); ?>">
        <?php $__errorArgs = ['solution_fourth_block'];
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
        <br>
        <label for="solution_fourth_block_image">Fourth block - Image</label>
        <input   class="form-control" type="file" name="solution_fourth_block_image" id="solution_fourth_block_image" aria-describedby="solution_fourth_block_image_help">
        <?php $__errorArgs = ['solution_fourth_block_image'];
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
        <label for="solution_block_image">Solution - Image</label>
        <input   class="form-control" type="file" name="solution_block_image" id="solution_block_image" aria-describedby="solution_block_image_help">
        <?php $__errorArgs = ['solution_block_image'];
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
    <br>
    <label for="color">Choose a color</label>
    <select class="form-control" name="color" id="color">
        <option>red</option>
        <option>blue</option>
        <option>fiolet</option>
        <option>yellow</option>
    </select>
    <br>
    <input type="submit" name="submit_btn" class="btn btn-primary" value="Add">

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("binshopsblog_admin::layouts.admin_layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\datatile\vendor\binshops\laravel-blog\src/Views/binshopsblog_admin/solutions/index.blade.php ENDPATH**/ ?>