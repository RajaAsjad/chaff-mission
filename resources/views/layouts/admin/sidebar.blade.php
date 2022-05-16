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
                <a href="{{ route('rental.index') }}" class="{{ request()->is('rental') || request()->is('rental/create') || request()->is('rental/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Rentals</span>
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
            @can('rv-list')
            <li class="treeview">
                <a href="{{ route('rv.index') }}" class="{{ request()->is('rv') || request()->is('rv/create') || request()->is('rv/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>R.Vs</span>
                </a>
            </li>
            @endcan
            @can('blog category-list')
            <li class="treeview">
                <a href="{{ route('blogcategory.index') }}" class="{{ request()->is('blogcategory') || request()->is('blogcategory/create') || request()->is('blogcategory/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Blog Categories</span>
                </a>
            </li>
            @endcan
            @can('blog-list')
            <li class="treeview">
                <a href="{{ route('blog.index') }}" class="{{ request()->is('blog') || request()->is('blog/create') || request()->is('blog/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Blogs</span>
                </a>
            </li>
            @endcan
            @can('testimonial-list')
            <li class="treeview">
                <a href="{{ route('testimonial.index') }}" class="{{ request()->is('testimonial') || request()->is('testimonial/create') || request()->is('testimonial/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Testimonials</span>
                </a>
            </li>
            @endcan
            @can('virtualtour-list')
            <li class="treeview">
                <a href="{{ route('tour.index') }}" class="{{ request()->is('tour') || request()->is('tour/create') || request()->is('tour/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Virtual Tour</span>
                </a>
            </li>
            @endcan
            @can('deals-list')
            <li class="treeview">
                <a href="{{ route('deals.index') }}" class="{{ request()->is('deals') || request()->is('deals/create') || request()->is('deals/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Deals</span>
                </a>
            </li>
            @endcan
            @can('gallery-list')
            <li class="treeview">
                <a href="{{ route('gallery.index') }}" class="{{ request()->is('gallery') || request()->is('gallery/create') || request()->is('gallery/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Gallery</span>
                </a>
            </li>
            @endcan
            @can('categories-list')
            <li class="treeview">
                <a href="{{ route('categories.index') }}" class="{{ request()->is('categories') || request()->is('categories/create') || request()->is('categories/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Categories</span>
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
            @can('about-list')
            <li class="treeview">
                <a href="{{ route('about.index') }}" class="{{ request()->is('about') || request()->is('about/create') || request()->is('about/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>About Us</span>
                </a>
            </li>
            @endcan
            @can('car_rent-list')
            <li class="treeview">
                <a href="{{ route('car_rent.index') }}" class="{{ request()->is('car_rent') || request()->is('car_rent/create') || request()->is('car_rent/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Step Of Car Rent</span>
                </a>
            </li>
            @endcan
            @can('page-list')
            <li class="treeview">
                <a href="{{ route('page.index') }}" class="{{ request()->is('page') || request()->is('page/*') || request()->is('page_setting/*') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Settings</span>
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
            @can('newsletter-list')
                <li class="treeview">
                    <a href="{{ route('newsletter.index') }}" class="{{ request()->is('newsletter') || request()->is('newsletter/create') || request()->is('newsletter/*/edit') ? 'active' : '' }}">
                        <i class="fa fa-tasks"></i> <span>Newsletter</span>
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
