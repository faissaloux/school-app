<!DOCTYPE html>
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

    <body class="full-width page-condensed">
        {{ $slot }}
    </body>
</html>