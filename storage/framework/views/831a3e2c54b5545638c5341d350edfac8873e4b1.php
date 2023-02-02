
<?php $__env->startSection("content"); ?>

<div class="form-group">
    <label for="category_slug">Categories with posts Tree</label>
    <ul class="wtree">
        <?php echo $__env->make("binshopsblog_admin::tree._tree_partial", ['category_tree' => $cat_roots], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </ul>
</div>

<div class="form-group">
    <label for="category_slug">Page Tree</label>
    <ul class="wtree">
        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('binshopsblog.admin.page.edit', ['pages_id'=>$page->id])); ?>">
                    <span><b>Page:</b> <?php echo e(strip_tags($page->title)); ?></span>
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = Menu::getByName('Main Menu'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e($menu['link']); ?>">
                    <span><b>Page:</b> <?php echo e($menu['label']); ?></span>
                </a>
                <?php if( $menu['child'] ): ?>
                <ul>
                    <?php $__currentLoopData = $menu['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e($child['link']); ?>">
                            <span><b>Page:</b> <?php echo e($child['label']); ?></span>
                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("binshopsblog_admin::layouts.admin_layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\datatile\vendor\binshops\laravel-blog\src/Views/binshopsblog_admin/tree/main.blade.php ENDPATH**/ ?>