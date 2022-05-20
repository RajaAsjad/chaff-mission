
<?php $__env->startSection('content'); ?>
    <!-- BANNER SEC -->
    <section class="New_gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="iner-baner-head">
                            <h1><?php echo e($banner[10]->name); ?></h1>
                            <p class="extra-text"><?php echo e($banner[10]->short_description); ?></p>
                        </div>    
                    </div>
                </div>
            </div>
        </section>
    <!-- BANNER SEC -->
    <!-- FQA's HTML  -->
        <section class="FQAs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fqa-inner">
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <h1>FREQUENTLY ASKED QUESTIONS</h1>
                            <div id="accordion" class="accordion">
                                <div class="card mb-0">
                                    <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $count=1 ?>
                                            <div class="card-header" data-toggle="collapse" href="#<?php echo e($faq->id); ?>" aria-expanded="<?php if($count ==1): ?><?php echo e('true'); ?> <?php else: ?><?php echo e('false'); ?>  <?php endif; ?>">
                                                <a class="card-title">
                                                    <?php echo e($faq->question); ?>

                                                </a>
                                            </div>
                                            <div id="<?php echo e($faq->id); ?>" class="card-body collapse <?php if($count ==1): ?><?php echo e('show'); ?>  <?php endif; ?>" data-parent="#accordion" >
                                                <p><?php echo e($faq->answer); ?></p>
                                            </div>
                                            <br>
                                        <?php $count++ ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </section>
     <!-- FQA's HTML  -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/website/faqs.blade.php ENDPATH**/ ?>