<ul class="list-group">
    <li class="list-group-item list-group-color justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="<?php echo e(route('binshopsblog.admin.index')); ?>">Dashboard</a>
                <span class="text-muted">(<?php
                    $categoryCount = \BinshopsBlog\Models\BinshopsPost::count();

                    echo $categoryCount . " " . str_plural("Post", $categoryCount);

                    ?>)</span>
            </h6>
            <small class="text-muted">Overview of your posts</small>

            <div class="list-group ">

                <a href='<?php echo e(route('binshopsblog.admin.index')); ?>'
                   class='list-group-item list-group-color list-group-item list-group-color-action <?php if(\Request::route()->getName() === 'binshopsblog.admin.index'): ?> active <?php endif; ?>  '><i
                            class="fa fa-th fa-fw"
                            aria-hidden="true"></i>
                    All Posts</a>
                <a href='<?php echo e(route('binshopsblog.admin.create_post')); ?>'
                   class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.create_post'): ?> active <?php endif; ?>  '><i
                            class="fa fa-plus fa-fw" aria-hidden="true"></i>
                    Add Post</a>
            </div>
        </div>
    </li>


    <!-- <li class="list-group-item list-group-color justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="<?php echo e(route('binshopsblog.admin.comments.index')); ?>">Comments</a>

                <span class="text-muted">(<?php
                    $commentCount = \BinshopsBlog\Models\BinshopsComment::withoutGlobalScopes()->count();

                    echo $commentCount . " " . str_plural("Comment", $commentCount);

                    ?>)</span>
            </h6>
            <small class="text-muted">Manage your comments</small>

            <div class="list-group ">
                <a href='<?php echo e(route('binshopsblog.admin.comments.index')); ?>'
                   class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.comments.index' && !\Request::get("waiting_for_approval")): ?> active <?php endif; ?>   '><i
                            class="fa  fa-fw fa-comments" aria-hidden="true"></i>
                    All Comments</a>


                <?php $comment_approval_count = \BinshopsBlog\Models\BinshopsComment::withoutGlobalScopes()->where("approved", false)->count(); ?>

                <a href='<?php echo e(route('binshopsblog.admin.comments.index')); ?>?waiting_for_approval=true'
                   class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.comments.index' && \Request::get("waiting_for_approval")): ?> active <?php elseif($comment_approval_count>0): ?> list-group-item list-group-color-warning <?php endif; ?>  '><i
                            class="fa  fa-fw fa-comments" aria-hidden="true"></i>
                    <?php echo e($comment_approval_count); ?>

                    Waiting for approval </a>

            </div>
        </div>
    </li> -->


    <li class="list-group-item list-group-color  justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="<?php echo e(route('binshopsblog.admin.categories.index')); ?>">Categories</a>
                <span class="text-muted">(<?php
                    $postCount = \BinshopsBlog\Models\BinshopsCategory::count();
                    echo $postCount . " " . str_plural("Category", $postCount);
                    ?>)</span>
            </h6>


            <small class="text-muted">Blog post categories</small>

            <div class="list-group ">
                <a href='<?php echo e(route('binshopsblog.admin.categories.index')); ?>'
                   class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.categories.index'): ?> active <?php endif; ?>  '><i
                            class="fa fa-object-group fa-fw" aria-hidden="true"></i>
                    All Categories</a>
                <a href='<?php echo e(route('binshopsblog.admin.categories.create_category')); ?>'
                   class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.categories.create_category'): ?> active <?php endif; ?>  '><i
                            class="fa fa-plus fa-fw" aria-hidden="true"></i>
                    Add Category</a>
            </div>
        </div>

    </li>


    <li class="list-group-item list-group-color  justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="<?php echo e(route('binshopsblog.admin.languages.index')); ?>">Languages</a></h6>

            <div class="list-group ">

                <a href='<?php echo e(route('binshopsblog.admin.languages.index')); ?>'
                   class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.languages.index'): ?> active <?php endif; ?>  '><i
                            class="fa fa-language fa-fw" aria-hidden="true"></i>
                    All Languages</a>

                <a href='<?php echo e(route('binshopsblog.admin.languages.create_language')); ?>'
                   class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.languages.create_language'): ?> active <?php endif; ?>  '><i
                            class="fa fa-plus fa-fw" aria-hidden="true"></i>
                    Add new Language</a>
            </div>
        </div>
    </li>


    <li class="list-group-item list-group-color  justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="<?php echo e(route('binshopsblog.admin.menu.index')); ?>">Menu Editor</a></h6>

            <div class="list-group ">

                <a href='<?php echo e(route('binshopsblog.admin.menu.index')); ?>'
                   class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.menu.index'): ?> active <?php endif; ?>  '><i
                            class="fa fa-plus fa-fw" aria-hidden="true"></i>
                            Menu Editor</a>
            </div>
        </div>
    </li>

    <li class="list-group-item list-group-color  justify-content-between lh-condensed">
        <div>
            <h6 class="my-0">
                <a href="<?php echo e(route('binshopsblog.admin.solutions.main')); ?>">
                Solutions
                </a>
                <span class="text-muted">(<?php
                    $solutionCount = \BinshopsBlog\Models\Solutions::count();
                    echo $solutionCount . " " . str_plural("Solutions", $solutionCount);
                    ?>)</span>
            </h6>

            <div class="list-group ">

                <a href='<?php echo e(route('binshopsblog.admin.solutions.main')); ?>'
                   class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.solutions.main'): ?> active <?php endif; ?>  '><i class="fa fa-th fa-fw" aria-hidden="true"></i>
                            All Solutions</a>

                <a href='<?php echo e(route('binshopsblog.admin.solutions.index')); ?>'
                   class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.solutions.index'): ?> active <?php endif; ?>  '><i
                            class="fa fa-plus fa-fw" aria-hidden="true"></i>
                            Add solutions</a>
            </div>
        </div>
    </li>

    <li class="list-group-item list-group-color  justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="<?php echo e(route('binshopsblog.admin.page.main')); ?>">Page</a>
            <span class="text-muted">(<?php
                    $pageCount = \BinshopsBlog\Models\Pages::count();
                    echo $pageCount . " " . str_plural("Pages", $pageCount);
                    ?>)</span>
            </h6>

            <div class="list-group ">

                <a href='<?php echo e(route('binshopsblog.admin.page.main')); ?>'
                   class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.page.main'): ?> active <?php endif; ?>  '><i class="fa fa-th fa-fw" aria-hidden="true"></i>
                            All Pages</a>

                <a href='<?php echo e(route('binshopsblog.admin.page.index')); ?>'
                   class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.page.index'): ?> active <?php endif; ?>  '><i
                            class="fa fa-plus fa-fw" aria-hidden="true"></i>
                            Add page</a>
            </div>
        </div>
    </li>


    <!-- <?php if(config("binshopsblog.image_upload_enabled")): ?>
        <li class="list-group-item list-group-color  justify-content-between lh-condensed">
            <div>
                <h6 class="my-0"><a href="<?php echo e(route('binshopsblog.admin.images.upload')); ?>">Upload images</a></h6>

                <div class="list-group ">

                    <a href='<?php echo e(route('binshopsblog.admin.images.all')); ?>'
                       class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.images.all'): ?> active <?php endif; ?>  '><i
                                class="fa fa-picture-o fa-fw" aria-hidden="true"></i>
                        View All</a>

                    <a href='<?php echo e(route('binshopsblog.admin.images.upload')); ?>'
                       class='list-group-item list-group-color list-group-item list-group-color-action  <?php if(\Request::route()->getName() === 'binshopsblog.admin.images.upload'): ?> active <?php endif; ?>  '><i
                                class="fa fa-upload fa-fw" aria-hidden="true"></i>
                        Upload</a>
                </div>
            </div>
        </li>
    <?php endif; ?> -->
</ul>
<?php /**PATH /home/c/cq12260/test/public_html/vendor/binshops/laravel-blog/src/Views/binshopsblog_admin/layouts/sidebar.blade.php ENDPATH**/ ?>