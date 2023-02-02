<div class=''>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class='btn btn-outline-secondary btn-sm m-1' href='<?php echo e($category->categoryTranslations[0]->url($locale)); ?>'>
                        <?php echo e($category->categoryTranslations[0]->category_name); ?>

                </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/c/cq12260/test/public_html/resources/views/vendor/binshopsblog/partials/categories.blade.php ENDPATH**/ ?>