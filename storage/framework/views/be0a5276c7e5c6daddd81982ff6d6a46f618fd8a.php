<?php $__env->startSection("content"); ?>


    <h5>Admin - Edit Category</h5>

    <form method='post' action='<?php echo e(route("binshopsblog.admin.categories.edit_category",$category->id)); ?>'  enctype="multipart/form-data" >

        <?php echo csrf_field(); ?>
        <?php echo method_field("patch"); ?>

        <script>
            SHOULD_AUTO_GEN_SLUG = false;

            /* Generate the slug field, if it was not touched by the user (or if it was an empty string) */
            function populate_slug_field() {

//        alert("A");
                var cat_slug = document.getElementById('category_slug');

                if (cat_slug.value.length < 1) {
                    // if the slug field is empty, make sure it auto generates
                    SHOULD_AUTO_GEN_SLUG = true;
                }

                if (SHOULD_AUTO_GEN_SLUG) {
                    // the slug hasn't been manually changed (or it was set above), so we should generate the slug
                    // This is done in two stages - one to remove non words/spaces etc, the another to replace white space (and underscore) with a -
                    cat_slug.value =document.getElementById("category_category_name").value.toLowerCase()
                        .replace(/[^\w-_ ]+/g, '') // replace with nothing
                        .replace(/[_ ]+/g, '-') // replace _ and spaces with -
                        .substring(0,99); // limit str length

                }

            }
        </script>
        <div class="form-group">
            <label for="category_category_name">Category Name</label>

            <input type="text"
                   class="form-control"
                   id="category_category_name"
                   oninput="populate_slug_field();"
                   required
                   aria-describedby="category_category_name_help"
                   name='category_name'
                   value="<?php echo e(old("category_name",$category_translation->category_name)); ?>"
            >

            <small id="category_category_name_help" class="form-text text-muted">The name of the category</small>
        </div>


        <div class="form-group">
            <label for="category_slug">Category slug</label>
            <input
                maxlength='100'
                pattern="[a-zA-Z0-9-]+"
                type="text"
                required
                class="form-control"
                id="category_slug"
                oninput="SHOULD_AUTO_GEN_SLUG=false;"
                aria-describedby="category_slug_help"
                name='slug'
                value="<?php echo e(old("slug",$category_translation->slug)); ?>"
            >

            <small id="category_slug_help" class="form-text text-muted">
                Letters, numbers, dash only. The slug
                i.e. <?php echo e(route("binshopsblog.view_category",[app('request')->get('locale'),""])); ?>/<u><em>this_part</em></u>. This must be unique (two categories can't
                share the same slug).

            </small>
        </div>

        <div class="form-group">
            <label for="category_slug">Parent Category</label>
            <select name='parent_id' class='form-control'>
                <option <?php if($category->parent_id == 0): ?> selected='selected' <?php endif; ?> value='0'>
                    Root
                </option>
                <?php $__currentLoopData = $categories_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($category->id != $category2->category_id): ?>
                    <option <?php if($category->parent_id == $category2->category_id): ?> selected='selected' <?php endif; ?> value='<?php echo e($category2->category_id); ?>'>
                        <?php echo e($category2->category_name); ?>

                    </option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>


        <div class="form-group">
            <label for="category_description">Category Description (optional)</label>
            <textarea name='category_description'
                      class='form-control'
                      id='category_description'><?php echo e(old("category_description",$category_translation->category_description)); ?></textarea>

        </div>

        <script>
            if (document.getElementById("category_slug").value.length < 1) {
                SHOULD_AUTO_GEN_SLUG = true;
            } else {
                SHOULD_AUTO_GEN_SLUG = false; // there is already a value in #category_slug, so lets pretend it was changed already.
            }
        </script>

        <input type='submit' class='btn btn-primary' value='Save Changes' >

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("binshopsblog_admin::layouts.admin_layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c/cq12260/test/public_html/vendor/binshops/laravel-blog/src/Views/binshopsblog_admin/categories/edit_category.blade.php ENDPATH**/ ?>