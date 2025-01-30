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

<li class="side-menus {{ Request::is('programs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('programs.index') }}"><i class="fas fa-building"></i><span>Programs</span></a>
</li>

<li class="side-menus {{ Request::is('semesters*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('semesters.index') }}"><i class="fas fa-building"></i><span>Semesters</span></a>
</li>

<li class="side-menus {{ Request::is('cohorts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cohorts.index') }}"><i class="fas fa-building"></i><span>Cohorts</span></a>
</li>

<li class="side-menus {{ Request::is('semesters*') ? 'active' : '' }}">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
        <i class="fas fa-building"></i><span>Semesters</span>
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('semesters.index') }}">All Semesters</a></li>
        <li class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('cohorts.index') }}">Cohorts</a></li>
    </ul>
</li>