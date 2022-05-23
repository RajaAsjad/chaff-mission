<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(request()->is('dashboard') || request()->is('profile/*') ? 'active' : ''); ?>">
                    <i class="fa fa-laptop"></i> <span>Dashboard</span>
                </a>
            </li>

            

            <li class="treeview">
                <a href="<?php echo e(route('booking_detail')); ?>" class="<?php echo e(request()->is('booking_detail') || request()->is('/*') ? 'active' : ''); ?>">
                    <i class="fa fa-laptop"></i> <span>Booking</span>
                </a>
            </li>

            <li class="treeview">
                <a href="<?php echo e(route('appointment_detail')); ?>" class="<?php echo e(request()->is('appointment_detail') || request()->is('/*') ? 'active' : ''); ?>">
                    <i class="fa fa-laptop"></i> <span>Appointment</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
<?php /**PATH C:\xampp\htdocs\chaff_mission\resources\views/layouts/user/sidebar.blade.php ENDPATH**/ ?>