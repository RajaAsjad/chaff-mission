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
</tr><?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/admin/banner/search.blade.php ENDPATH**/ ?>