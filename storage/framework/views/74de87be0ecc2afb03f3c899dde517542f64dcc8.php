<aside class="main-sidebar">
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
                    <i class="fa fa-tasks"></i> <span>Roles</span>
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
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('user.index')); ?>" class="<?php echo e(request()->is('user') || request()->is('user/create') || request()->is('user/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('categories-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('category.index')); ?>" class="<?php echo e(request()->is('category') || request()->is('category/create') || request()->is('category/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-tasks"></i> <span>Categories</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('car_type-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('car_type.index')); ?>" class="<?php echo e(request()->is('car_type') || request()->is('car_type/create') || request()->is('car_type/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-tasks"></i> <span>Car Types</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('product.index')); ?>" class="<?php echo e(request()->is('product') || request()->is('product/create') || request()->is('product/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-tasks"></i> <span>Products</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deals-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('deals.index')); ?>" class="<?php echo e(request()->is('deals') || request()->is('deals/create') || request()->is('deals/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-tasks"></i> <span>Deals</span>
                </a>
            </li>
            <?php endif; ?>
            
            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blog-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('blog.index')); ?>" class="<?php echo e(request()->is('blog') || request()->is('blog/create') || request()->is('blog/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-tasks"></i> <span>Blogs</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('testimonial-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('testimonial.index')); ?>" class="<?php echo e(request()->is('testimonial') || request()->is('testimonial/create') || request()->is('testimonial/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-tasks"></i> <span>Testimonials</span>
                </a>
            </li>
            <?php endif; ?>
            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('gallery-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('gallery.index')); ?>" class="<?php echo e(request()->is('gallery') || request()->is('gallery/create') || request()->is('gallery/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-tasks"></i> <span>Gallery</span>
                </a>
            </li>
            <?php endif; ?>
           
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('about-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('about.index')); ?>" class="<?php echo e(request()->is('about') || request()->is('about/create') || request()->is('about/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-tasks"></i> <span>About Us</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('car_rent-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('how_to_rent.index')); ?>" class="<?php echo e(request()->is('how_to_rent') || request()->is('how_to_rent/create') || request()->is('how_to_rent/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-tasks"></i> <span>How to rents</span>
                </a>
            </li>
            <?php endif; ?>
            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq-list')): ?>
                <li class="treeview">
                    <a href="<?php echo e(route('faq.index')); ?>" class="<?php echo e(request()->is('faq') || request()->is('faq/create') || request()->is('faq/*/edit') ? 'active' : ''); ?>">
                        <i class="fa fa-question-circle"></i> <span>Faqs</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('newsletter-list')): ?>
                <li class="treeview">
                    <a href="<?php echo e(route('newsletter.index')); ?>" class="<?php echo e(request()->is('newsletter') || request()->is('newsletter/create') || request()->is('newsletter/*/edit') ? 'active' : ''); ?>">
                        <i class="fa fa-tasks"></i> <span>Newsletter</span>
                    </a>
                </li>
            <?php endif; ?>

            
            
        </ul>
    </section>
</aside>
<?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>