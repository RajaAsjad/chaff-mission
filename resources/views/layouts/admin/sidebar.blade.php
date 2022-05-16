<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') || request()->is('profile/*') ? 'active' : '' }}">
                    <i class="fa fa-laptop"></i> <span>Dashboard</span>
                </a>
            </li>
           
            @can('role-list')
            <li class="treeview">
                <a href="{{ route('role.index') }}" class="{{ request()->is('role') || request()->is('role/create') || request()->is('role/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Roles</span>
                </a>
            </li>
            @endcan
            @can('permission-list')
            <li class="treeview">
                <a href="{{ route('permission.index') }}" class="{{ request()->is('permission') || request()->is('permission/create') || request()->is('permission/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-lock"></i> <span>Permissions</span>
                </a>
            </li>
            @endcan
            @can('car-list')
            <li class="treeview">
                <a href="{{ route('vehicle.index') }}" class="{{ request()->is('vehicle') || request()->is('vehicle/create') || request()->is('vehicle/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Vehicles</span>
                </a>
            </li>
            @endcan
            @can('property-list')
            <li class="treeview">
                <a href="{{ route('property.index') }}" class="{{ request()->is('property') || request()->is('property/create') || request()->is('property/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Properties</span>
                </a>
            </li>
            @endcan
            @can('blog category-list')
            <li class="treeview">
                <a href="{{ route('category.index') }}" class="{{ request()->is('category') || request()->is('category/create') || request()->is('category/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Cetagories</span>
                </a>
            </li>
            @endcan
            @can('blog category-list')
            <li class="treeview">
                <a href="{{ route('blog.index') }}" class="{{ request()->is('blog') || request()->is('blog/create') || request()->is('blog/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Blog</span>
                </a>
            </li>
            @endcan
        
            @can('user-list')
            <li class="treeview">
                <a href="{{ route('user.index') }}" class="{{ request()->is('user') || request()->is('user/create') || request()->is('user/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>
                @endcan
            @can('page-list')
            <li class="treeview">
                <a href="{{ route('page.index') }}" class="{{ request()->is('page') || request()->is('page/*') || request()->is('page_setting/*') ? 'active' : '' }}">
                    <i class="fa fa-cog"></i> <span>Settings</span>
                </a>
            </li>
            @endcan
            @can('faq-list')
                <li class="treeview">
                    <a href="{{ route('faq.index') }}" class="{{ request()->is('faq') || request()->is('faq/create') || request()->is('faq/*/edit') ? 'active' : '' }}">
                        <i class="fa fa-question-circle"></i> <span>Faqs</span>
                    </a>
                </li>
            @endcan
            @can('coupon-list')
                <li class="treeview">
                    <a href="{{ route('coupon.index') }}" class="{{ request()->is('coupon') || request()->is('coupon/create') || request()->is('coupon/*/edit') ? 'active' : '' }}">
                        <i class="fa fa-graduation-cap"></i> <span>Coupons</span>
                    </a>
                </li>
            @endcan
            @can('testimonial-list')
                <li class="treeview">
                    <a href="{{ route('testimonial.index') }}" class="{{ request()->is('testimonial') || request()->is('testimonial/create') || request()->is('testimonial/*/edit') ? 'active' : '' }}">
                        <i class="fa fa-quote-right"></i> <span>Testimonial</span>
                    </a>
                </li>
            @endcan
            
            @can('team-list')
                <li class="treeview">
                    <a href="{{ route('team.index') }}" class="{{ request()->is('team') || request()->is('team/create') || request()->is('team/*/edit') ? 'active' : '' }}">
                        <i class="fa fa-user-plus"></i> <span>Team</span>
                    </a>
                </li>
            @endcan
        </ul>
    </section>
</aside>
