<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>DataTile Login</title>
    <meta name="robots" content="noindex, nofollow" />
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\datatile\resources\views/layouts/applogin.blade.php ENDPATH**/ ?>