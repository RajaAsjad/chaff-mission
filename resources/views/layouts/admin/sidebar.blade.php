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
            @can('user-list')
            <li class="treeview">
                <a href="{{ route('user.index') }}" class="{{ request()->is('user') || request()->is('user/create') || request()->is('user/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>
            @endcan
            @can('categories-list')
            <li class="treeview">
                <a href="{{ route('category.index') }}" class="{{ request()->is('category') || request()->is('category/create') || request()->is('category/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Categories</span>
                </a>
            </li>
            @endcan
            @can('car_type-list')
            <li class="treeview">
                <a href="{{ route('car_type.index') }}" class="{{ request()->is('car_type') || request()->is('car_type/create') || request()->is('car_type/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Car Types</span>
                </a>
            </li>
            @endcan
            @can('product-list')
            <li class="treeview">
                <a href="{{ route('product.index') }}" class="{{ request()->is('product') || request()->is('product/create') || request()->is('product/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Products</span>
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
            
            @can('gallery-list')
            <li class="treeview">
                <a href="{{ route('gallery.index') }}" class="{{ request()->is('gallery') || request()->is('gallery/create') || request()->is('gallery/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Gallery</span>
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
                <a href="{{ route('how_to_rent.index') }}" class="{{ request()->is('how_to_rent') || request()->is('how_to_rent/create') || request()->is('how_to_rent/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>How to rents</span>
                </a>
            </li>
            @endcan
            {{-- @can('page-list')
            <li class="treeview">
                <a href="{{ route('page.index') }}" class="{{ request()->is('page') || request()->is('page/*') || request()->is('page_setting/*') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Settings</span>
                </a>
            </li>
            @endcan --}}
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

            {{-- @can('virtualtour-list')
            <li class="treeview">
                <a href="{{ route('tour.index') }}" class="{{ request()->is('tour') || request()->is('tour/create') || request()->is('tour/*/edit') ? 'active' : '' }}">
                    <i class="fa fa-tasks"></i> <span>Virtual Tour</span>
                </a>
            </li>
            @endcan --}}
        </ul>
    </section>
</aside>
