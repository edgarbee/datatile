<div class='search-form-outer'>
    <form method='get' action='#'>
        <input type='text' name='s' placeholder='Search tips' class='form-control' id="search">
        <button type='submit' value='Search' class='btn-search'></button>
    </form>
    <div class="search-list">
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(function () {
        $('#search').on('keyup', function () {
            var query = $(this).val();
            $.ajax({
                url: "<?php echo e(route('search')); ?>",
                type: "GET",
                data: {'search': query},
                beforeSend: function (data) {
                    $('.search-list').show();
                    $('.search-list').html('<div class="search-item">Loading...</div>');
                },
                success: function (data) {
                    $('.search-list').html(data);
                }
            });

            if (query == '') {
                $('.search-list').hide();
            }
        });
    });
</script>    
<?php $__env->stopPush(); ?><?php /**PATH C:\OpenServer\domains\datatile\resources\views/vendor/binshopsblog/sitewide/search_form.blade.php ENDPATH**/ ?>