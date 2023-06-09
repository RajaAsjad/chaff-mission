<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startPush('css'); ?>
  <style>
    .info-box-text{
      color: #e22727 !important;
    }
    span.info-box-icon i {
        color: #960000 !important;
    }
    span.info-box-icon i:hover {
        color: #e22727 !important;
    }
  </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
  <section class="content-header">
    <h1>Dashboard</h1>
  </section>

  <section class="content">
    <div class="row">
		<a href="<?php echo e(route('paragon.index')); ?>" style="pointer:cursor;">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="info-box">
				  <span class="info-box-icon" style="background-color: #080808 !important"><i class="fa fa-address-book"></i></span>
				  <div class="info-box-content">
					<span class="info-box-text">Total Paragon Logistics Data</span>
					<span class="info-box-number" style="color: #d1ad3f !important"><?php echo e($total_paragon); ?></span>
				  </div>
				</div>
			</div>
		</a>
		<a href="<?php echo e(route('express.index')); ?>" style="pointer:cursor;">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="info-box">
				  <span class="info-box-icon" style="background-color: #080808 !important"><i class="fa fa-address-book"></i></span>
				  <div class="info-box-content">
					<span class="info-box-text">Total Express Shipping Data</span>
					<span class="info-box-number" style="color: #d1ad3f !important"><?php echo e($total_express); ?></span>
				  </div>
				</div>
			</div>
		</a>
		<a href="<?php echo e(route('skyway.index')); ?>" style="pointer:cursor;">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="info-box">
				  <span class="info-box-icon" style="background-color: #080808 !important"><i class="fa fa-address-book"></i></span>
				  <div class="info-box-content">
					<span class="info-box-text">Total Skyway Shipping Data</span>
					<span class="info-box-number" style="color: #d1ad3f !important"><?php echo e($total_skyway); ?></span>
				  </div>
				</div>
			</div>
		</a>
		<a href="<?php echo e(route('mass.index')); ?>" style="pointer:cursor;">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="info-box">
				  <span class="info-box-icon" style="background-color: #080808 !important"><i class="fa fa-address-book"></i></span>
				  <div class="info-box-content">
					<span class="info-box-text">Total Mass Shipping Data</span>
					<span class="info-box-number" style="color: #d1ad3f !important"><?php echo e($total_mass); ?></span>
				  </div>
				</div>
			</div>
		</a>
		<a href="<?php echo e(route('six_star.index')); ?>" style="pointer:cursor;">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="info-box">
				  <span class="info-box-icon" style="background-color: #080808 !important"><i class="fa fa-address-book"></i></span>
				  <div class="info-box-content">
					<span class="info-box-text">Total Six Star Logistics Data</span>
					<span class="info-box-number" style="color: #d1ad3f !important"><?php echo e($total_sixStar); ?></span>
				  </div>
				</div>
			</div>
		</a>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Asjad\resources\views/admin/dashboard/dashboard.blade.php ENDPATH**/ ?>