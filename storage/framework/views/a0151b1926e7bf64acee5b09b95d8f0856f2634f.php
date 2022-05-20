<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1><?php echo e($page_title); ?></h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo e(route('booking.index')); ?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-body">
					<table id="" class="table table-bordered table-striped">
						<tbody id="body">
							<tr>
								<th colspan="2"><u><i class="fa fa-arrow-right"></i>Booking Details</u></th>
							</tr>
							<tr>
								<th>Booking No#</th>
								<td><?php echo e($bookings->booking_number); ?></td>
							</tr>
							<tr>
								<th>Category</th>
								<td><?php echo e($bookings->hasProduct->hasCategory->name); ?></td>
							</tr>
							<tr>
								<th>Product</th>
								<td><?php echo e($bookings->hasProduct->name); ?></td>
							</tr>
							<tr>
								<th>Product Type</th>
								<td><?php echo e($bookings->hasProduct->hasProductDetails->hasCarType->name); ?></td>
							</tr>
							<tr>
								<th>Trip Start</th>
								<td><?php echo e(date('d, F-Y', strtotime($bookings->trip_start_date))); ?></td>
							</tr>
							<tr>
								<th>Trip End</th>
								<td><?php echo e(date('d, F-Y', strtotime($bookings->trip_end_date))); ?></td>
							</tr>
							<tr>
								<th>Trip Duration</th>
								<td><?php echo e($bookings->total_days); ?>-Days</td>
							</tr>
							<tr>
								<th>Per Day Price</th>
								<td>$<?php echo e(number_format($bookings->per_day_price, 1)); ?></td>
							</tr>
							<tr>
								<th>Total Payment</th>
								<td>$<?php echo e(number_format($bookings->per_day_price*$bookings->total_days, 1)); ?></td>
							</tr>
							<tr>
								<th colspan="2"><u><i class="fa fa-arrow-right"></i> Customer Details</u></th>
							</tr>
							<tr>
								<th>First Name</th>
								<td><?php echo e($bookings->hasCustomer->name); ?></td>
							</tr>
							<tr>
								<th>Last Name</th>
								<td><?php echo e($bookings->hasCustomer->last_name??'--'); ?></td>
							</tr>
							<tr>
								<th>Phone No#</th>
								<td><?php echo e($bookings->hasCustomer->phone??'--'); ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><?php echo e($bookings->hasCustomer->email); ?></td>
							</tr>
							<tr>
								<th>Customer From </th>
								<td><?php echo e(date('d, F-Y', strtotime($bookings->hasCustomer->created_at))); ?></td>
							</tr>
							
							<tr>
								<th colspan="2"><u><i class="fa fa-arrow-right"></i> Payment Details</u></th>
							</tr>
							<tr>
								<th>Payment By</th>
								<td>Stripe</td>
							</tr>
							<tr>
								<th>Payable Payment</th>
								<td>$<?php echo e(number_format($bookings->per_day_price*$bookings->total_days, 1)); ?></td>
							</tr>
							<tr>
								<th>Paid</th>
								<td>$<?php echo e(number_format($bookings->per_day_price*$bookings->total_days, 1)); ?></td>
							</tr>
							<tr>
								<th>Dues</th>
								<?php $payment = $bookings->per_day_price*$bookings->total_days; ?>
								<td>$<?php echo e(number_format($payment-$bookings->hasPayment->paid, 1)); ?></td>
							</tr>
							<tr>
								<th>Payment Status</th>
								<td>
									<?php if($bookings->hasPayment->payment_status=='succeeded'): ?>
										<span class="badge badge-success">Succeeded</span>
									<?php else: ?> 
										<span class="badge badge-danger">Failed</span>
									<?php endif; ?>
								</td>
							</tr>
							<tr>
								<th>Payment Date</th>
								<td><?php echo e(date('d, F-Y', strtotime($bookings->hasPayment->created_at))); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/admin/bookings/show.blade.php ENDPATH**/ ?>