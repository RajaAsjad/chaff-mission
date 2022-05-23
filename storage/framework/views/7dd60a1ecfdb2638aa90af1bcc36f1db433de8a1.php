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
						<th scope="col">Booking Number</th>
						<th scope="col">Trip Start Date</th>
						<th scope="col">Trip End Date</th>
						<th scope="col">Per Day Price</th>
						<th scope="col">Total Payment</th>
						<th scope="col">Payment Status</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $bookings_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookings_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<th scope="row"><?php echo e($bookings_detail->booking_number); ?></th>
						<td><?php echo e($bookings_detail->trip_start_date); ?> </td>
						<td><?php echo e($bookings_detail->trip_end_date); ?> </td>
						<td><?php echo e($bookings_detail->per_day_price); ?> </td>
						<td><?php echo e($bookings_detail->total_payment); ?></td>
						<td><?php echo e($bookings_detail->payment_status); ?></td>
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

<?php echo $__env->make('layouts.user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/website/user-dashboard/booking-detail.blade.php ENDPATH**/ ?>