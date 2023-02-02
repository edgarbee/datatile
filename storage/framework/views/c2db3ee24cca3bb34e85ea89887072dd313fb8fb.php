<?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>



    <div class="card bg-light mb-3">
        <div class="card-header">
            <?php echo e($comment->author()); ?>


            <?php if(config("binshopsblog.comments.ask_for_author_website") && $comment->author_website): ?>
                (<a href='<?php echo e($comment->author_website); ?>' target='_blank' rel='noopener'>website</a>)
            <?php endif; ?>

            <span class="float-right" title='<?php echo e($comment->created_at); ?>'><small><?php echo e($comment->created_at->diffForHumans()); ?></small></span>
        </div>
        <div class="card-body bg-white">
            <p class="card-text"><?php echo nl2br(e($comment->comment)); ?></p>
        </div>
    </div>





<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class='alert alert-info'>No comments yet! Why don't you be the first?</div>
<?php endif; ?>

<?php if(count($comments)> config("binshopsblog.comments.max_num_of_comments_to_show",500) - 1): ?>
    <p><em>Only the first <?php echo e(config("binshopsblog.comments.max_num_of_comments_to_show",500)); ?> comments are
            shown.</em>
    </p>
<?php endif; ?>

<?php /**PATH /home/c/cq12260/test/public_html/resources/views/vendor/binshopsblog/partials/built_in_comments.blade.php ENDPATH**/ ?>