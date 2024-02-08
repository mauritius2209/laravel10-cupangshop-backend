<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <div class="hero-brand">
                <img src="{{ asset('img/hero-sidetagline-white.svg') }}"
                    alt="herobrand"
                    width="60%"
                    style="margin-top: 20px">
            </div>
            <a class="hero-tagline">CONTENT<span> MANAGEMENT</span></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">CP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Quick Control</li>
            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-house-lock"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('dashboard') }}">General</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Master</li>
            <li class="nav-item dropdown {{ $type_menu === 'manageuser' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-user-shield"></i><span>User</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('manage-user') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('manage-user') }}">Manage</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'category' ? 'active' : '' }}"">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-bookmark"></i><span>Category</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('manage-category') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('manage-category') }}">Manage</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'product' ? 'active' : '' }}"">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-box"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('manage-product') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('manage-product') }}">Manage</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('galeries-product') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('galeries-product') }}">Galeries</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('reviews-product') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('reviews-product') }}">Reviews</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Features</li>
            <li class="nav-item dropdown {{ $type_menu === 'manageorders' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-dolly"></i><span>Order</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('manage-orders') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('manage-orders') }}">Manage</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'managereports' ? 'active' : '' }}"">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-file-lines"></i><span>Reports</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('manage-reports') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('manage-reports') }}">Manage</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'managereccomend' ? 'active' : '' }}"">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-ranking-star"></i><span>Recommendation</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('control-reccomend') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('control-reccomend') }}">Control</a>
                    </li>
                </ul>
            </li>
    </aside>
</div>
