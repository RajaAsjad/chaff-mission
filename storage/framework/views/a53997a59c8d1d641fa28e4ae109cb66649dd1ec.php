<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
<input type="hidden" id="page_url" value="<?php echo e(route('career.index')); ?>">
<section class="content-header">
	<div class="content-header-left">
		<h1>All Career</h1>
	</div>

</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<?php if(session('status')): ?>
				<div class="callout callout-success">
					<?php echo e(session('status')); ?>

				</div>
			<?php endif; ?>

			<div class="box box-info">
				<div class="box-body">
                    <div class="row">
                        <div class="col-sm-1">Search:</div>
                        <!-- <div class="d-flex col-sm-6">
                            <input type="text" id="search" class="form-control" placeholder="Search">
                        </div> -->
                        <div class="d-flex col-sm-5">
                            <select name="" id="status" class="form-control status" style="margin-bottom:5px">
                                <option value="All" selected>Search by status</option>
                                <option value="1">Active</option>
                                <option value="2">In-Active</option>
                            </select>
                        </div>
                    </div>
					<table id="" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Phone</th>
								<!-- <th>Address</th> -->
								<th>City</th>
								<!-- <th>State</th>
								<th>Postal</th>
								<th>CV_file</th> -->
								<th>Status</th>
								<!-- <th>Created by</th> -->
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							<?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr id="id-<?php echo e($model->id); ?>">
									<td><?php echo e($models->firstItem()+$key); ?>.</td>
									<td><?php echo e($model->first_name); ?></td>
									<td><?php echo e($model->last_name); ?></td>
									<td><?php echo e($model->email); ?></td>
									<td><?php echo e($model->phone); ?></td>
									<!-- <td><?php echo e($model->address); ?></td> -->
									<!-- <td><?php echo e($model->city); ?></td>
									<td><?php echo e($model->state); ?></td>
									<td><?php echo e($model->postal); ?></td> -->
									<td><?php echo e($model->CV_file); ?></td>
									<td>
										<?php if($model->status): ?>
											<span class="badge badge-success">Active</span>
										<?php else: ?>
											<span class="badge badge-danger">In-Active</span>
										<?php endif; ?>
									</td>
									<!-- <td><?php echo e(isset($model->hasCreatedBy)?$model->hasCreatedBy->name:'N/A'); ?></td> -->
									<td width="250px">
											<a href="<?php echo e(route('career.show', $model->id)); ?>" data-toggle="tooltip" data-placement="top" title="View Career" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> View</a>
										
                                            <button class="btn btn-danger btn-xs delete" data-slug="<?php echo e($model->id); ?>" data-del-url="<?php echo e(url('career', $model->id)); ?>"><i class="fa fa-trash"></i> Delete</button>
										
									</td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="6">
									Displying <?php echo e($models->firstItem()); ?> to <?php echo e($models->lastItem()); ?> of <?php echo e($models->total()); ?> records
                                    <div class="d-flex justify-content-center">
                                        <?php echo $models->links('pagination::bootstrap-4'); ?>

                                    </div>
                                </td>
                            </tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/admin/career/index.blade.php ENDPATH**/ ?>