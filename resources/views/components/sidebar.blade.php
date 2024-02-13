<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Resto Faisal</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SF</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('users.index') }}"><i class="far fa-user"></i> <span>User</span></a>
            </li>

        </ul>
    </aside>
</div>
