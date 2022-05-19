<div class="sidebar">
    <div class="sidebar-content">
        <ul class="navigation">
            <li class="active">
                <a href="{{ route('dashboard') }}">
                    <span>{{ __('Dashboard') }}</span>
                    <i class="icon-screen2"></i>
                </a>
            </li>
            <li>
                <a href="#"><span>{{ __('Teachers') }}</span> <i class="icon-people"></i></a>
                <ul>
                    <li><a href="{{ route('teachers.index') }}">{{ __('Teachers list') }}</a></li>
                    <li><a href="{{ route('teachers.create') }}">{{ __('Add new teacher') }}</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span>{{ __('Parents') }}</span> <i class="icon-user3"></i></a>
                <ul>
                    <li><a href="{{ route('parents.index') }}">{{ __('Parents list') }}</a></li>
                    <li><a href="{{ route('parents.create') }}">{{ __('Add new parent') }}</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span>{{ __('Students') }}</span> <i class="icon-users"></i></a>
                <ul>
                    <li><a href="{{ route('students.index') }}">{{ __('Students list') }}</a></li>
                    <li><a href="{{ route('students.create') }}">{{ __('Add new student') }}</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span>{{ __('Buses') }}</span> <i class="icon-tab"></i></a>
                <ul>
                    <li><a href="{{ route('buses.index') }}">{{ __('Buses list') }}</a></li>
                    <li><a href="{{ route('buses.create') }}">{{ __('Add new bus') }}</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>