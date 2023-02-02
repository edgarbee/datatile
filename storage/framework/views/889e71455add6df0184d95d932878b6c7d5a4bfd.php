<?php if(\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts()): ?>
    <a href="<?php echo e($post->edit_url()); ?>" class="btn btn-outline-secondary btn-sm pull-right float-right">Edit
        Post</a>
<?php endif; ?>

<?=$post->image_tag("large", false, 'd-block mx-auto'); ?>

<h1 class='blog_title'><?php echo e($post->title); ?></h1>

<div class="blog_body_content">
    <?php echo $post->post_body_output(); ?>

</div>
<?php /**PATH /home/c/cq12260/test/public_html/resources/views/vendor/binshopsblog/partials/full_post_details.blade.php ENDPATH**/ ?>