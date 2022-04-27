<div class="sidebar-brand">
    <a href="">
        <img class="py-2" src="{{ url('img/logo/logo-3-80.png') }}">
    </a>
</div>
<div class="sidebar-brand sidebar-brand-sm">
    <a href="">DCE</a>
</div>
<ul class="sidebar-menu">
    <li class="menu-header">Home</li>
    <li class="{{ request()->is('member') ? ' active' : '' }}"><a class="nav-link"
            href="{{ route('home') }}"><i class="fas fa-fire"></i> <span>Home</span></a></li>
</ul>
<ul class="sidebar-menu">
    <li class="menu-header">events</li>

        <li class="registWebinar{{ request()->is('member/webinar') ? ' active' : '' }}">
            <a class="nav-link" href="#">
                <i class="fas fa-laptop"></i> <span>Webinar</span>
            </a>
        </li>
        <li class="{{ request()->is('member/elearning') ? 'active' : '' }}">
            <a class="nav-link" href="#">
                <i class="far fa-file-alt"></i> <span>E-Learning</span>
            </a>
        </li>
        <li class="menu-header">Admin Area</li>
        <li class="{{ request()->is('users') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-user"></i> <span>User</span>
            </a>
        </li>
        <li class="{{ request()->is('roles') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('roles.index') }}">
            <i class="fas fa-id-card-alt"></i> <span>Role</span>
            </a>
        </li>
        <li class="{{ request()->is('permissions') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('permissions.index') }}">
                <i class="fas fa-lock"></i> <span>Permission</span>
            </a>
        </li>
        <li class="{{ request()->is('testresult') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('testresult') }}">
            <i class="fas fa-list-alt"></i> <span>Elearning Results</span>
            </a>
        </li>
</ul>
