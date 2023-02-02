<?php $__env->startSection('title', 'DataTile Solutions'); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-section">
    <?php echo $__env->make("includes.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="container">
        <div class="main-section-solutions">
            <div class="main-title">
                <h1>
                    Research intelligence <span class="red">solutions</span><br>
                    for data-driven <span class="blue">decisions</span>
                </h1>
            </div>

            <div class="list-solution">
                <ul>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="#solution<?php echo e($i); ?>"><?php echo e(strip_tags($solution->title)); ?></a></li>
                    <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-image-solution">
        <img loading="lazy" class="d-xs-none" src="<?php echo e(asset('assets/img/soluition.png')); ?>" alt="">
        <img loading="lazy" class="d-xs-block" src="<?php echo e(asset('assets/img/soluition-mob.png')); ?>" alt="">
    </div>

    <div class="container">
        <?php ($j=1); ?>
        <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div id="solution<?php echo e($j); ?>" class="solutions <?php if($solution->color == 'red'): ?> solutions-1 <?php elseif($solution->color == 'blue'): ?> solutions-2 <?php elseif($solution->color == 'fiolet'): ?> solutions-3 <?php elseif($solution->color == 'yellow'): ?> solutions-4 <?php endif; ?>">
                <div class="item-decor">
                    <img loading="lazy" src="<?php echo e(asset('storage/'.$solution->image)); ?>" alt="">
                </div>
                <div class="solution-title <?php if($solution->color == 'blue' || $solution->color == 'yellow'): ?> solutions-left <?php else: ?> solutions-right <?php endif; ?>">
                    <h2>
                        <span class="<?php if($solution->color == 'red'): ?> red <?php elseif($solution->color == 'blue'): ?> blue <?php elseif($solution->color == 'fiolet'): ?> fiolet <?php elseif($solution->color == 'yellow'): ?> yellow <?php endif; ?>"><?php echo $solution->title; ?></span>
                    </h2>
                    <p class="small"><?php echo $solution->subtitle; ?></p>
                    <p class="text">
                    <?php echo $solution->description; ?>

                    </p>
                </div>

                <div class="row">
                    <div class="solution-container">
                        <div class="solution-item">
                            <div class="solution-item-img <?php if($solution->color == 'red'): ?> red-bg <?php elseif($solution->color == 'fiolet'): ?> fiolet-bg <?php elseif($solution->color == 'yellow'): ?> yellow-bg <?php endif; ?>">
                                <img loading="lazy" src="<?php echo e(asset('storage/'.$solution->first_block_image)); ?>" alt="">
                            </div>
                            <div class="solution-item-text">
                            <?php echo e($solution->first_block); ?>

                            </div>
                        </div>
                    </div>
        
                    <div class="solution-container">
                        <div class="solution-item">
                            <div class="solution-item-img">
                                <img loading="lazy" src="<?php echo e(asset('storage/'.$solution->second_block_image)); ?>" alt="">
                            </div>
                            <div class="solution-item-text">
                            <?php echo e($solution->second_block); ?>

                            </div>
                        </div>
                    </div>

                    <div class="solution-container">
                        <div class="solution-item">
                            <div class="solution-item-img">
                                <img loading="lazy" src="<?php echo e(asset('storage/'.$solution->third_block_image)); ?>" alt="">
                            </div>
                            <div class="solution-item-text">
                            <?php echo e($solution->third_block); ?>

                            </div>
                        </div>
                    </div>

                    <div class="solution-container">
                        <div class="solution-item">
                            <div class="solution-item-img <?php if($solution->color == 'blue'): ?> blue-bg <?php endif; ?>">
                                <img loading="lazy" src="<?php echo e(asset('storage/'.$solution->fourth_block_image)); ?>" alt="">
                            </div>
                            <div class="solution-item-text">
                            <?php echo e($solution->fourth_block); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php ($j++); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

<?php echo $__env->make("includes.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c/cq12260/test/public_html/resources/views/solutions.blade.php ENDPATH**/ ?>