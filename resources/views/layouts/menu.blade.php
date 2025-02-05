{{-- <li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{{ route('settings.index') }}"><i class="fa fa-cog"></i><span>@lang('models/settings.plural')</span></a>
</li>

<li class="side-menus {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}"><i class="fa fa-users"></i><span>Users</span></a>
</li>

<li class="nav-item dropdown side-menus {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link dropdown-toggle" href="#" id="userManagementDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-users"></i><span>User Management</span>
    </a>
    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="userManagementDropdown">
        <li><a class="dropdown-item" href="{{ route('users.index') }}">All Users</a></li>
        <li class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('users.create') }}">Add User</a></li>
    </ul>
</li>




<li class="side-menus {{ Request::is('programs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('programs.index') }}"><i class="fa fa-tasks"></i><span>Programs</span></a>
</li>

<li class="side-menus {{ Request::is('semesters*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('semesters.index') }}"><i class="fa fa-calendar"></i><span>Semesters</span></a>
</li>

<li class="side-menus {{ Request::is('cohorts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cohorts.index') }}"><i class="fa fa-graduation-cap"></i><span>Cohorts</span></a>
</li>

<li class="side-menus {{ Request::is('course-units*') ? 'active' : '' }}">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
        <i class="fa fa-book"></i><span>Course Units</span>
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('course-units.index') }}">All Course Units</a></li>
        <li class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('course-units.index') }}">Cohorts</a></li>
    </ul>
</li> --}}

<!-- Dashboard -->
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class="fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<!-- Settings -->
<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{{ route('settings.index') }}">
        <i class="fa fa-cog"></i><span>@lang('models/settings.plural')</span>
    </a>
</li>

<!-- User Management Dropdown -->
{{-- <li class="nav-item dropdown side-menus {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link dropdown-toggle" href="#" id="userManagementDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-users"></i><span>User Management</span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="userManagementDropdown">
        <li><a class="dropdown-item" href="{{ route('users.index') }}">Students</a></li>
        <li class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('lecturers.index') }}">Lecturers</a></li>
    </ul>
</li> --}}

<!-- User Management Dropdown -->
{{-- <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link dropdown-toggle" href="#" id="userManagementDropdown" role="button" data-toggle="collapse"
        data-target="#userDropdown" aria-expanded="false">
        <i class="fa fa-users"></i> <span>User Management</span>
    </a>
    <div class="collapse" id="userDropdown">
        <ul class="nav flex-column ml-3">
            <a class="nav-link" href="{{ route('roles.index') }}"><i class="fas fa-building"></i><span>Roles</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('students.index') }}">Students</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('lecturers.index') }}">Lecturers</a>
</li>
</ul>
</div>
</li> --}}

{{-- <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link dropdown-toggle" href="#" id="userManagementDropdown" role="button" data-toggle="collapse"
        data-target="#userDropdown" aria-expanded="false">
        <i class="fa fa-users"></i> <span>User Management</span>
    </a>
    <div class="collapse" id="userDropdown">
        <ul class="nav flex-column ml-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('roles.index') }}">
                    <i class="fa fa-building"></i> <span>Roles</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('students.index') }}">
                    <i class="fa fa-user-graduate"></i> <span>Students</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('lecturers.index') }}">
                    <i class="fa fa-chalkboard-teacher"></i> <span>Lecturers</span>
                </a>
            </li>
        </ul>
    </div>
</li> --}}

<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link dropdown-toggle" href="#" id="userManagementDropdown" role="button" data-toggle="collapse"
        data-target="#userDropdown" aria-expanded="false">
        <i class="fa fa-users"></i> <span>User Management</span>
    </a>
    <div class="collapse {{ Request::is('roles*') || Request::is('students*') || Request::is('lecturers*') ? 'show' : '' }}"
        id="userDropdown">
        <ul class="nav flex-column ml-3">


            <li class="nav-item">
                <a class="nav-link {{ Request::is('roles*') ? 'text-danger' : '' }}" href="{{ route('roles.index') }}">
                    <i class="fa fa-building"></i>
                    <span class="{{ Request::is('roles*') ? 'text-danger' : '' }}">Roles</span>
                </a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('users*') ? 'text-danger' : '' }}" href="{{ route('users.index') }}">
                    <i class="fa fa-user-graduate"></i>
                    <span class="{{ Request::is('users*') ? 'text-danger' : '' }}">Users</span>
                </a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link {{ Request::is('students*') ? 'text-danger' : '' }}"
                    href="{{ route('students.index') }}">
                    <i class="fa fa-user-graduate"></i>
                    <span class="{{ Request::is('students*') ? 'text-danger' : '' }}">Students</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('lecturers*') ? 'text-danger' : '' }}"
                    href="{{ route('lecturers.index') }}">
                    <i class="fa fa-chalkboard-teacher"></i>
                    <span class="{{ Request::is('lecturers*') ? 'text-danger' : '' }}">Lecturers</span>
                </a>
            </li>
        </ul>
    </div>
</li>


<!-- Programs -->
<li class="side-menus {{ Request::is('programs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('programs.index') }}">
        <i class="fa fa-tasks"></i><span>Programs</span>
    </a>
</li>

<!-- Semesters -->
<li class="side-menus {{ Request::is('semesters*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('semesters.index') }}">
        <i class="fa fa-calendar"></i><span>Semesters</span>
    </a>
</li>

<!-- Cohorts -->
<li class="side-menus {{ Request::is('cohorts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cohorts.index') }}">
        <i class="fa fa-graduation-cap"></i><span>Cohorts</span>
    </a>
</li>

<li class="side-menus {{ Request::is('student_applications*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('student_applications.index') }}">
        <i class="fa fa-graduation-cap"></i><span>Student Application</span>
    </a>
</li>

<!-- Course Units Dropdown -->
{{-- <li class="nav-item dropdown side-menus {{ Request::is('course-units*') ? 'active' : '' }}">
    <a class="nav-link dropdown-toggle" href="#" id="courseUnitsDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-book"></i><span>Course Units</span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="courseUnitsDropdown">
        <li><a class="dropdown-item" href="{{ route('course-units.index') }}">All Course Units</a></li>
        <li class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('course-units.index') }}">Add Course Unit</a></li>
    </ul>
</li> --}}


<li class="nav-item {{ Request::is('course-units*') ? 'active' : '' }}">
    <a class="nav-link dropdown-toggle" href="#" id="ManagementDropdown" role="button" data-toggle="collapse"
        data-target="#courseDropdown" aria-expanded="false">
        <i class="fa fa-users"></i> <span>Course Units</span>
    </a>
    <div class="collapse" id="courseDropdown">
        <ul class="nav flex-column ml-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('course-units.index') }}">All Course units</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('course-units.create') }}">Add Course unit</a>
            </li>
        </ul>
    </div>
</li>
{{-- <li class="side-menus {{ Request::is('roles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('roles.index') }}"><i class="fas fa-building"></i><span>Roles</span></a>
</li> --}}<li class="side-menus {{ Request::is('enrollments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('enrollments.index') }}"><i
            class="fas fa-building"></i><span>Enrollments</span></a>
</li>