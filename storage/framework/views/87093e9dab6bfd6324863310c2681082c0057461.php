<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Blog Admin - <?php echo e(config('app.name', 'Laravel')); ?></title>


    <!-- jQuery is only used for hide(), show() and slideDown(). All other features use vanilla JS -->
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito" crossorigin="anonymous">

    <!-- Styles -->
    
    <link href="<?php echo e(asset('binshopsblog_admin_css.css')); ?>" rel="stylesheet">
    
    
    
    
    
    


</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand binshops-blog-title" href="<?php echo e(route('binshopsblog.admin.index')); ?>">
                Datatile Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            <div class='row full-width-div nav-bar-full'>
                <div class='list-group-color'>
                    <?php echo $__env->make("binshopsblog_admin::layouts.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class='col-md-9 main-content'>

                    <?php if(isset($errors) && count($errors)): ?>
                        <div class="alert alert-danger">
                            <b>Sorry, but there was an error:</b>
                            <ul class='m-0'>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>


                    

                    <?php if(\BinshopsBlog\Helpers::has_flashed_message()): ?>
                        <div class='alert alert-info'>
                            <h3><?php echo e(\BinshopsBlog\Helpers::pull_flashed_message()); ?></h3>
                        </div>
                    <?php endif; ?>

                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </main>
</div>

</body>
</html>
<?php /**PATH C:\OSPanel\domains\datatile\vendor\binshops\laravel-blog\src/Views/binshopsblog_admin/layouts/admin_layout.blade.php ENDPATH**/ ?>