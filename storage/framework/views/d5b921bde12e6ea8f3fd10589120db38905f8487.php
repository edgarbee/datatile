<div class="form-group">
    <label for="language_list">Select Language</label>
    <select id="language_list" name='lang_id' class='form-control'>
        <?php $__currentLoopData = $language_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option  value='<?php echo e($language->id); ?>' <?php if($language->id == $selected_lang): ?>selected="selected" <?php endif; ?>>
                <?php echo e($language->name); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="form-group">
    <label for="blog_title">Blog Post Title</label>
    <input type="text" class="form-control" required id="blog_title" aria-describedby="blog_title_help" name='title'
           value="<?php echo e(old("title",$post_translation->title)); ?>"                    oninput="populate_slug_field();"
    >
    <small id="blog_title_help" class="form-text text-muted">The title of the blog post</small>
</div>

<div class="form-group">
    <label for="blog_subtitle">Subtitle</label>
    <input type="text" class="form-control" id="blog_subtitle" aria-describedby="blog_subtitle_help" name='subtitle'
           value='<?php echo e(old("subtitle",$post_translation->subtitle)); ?>'>
    <small id="blog_subtitle_help" class="form-text text-muted">The subtitle of the blog post (optional)</small>
</div>


<div class='row'>


    <div class='col-sm-12 col-md-4'>


        <div class="form-group">
            <label for="blog_slug">Blog Post Slug</label>
            <input type="text" class="form-control" id="blog_slug" aria-describedby="blog_slug_help" name='slug'
                   value="<?php echo e(old("slug",$post_translation->slug)); ?>">
            <small id="blog_slug_help" class="form-text text-muted">The slug (leave blank to auto generate) - i.e.<?php echo e(route("binshopsblog.single", [app('request')->get('locale'), "your-slug"])); ?></small>
        </div>

    </div>
    <div class='col-sm-6 col-md-4'>


        <div class="form-group">
            <label for="blog_is_published">Published?</label>

            <select name='is_published' class='form-control' id='blog_is_published'
                    aria-describedby='blog_is_published_help'>

                <option <?php if(old("is_published",$post->is_published) == '1'): ?> selected='selected' <?php endif; ?> value='1'>
                    Published
                </option>
                <option <?php if(old("is_published",$post->is_published) == '0'): ?> selected='selected' <?php endif; ?> value='0'>Not
                    Published
                </option>

            </select>
            <small id="blog_is_published_help" class="form-text text-muted">Should this be published? If not, then it
                won't be
                publicly viewable.
            </small>
        </div>

    </div>
    <div class='col-sm-6 col-md-4'>

        <div class="form-group">
            <label for="blog_posted_at">Posted at</label>
            <input type="text" class="form-control" id="blog_posted_at" aria-describedby="blog_posted_at_help"
                   name='posted_at'
                   value="<?php echo e(old("posted_at",$post->posted_at ?? \Carbon\Carbon::now())); ?>">
            <small id="blog_posted_at_help" class="form-text text-muted">When this should be published. If this value is
                greater
                than now (<?php echo e(\Carbon\Carbon::now()); ?>) then it will not (yet) appear on your blog. Should be in the <code>YYYY-MM-DD
                    HH:MM:SS</code> format.
            </small>
        </div>


    </div>
</div>


<div class="form-group">
    <label for="blog_post_body">Post Body
        <?php if(config("binshopsblog.echo_html")): ?>
            (HTML)
        <?php else: ?>
         (Html will be escaped)
        <?php endif; ?>

    </label>
    <textarea style='min-height:600px;' class="form-control" id="blog_post_body" aria-describedby="blog_post_body_help"
              name='post_body'><?php echo e(old("post_body",$post_translation->post_body)); ?></textarea>


    <div class='alert alert-warning'>
        If you want to add HTML content to be rendered, click source button at top left, and then paste your HTML snippet. (Youtube iFrames)
    </div>
</div>


<?php if(config("binshopsblog.use_custom_view_files",true)): ?>
    <div class="form-group">
        <label for="blog_use_view_file">Custom View File</label>
        <input type="text" class="form-control" id="blog_use_view_file" aria-describedby="blog_use_view_file_help"
               name='use_view_file'
               value='<?php echo e(old("use_view_file",$post_translation->use_view_file)); ?>'>
        <small id="blog_use_view_file_help" class="form-text text-muted">Optional - if anything is entered here, then it
            will attempt to load <code>view("custom_blog_posts." . $use_view_file)</code>. You must create the file in
            /resources/views/custom_blog_posts/FILENAME.blade.php.
        </small>
    </div>
<?php endif; ?>



<div class="form-group">
    <label for="blog_seo_title">SEO: <?php echo e("<title>"); ?> tag (optional)</label>
    <input class="form-control" id="blog_seo_title" aria-describedby="blog_seo_title_help"
           name='seo_title' tyoe='text' value='<?php echo e(old("seo_title",$post_translation->seo_title)); ?>' >
    <small id="blog_seo_title_help" class="form-text text-muted">Enter a value for the <?php echo e("<title>"); ?> tag. If nothing is provided here we will just use the normal post title from above (optional)</small>
</div>

<div class="form-group">
    <label for="blog_meta_desc">Meta Desc (optional)</label>
    <textarea class="form-control" id="blog_meta_desc" aria-describedby="blog_meta_desc_help"
              name='meta_desc'><?php echo e(old("meta_desc",$post_translation->meta_desc)); ?></textarea>
    <small id="blog_meta_desc_help" class="form-text text-muted">Meta description (optional)</small>
</div>

<div class="form-group">
    <label for="blog_short_description">Short Desc (optional)</label>
    <textarea class="form-control" id="blog_short_description" aria-describedby="blog_short_description_help"
              name='short_description'><?php echo e(old("short_description",$post_translation->short_description)); ?></textarea>
    <small id="blog_short_description_help" class="form-text text-muted">Short description (optional - only useful if you use in your template views)</small>
</div>

<?php if(config("binshopsblog.image_upload_enabled",true)): ?>

    <div class='bg-white pt-4 px-4 pb-0 my-2 mb-4 rounded border'>
        <style>
            .image_upload_other_sizes {
                display: none;
            }
        </style>
        <h4>Featured Images</h4>


        <?php $__currentLoopData = config("binshopsblog.image_sizes"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size_key =>$size_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group mb-4 p-2
        <?php if($loop->iteration>1): ?>
                    image_upload_other_sizes
            <?php endif; ?>
                    ">
                <?php if($post_translation->has_image($size_info['basic_key'])): ?>
                    <div style='max-width:55px;  ' class='float-right m-2'>
                        <a style='cursor: zoom-in;' target='_blank' href='<?php echo e($post_translation->image_url($size_info['basic_key'])); ?>'>
                            <?=$post_translation->image_tag($size_info['basic_key'], false, 'd-block mx-auto img-fluid '); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <label for="blog_<?php echo e($size_key); ?>">Image - <?php echo e($size_info['name']); ?> (optional)</label>
                <small id="blog_<?php echo e($size_key); ?>_help" class="form-text text-muted">Upload <?php echo e($size_info['name']); ?> image -
                    <code><?php echo e($size_info['w']); ?>&times;<?php echo e($size_info['h']); ?>px</code> - it will
                    get automatically resized if larger
                </small>
                <input class="form-control" type="file" name="<?php echo e($size_key); ?>" id="blog_<?php echo e($size_key); ?>"
                       aria-describedby="blog_<?php echo e($size_key); ?>_help">

                <?php if($post_translation->has_image($size_info['basic_key'])): ?>
                    <a style="color: darkred" href="<?php echo e(route("binshopsblog.admin.remove_photo",[
     $post_translation->slug,
     $selected_lang
    ]
    )); ?>">Remove Image</a>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <p>
            By default it will resize for all images based on the first image. If you want to select specific images for
            each size, please click: <span onclick='$(this).parent().hide(); $(".image_upload_other_sizes").slideDown()'
                                           class='btn btn-light btn-sm'>Show other sizes</span>
        </p>

    </div>
<?php else: ?>
    <div class='alert alert-warning'>Image uploads were disabled in binshopsblog.php config</div>
<?php endif; ?>


<div class='bg-white pt-4 px-4 pb-0 my-2 mb-4 rounded border'>
    <h4>Categories:</h4>
    <div class='row'>

        <?php $__empty_1 = true; $__currentLoopData = $cat_ts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $translation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="form-check col-sm-6">
                <input class="" type="checkbox" value="1"
                       <?php if(old("category.".$translation->category_id, $post->categories->contains($translation->category_id))): ?> checked='checked'
                       <?php endif; ?> name='category[<?php echo e($translation->category_id); ?>]' id="category_check<?php echo e($translation->category_id); ?>">
                <label class="form-check-label" for="category_check<?php echo e($translation->category_id); ?>">
                    <?php echo e($translation->category_name); ?>

                </label>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class='col-md-12'>
                No categories
            </div>
        <?php endif; ?>

        <div class='col-md-12 my-3 text-center'>

            <em><a class="a-link-cart-color" target='_blank' href='<?php echo e(route("binshopsblog.admin.categories.create_category")); ?>'><i class="fa fa-external-link" aria-hidden="true"></i>
                    Add new categories
                    here</a></em>
        </div>
    </div>
</div>

<input id="selected_lang" name="selected_lang" type="number" value="-1" hidden>

<script>
    SHOULD_AUTO_GEN_SLUG = false;

    /* Generate the slug field, if it was not touched by the user (or if it was an empty string) */
    function populate_slug_field() {

//        alert("A");
        var cat_slug = document.getElementById('blog_slug');

        if (cat_slug.value.length < 1) {
            // if the slug field is empty, make sure it auto generates
            SHOULD_AUTO_GEN_SLUG = true;
        }

        if (SHOULD_AUTO_GEN_SLUG) {
            // the slug hasn't been manually changed (or it was set above), so we should generate the slug
            // This is done in two stages - one to remove non words/spaces etc, the another to replace white space (and underscore) with a -
            cat_slug.value =document.getElementById("blog_title").value.toLowerCase()
                .replace(/[^\w-_ ]+/g, '') // replace with nothing
                .replace(/[_ ]+/g, '-') // replace _ and spaces with -
                .substring(0,99); // limit str length

        }

    }

    if (document.getElementById("blog_slug").value.length < 1) {
        SHOULD_AUTO_GEN_SLUG = true;
    } else {
        SHOULD_AUTO_GEN_SLUG = false; // there is already a value in #category_slug, so lets pretend it was changed already.
    }

</script>

<?php if( config("binshopsblog.use_wysiwyg") && config("binshopsblog.echo_html")): ?>
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
    <script src="<?php echo e(asset('config.js')); ?>"></script>
    <script>
        
         var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
        };
        if( typeof(CKEDITOR) !== "undefined" ) {
            CKEDITOR.replace('post_body', options);
        }
    </script>
    
<?php endif; ?>
<?php /**PATH C:\OpenServer\domains\datatile\vendor\binshops\laravel-blog\src/Views/binshopsblog_admin/posts/form.blade.php ENDPATH**/ ?>