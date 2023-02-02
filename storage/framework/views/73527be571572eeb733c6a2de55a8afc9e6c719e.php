<div class='add_comment_area'>
    <h5 class='text-center'>Add a comment</h5>
    <form method='post' action='<?php echo e(route("binshopsblog.comments.add_new_comment",[app('request')->get('locale'),$post->slug])); ?>'>
        <?php echo csrf_field(); ?>


        <div class="form-group ">

            <label id="comment_label" for="comment">Your Comment </label>
                    <textarea
                            class="form-control"
                            name='comment'
                            required
                            id="comment"
                            placeholder="Write your comment here"
                            rows="7"><?php echo e(old("comment")); ?></textarea>


        </div>

        <div class='container-fluid'>
            <div class='row'>

                <?php if(config("binshopsblog.comments.save_user_id_if_logged_in", true) == false || !\Auth::check()): ?>

                    <div class='col'>
                        <div class="form-group ">
                            <label id="author_name_label" for="author_name">Your Name </label>
                            <input
                                    type='text'
                                    class="form-control"
                                    name='author_name'
                                    id="author_name"
                                    placeholder="Your name"
                                    required
                                    value="<?php echo e(old("author_name")); ?>">
                        </div>
                    </div>

                    <?php if(config("binshopsblog.comments.ask_for_author_email")): ?>
                        <div class='col'>
                            <div class="form-group">
                                <label id="author_email_label" for="author_email">Your Email
                                    <small>(won't be displayed publicly)</small>
                                </label>
                                <input
                                        type='email'
                                        class="form-control"
                                        name='author_email'
                                        id="author_email"
                                        placeholder="Your Email"
                                        required
                                        value="<?php echo e(old("author_email")); ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>


                <?php if(config("binshopsblog.comments.ask_for_author_website")): ?>
                    <div class='col'>
                        <div class="form-group">
                            <label id="author_website_label" for="author_website">Your Website
                                <small>(Will be displayed)</small>
                            </label>
                            <input
                                    type='url'
                                    class="form-control"
                                    name='author_website'
                                    id="author_website"
                                    placeholder="Your Website URL"
                                    value="<?php echo e(old("author_website")); ?>">
                        </div>
                    </div>

                <?php endif; ?>
            </div>
        </div>


        <?php if($captcha): ?>
            
            <?php echo $__env->make($captcha->view(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>


        <div class="form-group ">
            <input type='submit' class="form-control input-sm btn btn-success "
                   value='Add Comment'>
        </div>

    </form>
</div>
<?php /**PATH /home/c/cq12260/test/public_html/resources/views/vendor/binshopsblog/partials/add_comment_form.blade.php ENDPATH**/ ?>