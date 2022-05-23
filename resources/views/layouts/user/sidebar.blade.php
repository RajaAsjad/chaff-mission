<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') || request()->is('profile/*') ? 'active' : '' }}">
                    <i class="fa fa-laptop"></i> <span>Dashboard</span>
                </a>
            </li>

            {{-- <li class="treeview">
                <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') || request()->is('profile/*') ? 'active' : '' }}">
                    <i class="fa fa-laptop"></i> <span>Account</span>
                </a>
            </li> --}}

            <li class="treeview">
                <a href="{{ route('booking_detail') }}" class="{{ request()->is('booking_detail') || request()->is('/*') ? 'active' : '' }}">
                    <i class="fa fa-laptop"></i> <span>Booking</span>
                </a>
            </li>

            <li class="treeview">
                <a href="{{ route('appointment_detail') }}" class="{{ request()->is('appointment_detail') || request()->is('/*') ? 'active' : '' }}">
                    <i class="fa fa-laptop"></i> <span>Appointment</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
