<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'School') }}</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/charts/sparkline.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/plugins/forms/uniform.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/forms/select2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/forms/inputmask.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/forms/autosize.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/forms/inputlimit.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/forms/listbox.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/forms/multiselect.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/forms/validate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/forms/tags.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/forms/switch.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/plugins/forms/uploader/plupload.full.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/forms/uploader/plupload.queue.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/plugins/forms/wysihtml5/wysihtml5.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/forms/wysihtml5/toolbar.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/plugins/interface/daterangepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/interface/fancybox.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/interface/moment.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/interface/jgrowl.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/interface/datatables.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/interface/colorpicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/interface/fullcalendar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/interface/timepicker.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/application.js') }}"></script>

    </head>

    <body class="page-condensed">
        <div class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Londinium"></a>
                <a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
                    <span class="sr-only">Toggle navbar</span>
                    <i class="icon-grid3"></i>
                </button>
                <button type="button" class="navbar-toggle offcanvas">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="icon-paragraph-justify2"></i>
                </button>
            </div>

            <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">

                <li class="user dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span>{{ auth()->user()->name }}</span>
                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right icons-right">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="icon-exit"></i>{{ __('Logout') }}
                            </a>
        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="page-container">
            <x-sidebar />

            <div class="page-content">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
