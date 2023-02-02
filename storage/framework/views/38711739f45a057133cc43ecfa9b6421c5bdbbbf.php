<?php $__env->startSection("content"); ?>


    <h5>Admin - Add post</h5>
    <p>Change language option to translate your post in different language</p>
    <form id="add-post-form" method='post' action='<?php echo e(route("binshopsblog.admin.store_post")); ?>'  enctype="multipart/form-data" >

        <?php echo csrf_field(); ?>
        <?php echo $__env->make("binshopsblog_admin::posts.form", [
    'post' => $post,
    'post_translation' => $post_translation
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <input id="post_id" name="post_id" type="number" value="<?php echo e($post_id); ?>" hidden>
        <input type='submit' name="submit_btn" class='btn btn-primary' value='Add new post' >

    </form>

    <script>
        //multi language
        var store_toggle_url = '<?php echo e(route("binshopsblog.admin.store_post_toggle")); ?>';
        var preLang = $('#language_list').val();
        $('#language_list').change(function (){
            $('#add-post-form').attr('action', store_toggle_url);

            $('#selected_lang').val($('#language_list').val());
            $('#language_list').val(preLang);
            console.log($('#language_list').val())
            $('#add-post-form').trigger('submit');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("binshopsblog_admin::layouts.admin_layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c/cq12260/test/public_html/vendor/binshops/laravel-blog/src/Views/binshopsblog_admin/posts/add_post.blade.php ENDPATH**/ ?>