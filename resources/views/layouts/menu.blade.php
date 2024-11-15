<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{{ route('settings.index') }}"><i class="fa fa-edit"></i><span>@lang('models/settings.plural')</span></a>
</li>

