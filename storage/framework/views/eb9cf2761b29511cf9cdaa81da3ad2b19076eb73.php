<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
<input type="hidden" id="page_url" value="<?php echo e(route('how_to_rent.index')); ?>">
<section class="content-header">
	<div class="content-header-left">
		<h1><?php echo e($page_title); ?></h1>
	</div>
	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('about-create')): ?>
	<div class="content-header-right">
		<a href="<?php echo e(route('how_to_rent.create')); ?>" class="btn btn-primary btn-sm">Add New How to rent</a>
	</div>
	<?php endif; ?>
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
                        <div class="d-flex col-sm-6">
                            <input type="text" id="search" class="form-control" placeholder="Search">
                        </div>
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
								<th>Image</th>
								<th>Heading</th>
								<th>Description</th>
								<th>Created by</th>
								<th>Status</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							<?php $__currentLoopData = $how_to_rents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$how_to_rent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr id="id-<?php echo e($how_to_rent->slug); ?>">
									<td><?php echo e($how_to_rents->firstItem()+$key); ?>.</td>
                                    <td>
										<?php if($how_to_rent->image): ?>
											<img src="<?php echo e(asset('public/admin/assets/images/how_to_rents/'.$how_to_rent->image)); ?>" alt="" style="width:60px;">
										<?php else: ?>
											<img src="<?php echo e(asset('public/admin/assets/images/default.jpg')); ?>" style="width:60px;">
										<?php endif; ?>
									</td>
									<td><?php echo e(($how_to_rent->heading)); ?></td>
									<td><?php echo \Illuminate\Support\Str::limit($how_to_rent->description , 60); ?></td>
									<td><?php echo e(isset($how_to_rent->hasCreatedBy)?$how_to_rent->hasCreatedBy->name:'N/A'); ?></td>
									<td>
										<?php if($how_to_rent->status): ?>
											<span class="badge badge-success">Active</span>
										<?php else: ?>
											<span class="badge badge-danger">In-Active</span>
										<?php endif; ?>
									</td>
									<td width="250px">
										<a href="<?php echo e(route('how_to_rent.edit', $how_to_rent->slug)); ?>" data-toggle="tooltip" data-placement="top" title="Edit Car Rent" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
										<button class="btn btn-danger btn-xs delete" data-slug="<?php echo e($how_to_rent->slug); ?>" data-del-url="<?php echo e(url('how_to_rent', $how_to_rent->slug)); ?>"><i class="fa fa-trash"></i> Delete</button>
									</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="6">
                                    <div class="d-flex justify-content-center">
                                        <?php echo $how_to_rents->links('pagination::bootstrap-4'); ?>

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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/admin/how_to_rent/index.blade.php ENDPATH**/ ?>