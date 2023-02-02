<div class='search-form-outer'>
    <form method='get' action='<?php echo e(route("binshopsblog.search", app('request')->get('locale'))); ?>'>
        <input type='text' name='s' placeholder='Search tips' class='form-control' value='<?php echo e(\Request::get("s")); ?>'>
        <button type='submit' value='Search' class='btn-search'></button>
    </form>
</div><?php /**PATH C:\OSPanel\domains\datatile\resources\views/vendor/binshopsblog/sitewide/search_form.blade.php ENDPATH**/ ?>