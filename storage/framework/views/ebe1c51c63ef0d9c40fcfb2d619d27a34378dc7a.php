<?php $__env->startSection("content"); ?>

    <?php $__empty_1 = true; $__currentLoopData = $language_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <div class="card m-4">
            <div class="card-body">
                <h5 class='card-title'><?php echo e($language->name); ?></h5>
                <p><span><b>Locale: </b> <?php echo e($language->locale); ?></span></p>
                <p><span><b>Date format: </b> <?php echo e($language->date_format); ?></span></p>
                <p><span><b>Active: </b>
                        <?php if($language->active == 1): ?>
                            Yes
                        <?php else: ?>
                            No
                        <?php endif; ?>
                    </span></p>

                <form
                        onsubmit="return confirm('Are you sure you want to do this action?');"

                        method='post' action='<?php echo e(route("binshopsblog.admin.languages.toggle_language", $language->id)); ?>' class='float-left'>
                    <?php echo csrf_field(); ?>

                    <?php if($language->active == 1): ?>
                        <input type='submit' class='card-link btn btn-outline-secondary' value='Disable'/>

                    <?php else: ?>
                        <input type='submit' class='card-link btn btn-primary' value='Enable'/>
                    <?php endif; ?>
                </form>


                <form
                        onsubmit="return confirm('Are you sure you want to delete this language?\n You cannot undo this action!');"

                        method='post' action='<?php echo e(route("binshopsblog.admin.languages.destroy_language", $language->id)); ?>' class='float-right'>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <input type='submit' class='btn btn-danger btn-sm' value='Delete'/>
                </form>

            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class='alert alert-danger'>None found, why don't you add one?</div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("binshopsblog_admin::layouts.admin_layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c/cq12260/test/public_html/vendor/binshops/laravel-blog/src/Views/binshopsblog_admin/languages/index.blade.php ENDPATH**/ ?>