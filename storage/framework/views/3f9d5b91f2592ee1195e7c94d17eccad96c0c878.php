<?php $__currentLoopData = $category_tree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $ct = $category->categoryTranslations->where('lang_id', $language_id)->first();
    ?>
    <?php if(isset($ct)): ?>
        <li>
        <?php
            $categoryMore = \Illuminate\Support\Facades\DB::table('binshops_category_translations')->where('category_id', $category->id)->first();
        ?> 
        <a href="<?php echo e($category->categoryTranslations->where('lang_id' , $language_id)->first()->edit_url()); ?>">
             <span value='<?php echo e($category->id); ?>'>
                <b>Category:</b> <?php echo e($category->categoryTranslations->where('lang_id', $language_id)->first()->category_name); ?>

            </span>
        </a>
            <?php
            $posts = \Illuminate\Support\Facades\DB::table('binshops_post_categories')->where('category_id', $category->id)->get();
            ?>
            <ul>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <?php
                $postMore = \Illuminate\Support\Facades\DB::table('binshops_post_translations')->where('post_id', $post->id)->first();
                ?>     
                <li>
                    <a href="<?php echo e(route('binshopsblog.admin.edit_post', ['blogPostId'=>$postMore->id])); ?>">
                        <span value='<?php echo e($post->id); ?>'>
                            <b>Post:</b> <?php echo e($postMore->title); ?>

                        </span>
                    </a>
                </li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if( count($category->siblings) > 0 && count($category->siblings) != 2): ?>       
                <?php echo $__env->make("binshopsblog_admin::tree._tree_partial", ['category_tree' => $category->siblings], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        
            <?php endif; ?>
            </ul>
        </li>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\OpenServer\domains\datatile\vendor\binshops\laravel-blog\src/Views/binshopsblog_admin/tree/_tree_partial.blade.php ENDPATH**/ ?>