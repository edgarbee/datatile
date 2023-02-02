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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    let links = document.querySelectorAll(".main-menu a");
    let pathname = window.location.pathname;
    links.forEach(function(el) {
    let hrefValue = el.getAttribute("href");
    if (hrefValue == pathname) {
        el.classList.add("active");
    }
    });
</script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\datatile\resources\views/layouts/app.blade.php ENDPATH**/ ?>