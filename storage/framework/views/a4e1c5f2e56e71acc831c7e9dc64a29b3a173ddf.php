<?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr id="id-<?php echo e($model->slug); ?>">
        <td><?php echo e($models->firstItem()+$key); ?>.</td>
        <td><?php echo e($model->booking_number); ?></td>
        <td><?php echo e(isset($model->hasProduct->hasCategory)?$model->hasProduct->hasCategory->name:'--'); ?></td>
        <td><?php echo e(isset($model->hasProduct)?$model->hasProduct->name:'--'); ?></td>
        <td><?php echo e(isset($model->hasCustomer)?$model->hasCustomer->name:'--'); ?></td>
        <td><?php echo e($model->hasCustomer->phone??'--'); ?></td>
        <td><span class="badge badge-info"><?php echo e(date('d, F-y', strtotime($model->trip_start_date))); ?></span> - <span class="badge badge-info"><?php echo e(date('d, F-y', strtotime($model->trip_end_date))); ?></span></td>
        <td><span class="badge badge-info"><?php echo e($model->total_days); ?> - Days</span></td>
        <td>
            <?php if($model->status==0): ?>
                <span class="badge badge-info">Pending</span>
            <?php elseif($model->status==1): ?>
                <span class="badge badge-primary">Confirmed</span>
            <?php elseif($model->status==3): ?>
                <span class="badge badge-primary">Cancelled</span>
            <?php endif; ?>
        </td>
        <td><span class="badge badge-info"><?php echo e(date('d, F-y H:i A', strtotime($model->created_at))); ?></span></td>
        <td>
            <button class="btn btn-warning btn-xs booking-status-btn" data-booking-status="<?php echo e($model->status); ?>"><i class="fa fa-tasks"></i> Status</button>
            <a href="<?php echo e(route('booking.show', $model->booking_number)); ?>" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</a>
            <a href="<?php echo e(route('booking.invoice', $model->booking_number)); ?>" class="btn btn-primary btn-xs"><i class="fa fa-file"></i> Invoice</a>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td colspan="11">
        Displying <?php echo e($models->firstItem()); ?> to <?php echo e($models->lastItem()); ?> of <?php echo e($models->total()); ?> records
        <div class="d-flex justify-content-center">
            <?php echo $models->links('pagination::bootstrap-4'); ?>

        </div>
    </td>
</tr><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/admin/bookings/search.blade.php ENDPATH**/ ?>