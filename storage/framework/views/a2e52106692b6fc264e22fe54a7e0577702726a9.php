
<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
<section class="content-header">
	<div class="content-header-left">
		<h1><?php echo e($page_title); ?></h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo e(route('product.index')); ?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="<?php echo e(route('product.update', $details->slug)); ?>" id="regform" class="form-horizontal" enctype="multipart/form-data" accept-charset="utf-8">
				<?php echo csrf_field(); ?>
				<?php echo e(method_field('PATCH')); ?>

				<div class="box box-info">
					<div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Category<span style="color: red">*</span></label>
                            <div class="col-md-9">
                                <select name="category_slug" id="category_slug" class="form-control">
                                    <option value="" selected>Select category</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->slug); ?>" <?php echo e($details->category_slug == $category->slug ? 'selected':''); ?>><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <span style="color: red"><?php echo e($errors->first('category_slug')); ?></span>
                            </div>
						</div>
						<div class="form-group">
                            <label for="" class="col-sm-2 control-label">Car Type<span style="color: red">*</span></label>
                            <div class="col-md-9">
                                <select name="car_type_slug" id="car_type" class="form-control">
                                    <option value="" selected>Select Car Type</option>
                                    <?php $__currentLoopData = $car_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($car_type->slug); ?>" <?php echo e($details->hasProductDetails->car_type_slug == $car_type->slug ? 'selected':''); ?>><?php echo e($car_type->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <span style="color: red"><?php echo e($errors->first('car_type_slug')); ?></span>
                            </div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="name" value="<?php echo e($details->name); ?>">
								<span style="color: red"><?php echo e($errors->first('name')); ?></span>
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Seat<span style="color: red">*</span></label>
							<div class="col-sm-9">
                                <input type="number" name="seats" id="" value="<?php echo e($details->hasProductDetails->seats); ?>"  class="form-control" placeholder="Enter Seat">
								<span style="color: red"><?php echo e($errors->first('seats')); ?></span>
							</div>
                        </div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Doors<span style="color: red">*</span></label>
							<div class="col-sm-9">
                                <input type="number" name="doors" id="" value="<?php echo e($details->hasProductDetails->doors); ?>" class="form-control" placeholder="Enter Doors">
								<span style="color: red"><?php echo e($errors->first('doors')); ?></span>
							</div>
                        </div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">MPG<span style="color: red">*</span></label>
							<div class="col-sm-9">
                                <input type="number" name="mpg" id="" value="<?php echo e($details->hasProductDetails->mpg); ?>" min="1" max="40" class="form-control" placeholder="Enter MPG">
								<span style="color: red"><?php echo e($errors->first('mpg')); ?></span>
							</div>
                        </div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Fuel<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="fuel" value="<?php echo e($details->hasProductDetails->fuel); ?>" id="fuel" class="form-control" placeholder="Enter Fuel">
								<span style="color: red"><?php echo e($errors->first('fuel')); ?></span>
							</div>
						</div>
						
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Color <span style="color: red">*</span></label>
                            <div class="col-sm-1">
                                <input type="color" name="color" value="<?php echo e($details->hasProductDetails->color); ?>" id="color" class="form-control">
                                <span style="color: red"><?php echo e($errors->first('color')); ?></span>
                            </div>
                        </div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Rent Per Day<span style="color: red">*</span></label>
							<div class="col-sm-9">
                                <input type="number" name="rent_per_day" id="" value="<?php echo e($details->rent_per_day); ?>" class="form-control" placeholder="Enter Rent Per Day">
								<span style="color: red"><?php echo e($errors->first('rent_per_day')); ?></span>
							</div>
                        </div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Description <span style="color: red">*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control texteditor" name="description" style="height:200px;" placeholder="Enter Description"><?php echo $details->description; ?></textarea>
								<span style="color: red"><?php echo e($errors->first('description')); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Thumbnail </label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" class="form-control" accept="image*" name="thumbnail">
							</div>
							<div class="col-sm-4" >
								<img style="width: 80px " src="<?php echo e(asset('public/admin/assets/products/thumbnails')); ?>/<?php echo e($details->thumbnail); ?>" alt="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Image </label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" class="form-control" accept="image*" name="image[]">
							</div>
							<div class="col-sm-4" >
								<img style="width: 80px " src="<?php echo e(asset('public/admin/assets/products/images')); ?>/<?php echo e($details->image); ?>" alt="">
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Status</label>
							<div class="col-sm-9">
								<select name="status" class="form-control" id="">
									<option value="1" <?php echo e($details->status==1?'selected':''); ?>>Active</option>
									<option value="0" <?php echo e($details->status==0?'selected':''); ?>>In-Active</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left">Submit</button>
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
<script>
	$(document).ready(function() {
		if ($(".texteditor").length > 0) {
			tinymce.init({
				selector: "textarea.texteditor",
				theme: "modern",
				height: 150,
				plugins: [
					"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
					"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
					"save table contextmenu directionality emoticons template paste textcolor"
				],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

			});
		}

		$("#regform").validate({
			rules: {
				name: "required",
				description: "required",
			}
		});
	});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>