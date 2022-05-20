<?php $__env->startSection('content'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Show Career Details</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo e(route('career.index')); ?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table bordered">
					<tr>
						<th>First Name</th>
						<td><?php echo e($models->first_name); ?></td>
					</tr>
					<tr>
						<th>Last Name</th>
						<td><?php echo e($models->last_name); ?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><?php echo e($models->email); ?></td>
					</tr>
					<tr>
						<th>Phone</th>
						<td><?php echo e($models->phone); ?></td>
					</tr>
					<tr>
						<th>Address</th>
						<td><?php echo e($models->address); ?></td>
					</tr>
					<tr>
						<th>City</th>
						<td><?php echo e($models->city); ?></td>
					</tr>
					<tr>
						<th>State</th>
						<td><?php echo e($models->state); ?></td>
					</tr>
					<tr>
						<th>Postal</th>
						<td><?php echo e($models->postal); ?></td>
					</tr>
					<tr>
						<th>Status</th>
						<td>
							<?php if($models->status): ?>
								<span class="badge badge-success">Active</span>
							<?php else: ?> 
								<span class="badge badge-danger">In-Active</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<th>CV</th>
						<td><iframe src="<?php echo e(asset('public/admin/assets/images/file')); ?>/<?php echo e($models->CV_file); ?>" title="testPdf" height="500px" width="500"></iframe></td>
					</tr>
					
				</table>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$('.editor_short').summernote({
			height: 150
		});
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/admin/career/show.blade.php ENDPATH**/ ?>