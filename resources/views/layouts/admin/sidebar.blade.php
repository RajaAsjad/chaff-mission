<aside class="main-sidebar" style="margin-top: 150px;">
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
                        <i class="fa fa-user-plus"></i> <span>Roles</span>
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
			@can('page-list')
                <li class="treeview">
                    <a href="{{ route('page.index') }}" class="{{ request()->is('page') || request()->is('page/*') || request()->is('page_setting/*') ? 'active' : '' }}">
                        <i class="fa fa-cog"></i> <span>Settings</span>
                    </a>
                </li>
            @endcan

            @can('paragon-list')
                <li class="treeview">
                    <a href="{{ route('paragon.index') }}" class="{{ request()->is('paragon') || request()->is('paragon/create') || request()->is('paragon/*/edit') ? 'active' : '' }}">
                        <i class="fa fa-newspaper-o"></i> <span>Paragon Logistics</span>
                    </a>
                </li>
            @endcan
            {{-- @can('express-list')
                <li class="treeview">
                    <a href="{{ route('express.index') }}" class="{{ request()->is('express') || request()->is('express/create') || request()->is('express/*/edit') ? 'active' : '' }}">
                        <i class="fa fa-newspaper-o"></i> <span>Express Shipping</span>
                    </a>
                </li>
            @endcan
            @can('skyway-list')
                <li class="treeview">
                    <a href="{{ route('skyway.index') }}" class="{{ request()->is('skyway') || request()->is('skyway/create') || request()->is('skyway/*/edit') ? 'active' : '' }}">
                        <i class="fa fa-newspaper-o"></i> <span>Skyway Shipping</span>
                    </a>
                </li>
            @endcan
            @can('mass-list')
                <li class="treeview">
                    <a href="{{ route('mass.index') }}" class="{{ request()->is('mass') || request()->is('mass/create') || request()->is('mass/*/edit') ? 'active' : '' }}">
                        <i class="fa fa-newspaper-o"></i> <span>Mass Shipping</span>
                    </a>
                </li>
            @endcan
            @can('six_star-list')
                <li class="treeview">
                    <a href="{{ route('six_star.index') }}" class="{{ request()->is('six_star') || request()->is('six_star/create') || request()->is('six_star/*/edit') ? 'active' : '' }}">
                        <i class="fa fa-newspaper-o"></i> <span>Six Star Logistics</span>
                    </a>
                </li>
            @endcan --}}
        </ul>
    </section>
</aside>
