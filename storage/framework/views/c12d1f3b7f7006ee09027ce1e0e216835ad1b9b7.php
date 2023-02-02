<?php $__currentLoopData = $category_tree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $trans =  $category->categoryTranslations->where('lang_id',$lang_id)->first();?>
    <?php if($trans != null): ?>
        <li class="category-item-wrapper">
            <?php $nameChain = $nameChain .'/'. $trans->slug ?>

            <a href="<?php echo e(route("binshopsblog.view_category",[$locale, $nameChain ])); ?>">
                 <span class="category-item" value='<?php echo e($category->category_id); ?>'>
        <?php echo e($trans->category_name); ?>


                     <?php if( count($category->siblings) > 0): ?>
                         <ul>
                 <?php echo $__env->make("binshopsblog::partials._category_partial", [
    'category_tree' => $category->siblings,
    'name_chain' => $nameChain
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 </ul>
                     <?php endif; ?>
                 </span>
            </a>
        </li>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/c/cq12260/test/public_html/resources/views/vendor/binshopsblog/partials/_category_partial.blade.php ENDPATH**/ ?>