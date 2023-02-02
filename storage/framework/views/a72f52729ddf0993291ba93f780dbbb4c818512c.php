<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($post->gen_seo_title()); ?></title>
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

        <div class="container single-container">
            <?php echo $__env->make("binshopsblog::partials.full_post_details", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
</body>
</html><?php /**PATH /home/c/cq12260/test/public_html/resources/views/vendor/binshopsblog/single_post.blade.php ENDPATH**/ ?>