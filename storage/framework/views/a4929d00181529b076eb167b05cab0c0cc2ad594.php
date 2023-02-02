<?php $__currentLoopData = $category_tree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $ct = $category->categoryTranslations->where('lang_id', $language_id)->first();
    ?>
    <?php if(isset($ct)): ?>
        <li>
         <span value='<?php echo e($category->category_id); ?>'>
        <?php echo e($category->categoryTranslations->where('lang_id', $language_id)->first()->category_name); ?>

        </span>
            <?php if( count($category->siblings) > 0): ?>
                <ul>
                    <?php echo $__env->make("binshopsblog_admin::categories._category_partial", ['category_tree' => $category->siblings], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/c/cq12260/test/public_html/vendor/binshops/laravel-blog/src/Views/binshopsblog_admin/categories/_category_partial.blade.php ENDPATH**/ ?>