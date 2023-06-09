<?php $__env->startSection('content'); ?>
<section class="content-header">
	<div class="content-header-left">
		<h1><strong><?php echo e($model->title); ?></strong></h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo e(route('page.index')); ?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="<?php echo e(route('page_setting.store')); ?>" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				<?php echo csrf_field(); ?>

				<input type="hidden" name="parent_slug" id="" value="<?php echo e($model->slug); ?>">
				<div class="box box-info">
					<div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Favicon </label>
                            <div class="col-sm-6">
                                <input type="file" name="header_favicon" class="form-control">
                            </div>
                            <?php if(isset($page_data['header_favicon'])): ?>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <img src="<?php echo e(asset('/public/admin/assets/images/page/'.$page_data['header_favicon'])); ?>" class="existing-photo" style="height:50px;">
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Logo </label>
                            <div class="col-sm-6">
                                <input type="file" name="header_logo" class="form-control">
                            </div>
                            <?php if(isset($page_data['header_logo'])): ?>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <img src="<?php echo e(asset('/public/admin/assets/images/page/'.$page_data['header_logo'])); ?>" class="existing-photo" style="height:100px;">
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Call Us Now:</label>
							<div class="col-sm-9">
								<input type="text" name="header_call_us_now" class="form-control" value="<?php echo e(isset($page_data['header_call_us_now'])?$page_data['header_call_us_now']:''); ?>" placeholder="Enter Call Us Now">
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Email:</label>
							<div class="col-sm-9">
								<input type="text" name="header_email" class="form-control" value="<?php echo e(isset($page_data['header_email'])?$page_data['header_email']:''); ?>" placeholder="Enter Email">
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Facebook Link </label>
							<div class="col-sm-9">
								<input type="text" name="footer_facebook" class="form-control" value="<?php echo e(isset($page_data['footer_facebook'])?$page_data['footer_facebook']:''); ?>" placeholder="Enter social link">
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Twitter Link </label>
							<div class="col-sm-9">
								<input type="text" name="footer_twitter" class="form-control" value="<?php echo e(isset($page_data['footer_twitter'])?$page_data['footer_twitter']:''); ?>" placeholder="Enter social link">
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Instagram Link </label>
							<div class="col-sm-9">
								<input type="text" name="footer_instagram" class="form-control" value="<?php echo e(isset($page_data['footer_instagram'])?$page_data['footer_instagram']:''); ?>" placeholder="Enter social link">
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">LinkedIn Link </label>
							<div class="col-sm-9">
								<input type="text" name="footer_linkedin" class="form-control" value="<?php echo e(isset($page_data['footer_linkedin'])?$page_data['footer_linkedin']:''); ?>" placeholder="Enter social link">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form_blog">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Asjad\resources\views/admin/page_setting/header.blade.php ENDPATH**/ ?>