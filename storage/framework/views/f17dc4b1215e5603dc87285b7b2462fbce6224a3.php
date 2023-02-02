<header>
    <div class="header">
        <div class="container sup-container">
            <div class="logo">
                <a href="/">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/logo.svg')); ?>" alt="">
                </a>
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
                    <a href="#" class="menu"><img loading="lazy" src="<?php echo e(asset('assets/img/menu.svg')); ?>" alt=""></a>
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
                            </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<div id="menu">
    <div class="title"><a class="close" href="#">&#215;</a></div>
    <nav>
        <ul class="list-menu topmenu">
        <?php $__currentLoopData = Menu::getByName('Main Menu'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="category-item-wrapper list-item-menu">
                <?php if( $menu['child'] ): ?>
                    <a href="<?php echo e($menu['link']); ?>" title="" class="flex-link"><?php echo e($menu['label']); ?> <img loading="lazy" src="<?php echo e(asset('assets/img/arrow.svg')); ?>" alt=""></a>
                <?php else: ?>
                    <a href="<?php echo e($menu['link']); ?>" title=""><?php echo e($menu['label']); ?></a>
                <?php endif; ?>
                <?php if( $menu['child'] ): ?>
                <ul class="submenu">
                    <?php $__currentLoopData = $menu['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="category-item-wrapper list-item-menu"><a href="<?php echo e($child['link']); ?>" title=""><?php echo e($child['label']); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </nav>
</div><?php /**PATH /home/c/cq12260/test/public_html/resources/views/includes/header.blade.php ENDPATH**/ ?>