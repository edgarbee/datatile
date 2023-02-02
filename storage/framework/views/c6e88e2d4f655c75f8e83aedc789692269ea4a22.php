<?php $__env->startSection("content"); ?>


    <h5>Admin - Manage Blog Posts</h5>

    <?php $__empty_1 = true; $__currentLoopData = $post_translations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="card m-4" style="">
            <div class="card-body">
                <h5 class='card-title'><a class="a-link-cart-color" href='<?php echo e($post->url(app('request')->get('locale'))); ?>'><?php echo e($post->title); ?></a></h5>
                <h5 class='card-subtitle mb-2 text-muted'><?php echo e($post->subtitle); ?></h5>
                <p class="card-text"><?php echo e($post->html); ?></p>

                <?=$post->image_tag("thumbnail", false, "float-right");?>

                <dl class="">
                    <dt class="">Author</dt>
                    <dd class=""><?php echo e($post->post->author_string()); ?></dd>
                    <dt class="">Posted at</dt>
                    <dd class=""><?php echo e($post->post->posted_at); ?></dd>


                    <dt class="">Is published?</dt>
                    <dd class="">

                        <?php echo ($post->post->is_published ? "Yes" : '<span class="border border-danger rounded p-1">No</span>'); ?>


                    </dd>

                    <dt class="">Categories</dt>
                    <dd class="">
                        <?php if(count($post->post->categories)): ?>
                            <?php $__currentLoopData = $post->post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class='btn btn-outline-secondary btn-sm m-1' href='<?php echo e($category->categoryTranslations->where('lang_id' , $language_id)->first()->edit_url()); ?>'>
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                                    <?php echo e($category->categoryTranslations->where('lang_id' , $language_id)->first()->category_name); ?>

                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?> No Categories
                        <?php endif; ?>

                    </dd>
                </dl>


                <?php if($post->use_view_file): ?>
                    <h5>Uses Custom Viewfile:</h5>
                    <div class="m-2 p-1">
                        <strong>View file:</strong><br>
                        <code><?php echo e($post->use_view_file); ?></code>

                        <?php

                        $viewfile = resource_path("views/custom_blog_posts/" . $post->use_view_file . ".blade.php");


                        ?>
                        <br>
                        <strong>Full filename:</strong>
                        <br>
                        <small>
                            <code><?php echo e($viewfile); ?></code>
                        </small>

                        <?php if(!file_exists($viewfile)): ?>
                            <div class='alert alert-danger'>Warning! The custom view file does not exist. Create the
                                file for this post to display correctly.
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>


                <a href="<?php echo e($post->url(app('request')->get('locale'))); ?>" class="card-link btn btn-outline-secondary"><i class="fa fa-file-text-o"
                                                                                                                       aria-hidden="true"></i>
                    View Post</a>
                <a href="<?php echo e($post->edit_url()); ?>" class="card-link btn btn-primary">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    Edit Post</a>
                <form onsubmit="return confirm('Are you sure you want to delete this blog post?\n You cannot undo this action!');"
                      method='post' action='<?php echo e(route("binshopsblog.admin.destroy_post", $post->post_id)); ?>' class='float-right'>
                    <?php echo csrf_field(); ?>
                    <input name="_method" type="hidden" value="DELETE"/>
                    <button type='submit' class='btn btn-danger btn-sm'>
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        Delete
                    </button>
                </form>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class='alert alert-warning'>No posts to show you. Why don't you add one?</div>
    <?php endif; ?>

    
    
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make("binshopsblog_admin::layouts.admin_layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c/cq12260/test/public_html/vendor/binshops/laravel-blog/src/Views/binshopsblog_admin/index.blade.php ENDPATH**/ ?>