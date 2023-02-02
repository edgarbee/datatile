<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <meta name="robots" content="noindex, nofollow" />
    <link href="https://uploads-ssl.webflow.com/61e95bdc5d19474896dacbb6/61e9e3e05630544770b43860_favicon.png" rel="shortcut icon" type="image/x-icon"/>
    <link rel="stylesheet" href="http://test.shamanicpower.ru/public/assets/css/style.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
</head>
<body>
<div class="main-section">
        <?php echo $__env->make("includes.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container">
            <?php echo $__env->make('binshopsblog::sitewide.search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="row-posts">
                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php echo $__env->make("binshopsblog::partials.index_loop", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class='alert alert-danger'>No posts!</div>
                <?php endif; ?>
                <?php echo e($posts->links('vendor.pagination.bootstrap-4')); ?>

            </div>
        </div>

        <footer>
        <div class="footer">
            <div class="footer-container">
                <div class="footer-logo">
                    <a href="/">
                        <img src="http://test.shamanicpower.ru/public/assets/img/logo-footer.svg" alt="">
                    </a>
                </div>
                <div class="footer-link">
                    <div class="col-md-4">
                        <a href="#">License Agreement Enterprise</a> 
                        <a href="#">License Agreement SaaS</a> 
                    </div>

                    <div class="col-md-3">
                        <a href="#">Privacy Policy</a> 
                        <a href="#">For Ukraine</a> 
                    </div>
                    
                    <div class="col-md-3">
                        <a href="#">Help Center</a> 
                        <a href="#">Cookie List</a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-after">
            <div class="date order-2">
                © 2022 DataTile Ltd.
            </div>
            <div class="footer-contact order-1">
                <div class="footer-contact-img">
                    <img src="http://test.shamanicpower.ru/public/assets/img/map.svg" alt="">
                </div>
                <div class="footer-contact-text">
                    195-197 Chr. Chatzipavlou Avenue,
                    4th Floor
                    Limassol 3036, Cyprus
                </div>
            </div>
            <div class="mail order-3">
                <a href="mailto:info@datatile.eu">
                info@datatile.eu
                </a>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>


    <script>
        $('.row-posts').infiniteScroll({
        // options
        path: '.pagination__next',
        append: '.post-container',
        history: false,
        });
    </script>

</body>
</html><?php /**PATH /home/c/cq12260/test/public_html/resources/views/vendor/binshopsblog/index.blade.php ENDPATH**/ ?>