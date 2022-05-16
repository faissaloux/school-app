<div class="sidebar">
    <div class="sidebar-content">

        <div class="user-menu dropdown">
            <a href="#">
                <div class="user-info">
                    {{ auth()->user()->name }} <span>{{ auth()->user()->role }}</span>
                </div>
            </a>
        </div>


        <!-- Main navigation -->
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
                    <li><a href="form_components.html">{{ __('Parents list') }}</a></li>
                    <li><a href="form_layouts.html">{{ __('Add new parent') }}</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span>{{ __('Students') }}</span> <i class="icon-users"></i></a>
                <ul>
                    <li><a href="form_components.html">{{ __('Students list') }}</a></li>
                    <li><a href="form_layouts.html">{{ __('Add new student') }}</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span>{{ __('Buses') }}</span> <i class="icon-tab"></i></a>
                <ul>
                    <li><a href="form_components.html">{{ __('Buses list') }}</a></li>
                    <li><a href="form_layouts.html">{{ __('Add new bus') }}</a></li>
                </ul>
            </li>
        </ul>
        <!-- /main navigation -->
        
    </div>
</div>