<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
<style>
	button.btn-for {
    background: #fccc24;
    border: 1px solid #fccc24;
    width: 100%;
    border-radius: 5px;
    font-weight: 600;
	}
</style>
<section class="content-header">
	<div class="content-header-left">
		<h1><?php echo e($page_title); ?></h1>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<table class="table my-tables  table-bordered  table-responsive text-nowrap">
				<thead>
					<tr>
						<th scope="col">Customer Id</th>
						<th scope="col">Address</th>
						<th scope="col">City</th>
						<th scope="col">State</th>
						<th scope="col">Pickup Date</th>
						<th scope="col">Return Time</th>
						<th scope="col">status</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<th scope="row"><?php echo e($appointment->customer_id); ?></th>
						<td><?php echo e($appointment->address); ?></td>
						<td><?php echo e($appointment->city); ?></td>
						<td><?php echo e($appointment->state); ?></td>
						<td><?php echo e($appointment->pickup_date); ?></td>
						<td><?php echo e($appointment->return_time); ?></td>
						<td>
							<?php if($appointment->status): ?>
								<span class="badge badge-success">Active</span>
							<?php else: ?>
								<span class="badge badge-danger">In-Active</span>
							<?php endif; ?>
						</td>
						<td><button class="btn-for">VIEW</button></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/website/user-dashboard/appointment-detail.blade.php ENDPATH**/ ?>