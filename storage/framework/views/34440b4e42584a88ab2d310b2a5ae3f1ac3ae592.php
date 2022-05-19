
<?php $__env->startSection('content'); ?>
    <!-- BANNER SEC -->
    <section class="rentals-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="iner-baner-head">
                        <h1>Rentals / Recreational vehicle (RV)</h1>
                        <p class="extra-text">Home > Rentals / Recreational vehicle(RV)</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alion.</p>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SEC -->
    <!-- RENTAL TYPE SEC -->
    <section class="rental-types">
        <div class="container">
            <div class="row gallery-expand-buttons">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#rental" role="tab">RENTALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#property" role="tab">PROPERTIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#r-v" role="tab">Recreational vehicle (RV)</a>
                    </li>
                </ul>
            </div>
            <div class="row gallery-expands">
                <div class="col-md-12">
                    <div class="tab-content for-new-gallery">
                        <div class="tab-pane active row" id="rental" role="tabpanel">
                            <div class="row rental-deals">
                                <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4">
                                        <div class="dealz-box">
                                            <div class="dealz-box-img">
                                                <img src="<?php echo e(asset('public/admin/assets/products/thumbnails')); ?>/<?php echo e($rental->thumbnail); ?>" alt="">
                                            </div>
                                            <div class="dealz-box-content">
                                                <div class="dealz-box-heading">
                                                    <h3><?php echo e($rental->name); ?></h3>
                                                    <img src="<?php echo e(asset('public/assets/website/images/new-starz.png')); ?>" alt="">
                                                </div>
                                                <div class="dealz-box-description">
                                                    <p><?php echo $rental->description; ?></p>
                                                </div>
                                                <div class="dealz-box-price">
                                                    <div class="pricess">
                                                        <span>$<?php echo e(number_format($rental->rent_per_day, 1)); ?></span>
                                                    </div>
                                                    <div class="other-info-deals">
                                                        <div class="pro-detailz">
                                                            <img src="<?php echo e(asset('public/assets/website/images/car-seats.png')); ?>" alt="">
                                                            <span><?php echo e($rental->hasProductDetails->seats); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dealz-box-button">
                                                <a href="<?php echo e(route('rentals.single', $rental->slug)); ?>" class="dealz-box-a">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tab-pane  row" id="property" role="tabpanel">
                            <div class="row property-deal">
                                <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4">
                                        <div class="dealz-box">
                                            <div class="dealz-box-img">
                                                <img src="<?php echo e(asset('public/admin/assets/products/thumbnails')); ?>/<?php echo e($model->thumbnail); ?>" alt="">
                                            </div>
                                            <div class="dealz-box-content">
                                                <div class="dealz-box-heading">
                                                    <h3><?php echo e($model->name); ?></h3>
                                                    <img src="<?php echo e(asset('public/assets/website/images/new-starz.png')); ?>" alt="">
                                                </div>
                                                <div class="dealz-box-description">
                                                    <p><?php echo $model->description; ?></p>
                                                </div>
                                                <div class="dealz-box-price">
                                                    <div class="pricess">
                                                        <span>$<?php echo e(number_format($model->rent_per_day, 1)); ?></span>
                                                    </div>
                                                    <div class="other-info-deals">
                                                        <div class="pro-detailz">
                                                            <img src="<?php echo e(asset('public/assets/website/images/washrooms-img.png')); ?>" title="Bathroom" alt="">
                                                            <span><?php echo e($model->hasProductDetails->bathrooms); ?></span>
                                                        </div>
                                                        <div class="pro-detailz">
                                                            <img src="<?php echo e(asset('public/assets/website/images/beds.png')); ?>" title="Bed" alt="">
                                                            <span><?php echo e($model->hasProductDetails->beds); ?></span>
                                                        </div>
                                                        <div class="pro-detailz">
                                                            <img src="<?php echo e(asset('public/assets/website/images/beds.png')); ?>" title="Room" alt="">
                                                            <span><?php echo e($model->hasProductDetails->rooms); ?></span>
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
                        </div>
                        <div class="tab-pane row" id="r-v" role="tabpanel">
                            <div class="row rental-deals">
                                <?php $__currentLoopData = $rvs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4">
                                        <div class="dealz-box">
                                            <div class="dealz-box-img">
                                                <img src="<?php echo e(asset('public/admin/assets/products/thumbnails')); ?>/<?php echo e($rv->thumbnail); ?>" alt="">
                                            </div>
                                            <div class="dealz-box-content">
                                                <div class="dealz-box-heading">
                                                    <h3><?php echo e($rv->name); ?></h3>
                                                    <img src="<?php echo e(asset('public/assets/website/images/new-starz.png')); ?>" alt="">
                                                </div>
                                                <div class="dealz-box-description">
                                                    <p><?php echo $rv->description; ?></p>
                                                </div>
                                                <div class="dealz-box-price">
                                                    <div class="pricess">
                                                        <span>$<?php echo e(number_format($rv->rent_per_day)); ?></span>
                                                    </div>
                                                    <div class="other-info-deals">
                                                        <div class="pro-detailz">
                                                            <img src="<?php echo e(asset('public/assets/website/images/car-seats.png')); ?>" alt="">
                                                            <span><?php echo e($rv->hasProductDetails->seats); ?></span>
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
                        </div>
                        <div class="row justify-content-center row-load-more for-deal-margin">
                            <a href="" class="load-more">Load more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RENTAL TYPE SEC -->
    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('js'); ?>
     <script>
        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var pageurl = $('#page_url_rental').val();
            var page = $(this).attr('href').split('page=')[1];
            fetchAll(pageurl, page);
        });
        function fetchAll(pageurl, page){
            $.ajax({
                url:pageurl+'?page='+page,
                type: 'get',
                success: function(response){
                    $('#body').html(response);
                }
            });
        }
    </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/website/product/index.blade.php ENDPATH**/ ?>