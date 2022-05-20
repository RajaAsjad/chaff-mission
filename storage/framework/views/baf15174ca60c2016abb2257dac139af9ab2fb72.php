<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
<input type="hidden" id="page_url" value="<?php echo e(route('contact.index')); ?>">
<section class="content-header">
	<div class="content-header-left">
		<h1><?php echo e($page_title); ?></h1>
	</div>

	<div class="content-header-right">
		<a href="<?php echo e(route('contact.create')); ?>" class="btn btn-primary btn-sm">Add Contact</a>
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
								<th>Name</th>
								<th>Description</th>
								<th>Address</th>
								<th>Status</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							<?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr id="id-<?php echo e($contact->id); ?>">
									<td><?php echo e($contacts->firstItem()+$key); ?>.</td>
									<td><?php echo e($contact->name); ?></td>
									<td><?php echo \Illuminate\Support\Str::limit($contact->description,30); ?></td>
									<td><?php echo e($contact->address); ?></td>
									<td>
										<?php if($contact->status): ?>
											<span class="badge badge-success">Active</span>
										<?php else: ?>
											<span class="badge badge-danger">In-Active</span>
										<?php endif; ?>
									</td>
									<td width="250px">
										<a href="<?php echo e(route('contact.edit', $contact->slug)); ?>" data-toggle="tooltip" data-placement="top" title="Edit contact" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
										<button class="btn btn-danger btn-xs delete" data-slug="<?php echo e($contact->slug); ?>" data-del-url="<?php echo e(url('contact', $contact->slug)); ?>"><i class="fa fa-trash"></i> Delete</button>
									</td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="6">
									Displying <?php echo e($contacts->firstItem()); ?> to <?php echo e($contacts->lastItem()); ?> of <?php echo e($contacts->total()); ?> records
                                    <div class="d-flex justify-content-center">
                                        <?php echo $contacts->links('pagination::bootstrap-4'); ?>

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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/admin/contact/index.blade.php ENDPATH**/ ?>