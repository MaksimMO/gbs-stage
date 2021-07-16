<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("dashboard") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
                    Головна
                </a>
            </li>
{{--            @can('user_management_access')--}}
                <li class="nav-item nav-dropdown">
{{--                    <a class="nav-link  nav-dropdown-toggle" href="#">--}}
{{--                        <i class="fa-fw fas fa-users nav-icon">--}}

{{--                        </i>--}}
{{--                        {{ trans('cruds.userManagement.title') }}--}}
{{--                    </a>--}}
{{--                    <ul class="nav-dropdown-items">--}}
{{--                        @can('role_access')--}}
{{--<!--                            <li class="nav-item">--}}
{{--                                <a href="{{ url("roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">--}}
{{--                                    <i class="fa-fw fas fa-briefcase nav-icon">--}}

{{--                                    </i>--}}
{{--                                    {{ trans('cruds.role.title') }}--}}
{{--                                </a>--}}
{{--                            </li>-->--}}
{{--                        @endcan--}}
{{--                        @can('user_access')--}}
{{--<!--                            <li class="nav-item">--}}
{{--                                <a href="{{ url("users") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">--}}
{{--                                    <i class="fa-fw fas fa-user nav-icon">--}}

{{--                                    </i>--}}
{{--                                    Користувачі--}}
{{--                                </a>--}}
{{--                            </li>-->--}}
{{--<!--                            <li class="nav-item">--}}
{{--                                <a href="{{ url("users") }}?role=3" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">--}}
{{--                                    <i class="fa-fw fas fa-user nav-icon">--}}

{{--                                    </i>--}}
{{--                                    Тренери--}}
{{--                                </a>--}}
{{--                            </li>-->--}}
{{--                        @endcan--}}
{{--                    </ul>--}}

                    <a href="{{ route("users.index") }}?role=3" class="nav-link {{ request()->is('users') || request()->is('users/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-user nav-icon">

                        </i>
                        Тренери
                    </a>

                </li>
{{--            @endcan--}}
{{--            @can('school_class_access')--}}
                <li class="nav-item">
                    <a href="{{ route("workouts.index") }}" class="nav-link {{ request()->is('workouts') || request()->is('workouts/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-school nav-icon">

                        </i>
                        Типи тренувань
                    </a>
                </li>
{{--            @endcan--}}
{{--            @can('lesson_access')--}}
                <li class="nav-item">
                    <a href="{{ route("schedule.index") }}" class="nav-link {{ request()->is('schedule') || request()->is('schedule/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-clock nav-icon">

                        </i>
                        Список тренувань
                    </a>
                </li>
{{--            @endcan--}}
            <li class="nav-item">
                <a href="{{ route("calendar.index") }}" class="nav-link {{ request()->is('calendar') || request()->is('calendar/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-calendar nav-icon">

                    </i>
                    Календар
                </a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">--}}
{{--                    <i class="nav-icon fas fa-fw fa-sign-out-alt">--}}

{{--                    </i>--}}
{{--                    {{ trans('global.logout') }}--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
