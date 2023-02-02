<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="robots" content="noindex, nofollow" />
    <link href="<?php echo e(asset('assets/img/favicon.png')); ?>" rel="shortcut icon" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="<?php echo $__env->yieldContent('body-class'); ?>">
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$('header').on('click', 'a.menu', function () {
    $('#menu').toggle('slide', {
        'direction': 'left'
    }, 300);
    return false;
});
$('#menu').on('click', '.title a', function () {
    $('#menu').hide('slide', { 'direction': 'left' }, 300);
    return false;
});
$('.flex-link').on('click', function(){
    $(this).toggleClass('active');
    $(this).parent().find('.submenu').toggleClass('active');
    return false;
});
$('#arrow-clients').on('click', function(){
    $(this).toggleClass('active');
    $('.comments-item.hidden').toggleClass('active');
    return false;
});
</script>
<script>
    (function() {
    [...this.querySelectorAll("a")]
        .filter(a => this.URL.startsWith(a.href))
        .forEach(a => a.classList.add("active"));
    }.bind(window.document)());
</script>
</body>
</html>
<?php /**PATH /home/c/cq12260/test/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>