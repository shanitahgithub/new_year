<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{{ route('settings.index') }}"><i class="fa fa-cog"></i><span>@lang('models/settings.plural')</span></a>
</li>

<li class="side-menus {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-users"></i><span>Users</span></a>
</li>




