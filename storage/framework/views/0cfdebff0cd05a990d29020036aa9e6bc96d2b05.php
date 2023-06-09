<aside class="main-sidebar" style="margin-top: 150px;">
    <section class="sidebar">
        <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(request()->is('dashboard') || request()->is('profile/*') ? 'active' : ''); ?>">
                        <i class="fa fa-laptop"></i> <span>Dashboard</span>
                    </a>
                </li>
           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>
                <li class="treeview">
                    <a href="<?php echo e(route('role.index')); ?>" class="<?php echo e(request()->is('role') || request()->is('role/create') || request()->is('role/*/edit') ? 'active' : ''); ?>">
                        <i class="fa fa-user-plus"></i> <span>Roles</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-list')): ?>
                <li class="treeview">
                    <a href="<?php echo e(route('permission.index')); ?>" class="<?php echo e(request()->is('permission') || request()->is('permission/create') || request()->is('permission/*/edit') ? 'active' : ''); ?>">
                        <i class="fa fa-lock"></i> <span>Permissions</span>
                    </a>
                </li>
            <?php endif; ?>
			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page-list')): ?>
                <li class="treeview">
                    <a href="<?php echo e(route('page.index')); ?>" class="<?php echo e(request()->is('page') || request()->is('page/*') || request()->is('page_setting/*') ? 'active' : ''); ?>">
                        <i class="fa fa-cog"></i> <span>Settings</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('paragon-list')): ?>
                <li class="treeview">
                    <a href="<?php echo e(route('paragon.index')); ?>" class="<?php echo e(request()->is('paragon') || request()->is('paragon/create') || request()->is('paragon/*/edit') ? 'active' : ''); ?>">
                        <i class="fa fa-newspaper-o"></i> <span>Paragon Logistics</span>
                    </a>
                </li>
            <?php endif; ?>
            
        </ul>
    </section>
</aside>
<?php /**PATH C:\xampp\htdocs\Asjad\resources\views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>