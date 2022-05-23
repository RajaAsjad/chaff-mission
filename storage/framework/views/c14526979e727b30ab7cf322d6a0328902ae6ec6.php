

<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startPush('css'); ?>
  <style>
    .info-box-text{
      color: #4172a5 !important
    }
  </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
  <section class="content-header">
    <h1 style="color:#000 !important;">Dashboard</h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content" style="background: #ddd1d142 !important;">
            <span class="info-box-text" style="color: #000 !important;">Total Team Members</span>
            <span class="info-box-number" style="color: #000 !important;font-weight: 600;">0</span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content" style="background: #ddd1d142 !important;">
            <span class="info-box-text" style="color: #000 !important;">Total Categories</span>
            <span class="info-box-number" style="color: #000 !important;font-weight: 600;">0</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content" style="background: #ddd1d142 !important;">
            <span class="info-box-text" style="color: #000 !important;">Total Blogs</span>
            <span class="info-box-number" style="color: #000 !important;font-weight: 600;">0</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content" style="background: #ddd1d142 !important;">
            <span class="info-box-text" style="color: #000 !important;">Total Services</span>
            <span class="info-box-number" style="color: #000 !important;font-weight: 600;">0</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content" style="background: #ddd1d142 !important;">
            <span class="info-box-text" style="color: #000 !important;">Total Testimonials</span>
            <span class="info-box-number" style="color: #000 !important;font-weight: 600;">0</span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content" style="background: #ddd1d142 !important;">
            <span class="info-box-text" style="color: #000 !important;">Total Packages</span>
            <span class="info-box-number" style="color: #000 !important;font-weight: 600;">0</span>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/website/user-dashboard/dashboard.blade.php ENDPATH**/ ?>