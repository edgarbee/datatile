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
        <header>
            <div class="header">
                <div class="container sup-container">
                    <div class="logo">
                        <img src="http://test.shamanicpower.ru/public/assets/img/logo.svg" alt="">
                    </div>
                    <div class="sup-menu">
                        <div class="login">
                            <div class="button">
                                <a class="btn btn-login" href="#">
                                  <span>Log in</span>
                                </a>
                            </div>
                        </div>
                        <div class="request">
                            <div class="button">
                                <a class="btn btn-request" href="#">
                                  <span>Request Price</span>
                                </a>
                            </div>
                        </div>
                        <div class="mob-menu">
                            <img src="http://test.shamanicpower.ru/public/assets/img/menu.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="main-menu">
                        <nav>
                            <ul class="list-menu topmenu">
                            <?php $__currentLoopData = Menu::getByName('Main Menu'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="category-item-wrapper list-item-menu">
                                    <a href="<?php echo e($menu['link']); ?>" title=""><?php echo e($menu['label']); ?></a>
                                    <?php if( $menu['child'] ): ?>
                                    <ul class="submenu">
                                        <?php $__currentLoopData = $menu['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="category-item-wrapper list-item-menu"><a href="<?php echo e($child['link']); ?>" title=""><?php echo e($child['label']); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul><!-- /.sub-menu -->
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="container search-container">
            <?php echo $__env->make('binshopsblog::sitewide.search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <h2>Search Results for - <?php echo e($query); ?></h2>

            <div class="row-posts">
            <?php $search_count = 0;?>
            <?php $__empty_1 = true; $__currentLoopData = $search_results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if(isset($result->indexable)): ?>
                    <?php $search_count += $search_count + 1; ?>
                    <?php $post = $result->indexable; ?>
                    <?php if($post && is_a($post,\BinshopsBlog\Models\BinshopsPostTranslation::class)): ?>
                        <?php echo $__env->make("binshopsblog::partials.index_loop", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php else: ?>
                        <div class='alert alert-danger'>Unable to show this search result - unknown type</div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class='alert alert-danger'>Sorry, but there were no results!</div>
            <?php endif; ?>
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
</body>
</html><?php /**PATH /home/c/cq12260/test/public_html/resources/views/vendor/binshopsblog/search.blade.php ENDPATH**/ ?>