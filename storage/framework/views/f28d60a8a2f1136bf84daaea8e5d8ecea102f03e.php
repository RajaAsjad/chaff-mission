
<?php $__env->startSection('content'); ?>
<!-- BANNER SEC -->
    <section class="banner-imnner-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="iner-baner-head">
                        <h1><?php echo e($banner[12]->name); ?></h1>
                        <p class="extra-text"><?php echo e($banner[12]->short_description); ?></p>
                        <p><?php echo $banner[12]->description; ?></p>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SEC -->
        <section class="blogs-article">
            <div class="container">
                <div class="row">
                    <div class="blogs-article-first-row">
                        <h3>Lorem ipsum dolor</h3>
                        <h1>BLOGS & ARTICLE</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="blog-box">
                            <div class="blog-img-box">
                                <img src="<?php echo e(asset('public/admin/assets/posts')); ?>/<?php echo e($blog->post); ?>" alt="">
                            </div>
                            <div class="blog-content-box">
                                <h3><?php echo e($blog->title); ?></h3>
                                <p><?php echo $blog->description; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row justify-content-center row-load-more for-deal-margin mt-0">
                    <a href="" class="load-more">Load more</a>
                </div>
            </div>
        </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/website/blogs-&-articles.blade.php ENDPATH**/ ?>