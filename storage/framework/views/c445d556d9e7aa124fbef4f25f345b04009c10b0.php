
<?php $__env->startSection('content'); ?>
  <!-- BANNER SEC -->
    <section class="Deals">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="iner-baner-head">
                        <h1>Deals</h1>
                        <p class="extra-text">Home > Deals</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alion.</p>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SEC -->
    <!-- DEALS SECTION -->
    <section class="all-deals">
        <div class="container">
            <div class="row">
                <div class="deals-main-des">
                    <h3>CHAFF MISSIONS</h3>
                    <h1>BEST DEALS FOR RENTALS</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="row properties-deals">
                <?php $__currentLoopData = $rental_best_deals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_best_deal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="dealz-box">
                            <div class="dealz-box-img">
                                <img src="<?php echo e(asset('public/admin/assets/images/rental')); ?>/<?php echo e($rental_best_deal->hasRental->image); ?>" alt="">
                            </div>
                            <div class="dealz-box-content">
                                <div class="dealz-box-heading">
                                    <h3><?php echo e($rental_best_deal->hasRental->name); ?></h3>
                                    <img src="<?php echo e(asset('public/assets/website')); ?>/images/new-starz.png" alt="">
                                </div>
                                <div class="dealz-box-description">
                                    <p><?php echo e($rental_best_deal->hasRental->short_description); ?></p>
                                </div>
                                <div class="dealz-box-price">
                                    <div class="pricess">
                                        <span>$<?php echo e($rental_best_deal->price); ?></span>
                                    </div>
                                    <div class="other-info-deals">
                                        <div class="pro-detailz">
                                            <img src="<?php echo e(asset('public/assets/website')); ?>/images/car-seats.png" alt="">
                                            <span><?php echo e($rental_best_deal->hasRental->seat); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dealz-box-button">
                                <a href="" class="dealz-box-a">read more</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row justify-content-center row-load-more for-deal-margin">
                <a href="" class="load-more">Load more</a>
            </div>
            <div class="row">
                <div class="deals-main-des">
                    <h3>CHAFF MISSIONS</h3>
                    <h1>BEST DEALS FOR RVS</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="row properties-deals">
                <?php $__currentLoopData = $rv_best_deals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rv_best_deal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="dealz-box">
                            <div class="dealz-box-img">
                                <img src="<?php echo e(asset('public/admin/assets/images/RV')); ?>/<?php echo e($rv_best_deal->hasRV->image); ?>" alt="">
                            </div>
                            <div class="dealz-box-content">
                                <div class="dealz-box-heading">
                                    <h3><?php echo e($rv_best_deal->hasRV->name); ?></h3>
                                    <img src="<?php echo e(asset('public/assets/website')); ?>/images/new-starz.png" alt="">
                                </div>
                                <div class="dealz-box-description">
                                    <p><?php echo e($rv_best_deal->hasRV->short_description); ?></p>
                                </div>
                                <div class="dealz-box-price">
                                    <div class="pricess">
                                        <span>$<?php echo e($rv_best_deal->price); ?></span>
                                    </div>
                                    <div class="other-info-deals">
                                        <div class="pro-detailz">
                                            <img src="<?php echo e(asset('public/assets/website')); ?>/images/car-seats.png" alt="">
                                            <span><?php echo e($rv_best_deal->hasRV->seat); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dealz-box-button">
                                <a href="" class="dealz-box-a">read more</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row justify-content-center row-load-more for-deal-margin">
                <a href="" class="load-more">Load more</a>
            </div>
        </div>
    </section>
    <!-- DEALS SECTION -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/website/deals.blade.php ENDPATH**/ ?>