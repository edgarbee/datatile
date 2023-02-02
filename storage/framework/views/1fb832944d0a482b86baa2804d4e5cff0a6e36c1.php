
<?php $__env->startSection("content"); ?>


    <h5>Admin - Editing post
        <?php if($post_translation->slug): ?>
            <a target='_blank' href='<?php echo e($post_translation->url($selected_locale)); ?>' class='float-right btn btn-primary'>View post</a>
        <?php endif; ?>
    </h5>

    <form id="edit-post-form" method='post' action='<?php echo e(route("binshopsblog.admin.update_post",$post->id)); ?>'  enctype="multipart/form-data" >

        <p>
            To apply changes, click save changes for each language.
        </p>

        <?php echo csrf_field(); ?>
        <?php echo $__env->make("binshopsblog_admin::posts.form", [
          'post' => $post,
          'post_translation' => $post_translation
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <input type='submit' name="submit_btn" class='btn btn-primary' value='Save Changes' >

    </form>

    <script>
        //multi language
        var edit_toggle_url = '<?php echo e(route("binshopsblog.admin.edit_post_toggle",$post->id)); ?>';
        var preLang = $('#language_list').val();
        $('#language_list').change(function (){
            $("#edit-post-form").attr("method", "post");
            $('#edit-post-form').attr('action', edit_toggle_url);

            $('#selected_lang').val($('#language_list').val());
            $('#language_list').val(preLang);
            console.log($('#language_list').val())
            $('#edit-post-form').trigger('submit');
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("binshopsblog_admin::layouts.admin_layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\datatile\vendor\binshops\laravel-blog\src/Views/binshopsblog_admin/posts/edit_post.blade.php ENDPATH**/ ?>