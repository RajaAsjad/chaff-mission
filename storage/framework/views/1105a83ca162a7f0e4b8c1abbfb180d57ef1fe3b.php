<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
<input type="hidden" id="page_url" value="<?php echo e(route('banner.index')); ?>">
<section class="content-header">
	<div class="content-header-left">
		<h1><?php echo e($page_title); ?></h1>
	</div>
	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('banner-create')): ?>
	<div class="content-header-right">
		<a href="<?php echo e(route('banner.create')); ?>" class="btn btn-primary btn-sm">Add Banner</a>
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
                        <!-- <div class="col-sm-1">Search:</div>
                        <div class="d-flex col-sm-6">
                            <input type="text" id="search" class="form-control" placeholder="Search">
                        </div> -->
                        <div class="d-flex col-sm-6">
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
								<!-- <th>Image</th> -->
								<th>Name</th>
								<th>Description</th>
								<th>Status</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							<?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr id="id-<?php echo e($banner->slug); ?>">
									<td><?php echo e($banners->firstItem()+$key); ?>.</td>
									<td><?php echo e($banner->name); ?></td>
									<td><?php echo \Illuminate\Support\Str::limit( $banner->description , 20); ?></td>
									<td>
										<?php if($banner->status): ?>
											<span class="badge badge-success">Active</span>
										<?php else: ?>
											<span class="badge badge-danger">In-Active</span>
										<?php endif; ?>
									</td>
									<td width="250px">
										<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('banner-edit')): ?>
											<a href="<?php echo e(route('banner.edit', $banner->slug)); ?>" data-toggle="tooltip" data-placement="top" title="Edit Banner" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
										<?php endif; ?>
										<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('banner-delete')): ?>
											<button class="btn btn-danger btn-xs delete" data-slug="<?php echo e($banner->slug); ?>" data-del-url="<?php echo e(url('banner', $banner->slug)); ?>"><i class="fa fa-trash"></i> Delete</button>
										<?php endif; ?>
									</td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="6">
                                    <div class="d-flex justify-content-center">
                                        <?php echo $banners->links('pagination::bootstrap-4'); ?>

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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/admin/banner/index.blade.php ENDPATH**/ ?>