
<?php $__env->startSection('title', 'DataTile Home'); ?>

<?php $__env->startPush('styles'); ?> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make("includes.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-section">
            <div class="main-section-prod-container">
                <div class="container">
                    <div class="main-section-prod">
                        <div class="main-title">
                            <h1>
                                Analyzing research <br> data
                                <span class="red">intuitively,</span> <br>
                                <span class="blue">intelligently,</span> <br class="mobile-block"> <span class="fiolet">instantly</span>
                            </h1>
                        </div>

                        <div class="free-sandbox">
                            <div class="free-sandbox-text">
                                Make research fun again with lightning-fast<br> solutions that eliminate all the pain and errors!
                            </div>
                            <div class="free-sandbox-btn">
                                <div class="button">
                                    <a class="btn btn-sandbox" href="/about#formSubmitTitle">
                                    <span>Free Sandbox</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="main-num-container">
                            <div class="number-container">
                                <div class="numbers">
                                    <div class="number red">
                                        2,894
                                    </div>
                                    <div class="number-title">
                                        Interviews Uploaded
                                    </div>
                                </div>
                                <div class="numbers-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris semper, tellus vel mollis finibus, ex mi ullamcorper quam, et ultrices libero magna in neque.
                                </div>
                            </div>

                            <div class="number-container">
                                <div class="numbers">
                                    <div class="number yellow">
                                        23,958
                                    </div>
                                    <div class="number-title">
                                        Reports Served
                                    </div>
                                </div>
                                <div class="numbers-text">
                                    Donec sed egestas sem. Aliquam porta magna id scelerisque ornare. Nulla facilisi. Donec sodales commodo dui sit amet commodo. Ut ut est nisl.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

            <div class="container">
                <div class="companies-title">
                    Companies using DataTile
                </div>
            </div>

            <div class="clients_slider">
                <div class="slider">
                <div class="slide">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/RAM_logo_small.jpg')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/sinomonitor_small.png')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/Mediametrie%20logo.png')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/omd.svg')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/kantar.svg')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/ipsos.svg')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/global.svg')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/gfk.svg')); ?>">
                </div>
                <div class="slide">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/RAM_logo_small.jpg')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/sinomonitor_small.png')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/Mediametrie%20logo.png')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/omd.svg')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/kantar.svg')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/ipsos.svg')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/global.svg')); ?>">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/gfk.svg')); ?>">
                </div>
                </div>
            </div>
            <div class="human">
                <img loading="lazy" class="pc-human" src="<?php echo e(asset('assets/img/human.png')); ?>" alt="">
                <img loading="lazy" class="mob-human" src="<?php echo e(asset('assets/img/human1.png')); ?>" alt="">
            </div>

            <div class="restangle">
                <img loading="lazy" src="<?php echo e(asset('assets/img/restangle.png')); ?>" alt="">
            </div>
        </div>
    
    <div class="ceo">
        <div class="container">

            <div class="slider-container slider-mob">
                <div class="swiper mySwipermob">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img loading="lazy" src="<?php echo e(asset('assets/img/diagramm3.png')); ?>" alt=""></div>
                        <div class="swiper-slide"><img loading="lazy" src="<?php echo e(asset('assets/img/diagramm2.png')); ?>" alt=""></div>
                        <div class="swiper-slide"><img loading="lazy" src="<?php echo e(asset('assets/img/diagramm1.png')); ?>" alt=""></div>
                        <div class="swiper-slide"><img loading="lazy" src="<?php echo e(asset('assets/img/diagramm4.png')); ?>" alt=""></div>
                        <div class="swiper-slide"><img loading="lazy" src="<?php echo e(asset('assets/img/diagramm5.png')); ?>" alt=""></div>
                    </div>
                </div>
                <div class="swiper-button-next mobs"></div>
                <div class="swiper-button-prev mobs"></div>
            </div>

            <div class="section-ceo">
                <div class="ceo-quote">
                    <div class="ceo-quote-text">
                        “We created DataTile to eliminate all<br> pain points in the traditional research<br> delivery process.”
                    </div>
                    <div class="ceo-images-container">
                        <div class="ceo-images">
                            <img loading="lazy" src="<?php echo e(asset('assets/img/ceo.png')); ?>" alt="">
                        </div>
                        <div class="ceo-name">
                            Alex Chilingarian
                            <span>CEO @ DataTile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fiolet-bg">
        <div class="container sliderswiper">
            <div class="slider-container slider-pc">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img loading="lazy" src="<?php echo e(asset('assets/img/diagramm3.png')); ?>" alt=""></div>
                        <div class="swiper-slide"><img loading="lazy" src="<?php echo e(asset('assets/img/diagramm2.png')); ?>" alt=""></div>
                        <div class="swiper-slide"><img loading="lazy" src="<?php echo e(asset('assets/img/diagramm1.png')); ?>" alt=""></div>
                        <div class="swiper-slide"><img loading="lazy" src="<?php echo e(asset('assets/img/diagramm4.png')); ?>" alt=""></div>
                        <div class="swiper-slide"><img loading="lazy" src="<?php echo e(asset('assets/img/diagramm5.png')); ?>" alt=""></div>
                    </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="video-container">
                <div class="video">
                    <img loading="lazy" src="<?php echo e(asset('assets/img/video.png')); ?>" alt="">
                </div>
                <div class="video-title">
                    <h2>The fastest, most intelligent, most intuitive system <br>on the market</h2>
                </div>
            </div>

            <div class="reviews-container">
                <div class="reviews-item">
                    <div class="star">
                        <img loading="lazy" src="<?php echo e(asset('assets/img/star.svg')); ?>" alt="">
                    </div>
                    <div class="reviews-text">
                        “highly cost-effective and flexible<br> research analysis tool”
                    </div>
                </div>

                <div class="reviews-item">
                    <div class="star">
                        <img loading="lazy" src="<?php echo e(asset('assets/img/star.svg')); ?>" alt="">
                    </div>
                    <div class="reviews-text">
                        “extremely user-friendly yet<br> powerful reporting solution”
                    </div>
                </div>

                <div class="reviews-item">
                    <div class="star">
                        <img loading="lazy" src="<?php echo e(asset('assets/img/star.svg')); ?>" alt="">
                    </div>
                    <div class="reviews-text">
                        “great interactive presentation<br> portal”
                    </div>
                </div>

                <div class="reviews-item">
                    <div class="star">
                        <img loading="lazy" src="<?php echo e(asset('assets/img/star.svg')); ?>" alt="">
                    </div>
                    <div class="reviews-text">
                        “continuous professional support<br> by DataTile team”
                    </div>
                </div>
            </div>
        </div>
        <div class="d">
            <img loading="lazy" src="<?php echo e(asset('assets/img/d.svg')); ?>" alt="">
        </div>
    </div>

    <div class="schema-container">
        <div class="big-container order-1">
            <div class="schema-img">
                <img loading="lazy" class="d-xs-none" src="<?php echo e(asset('assets/img/schema1.png')); ?>" alt="">
                <img loading="lazy" class="d-xs-block" src="<?php echo e(asset('assets/img/schema-mob-1.png')); ?>" alt="">
            </div>
        </div>
        <div class="small-container order-2">
            <div class="schema-text">
                <h3>
                    <span class="red">Liberate</span> your business with lightning-fast intelligence
                </h3>

                <p>
                    Combining awesome analysis, interactivity and speed, DataTile empowers you to go from data to decisions in minutes. It's automated every step of the way – so goodbye tedious manual processing, hello huge time savings.
                </p>
            </div>
        </div>

        <div class="big-container big-container-1 order-4">
            <div class="schema-text">
                <h3>
                    <span class="blue">Collaborate</span> and harness <br>the power of many minds
                </h3>

                <p>
                    Creating synergy on a secure portal, DataTile unites<br>
                    all project stakeholders and areas of research<br>
                    expertise. Invite clients to collaborate, elevating you<br>
                    from a supplier to a partner!
                </p>
            </div>
        </div>
        <div class="small-container small-container-1 order-3">
            <div class="schema-img">
                <img loading="lazy" class="d-xs-none" src="<?php echo e(asset('assets/img/schema2.png')); ?>" alt="">
                <img loading="lazy" class="d-xs-block" src="<?php echo e(asset('assets/img/schema-mob-2.png')); ?>" alt="">
            </div>
        </div>

        <div class="big-container order-5">
            <div class="schema-img">
                <img loading="lazy" class="d-xs-none" src="<?php echo e(asset('assets/img/schema3.png')); ?>" alt="">
                <img loading="lazy" class="d-xs-block" src="<?php echo e(asset('assets/img/schema-mob-3.png')); ?>" alt="">
            </div>
        </div>

        <div class="small-container order-6">
            <div class="schema-text" style="padding-left: 3em;">
                <h3>
                    Create powerful <span class="fiolet">visual knowledge</span> instantly
                </h3>

                <p>
                    Interactive dashboards with beautiful visualizations bring clarity 
                    that delivers insights. DataTile provides the freedom to explore, 
                    experiment and discover the deeper picture. You can deliver 
                    results in every major format – charts, reports, dashboards, 
                    embedded, API…
                </p>
            </div>
        </div>


        <div class="big-container big-container-2 order-8">
            <div class="schema-text">
                <h3>
                    Unrivalled <span class="red">speed</span><br class="d-xs-block"> with <span class="red">data</span> integrity guaranteed
                </h3>

                <p>
                    DataTile can analyze hundreds of respondents or
                    millions in seconds, securely. End-to-end automation
                    means huge gains in time efficiency and profitability. 
                    Data integrity and security at every step enhances 
                    productivity and protects your reputation.
                </p>
            </div>
        </div>
        <div class="small-container small-container-2 order-7">
            <div class="schema-img">
                <img loading="lazy" class="d-xs-none" src="<?php echo e(asset('assets/img/schema4.png')); ?>" alt="">
                <img loading="lazy" class="d-xs-block" src="<?php echo e(asset('assets/img/schema-mob-4.png')); ?>" alt="">
            </div>
        </div>

        <div class="awards order-9">
            <div class="awards-item">
                <img loading="lazy" src="<?php echo e(asset('assets/img/award1.png')); ?>" alt="">
            </div>
            <div class="awards-item">
                <img loading="lazy" src="<?php echo e(asset('assets/img/award2.png')); ?>" alt="">
            </div>
        </div>
    </div>

    <?php echo $__env->make("includes.clients", ['bg'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make("includes.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    initialSlide: 2,
    direction: "vertical",
    slidesPerView: 5,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<script>
  var swiper = new Swiper(".mySwipermob", {
    initialSlide: 2,
    direction: "vertical",
    slidesPerView: 5,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next.mobs",
      prevEl: ".swiper-button-prev.mobs",
    },
  });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\datatile\resources\views/welcome.blade.php ENDPATH**/ ?>