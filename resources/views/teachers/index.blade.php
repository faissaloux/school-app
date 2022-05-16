<x-app-layout>
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i>{{ __('Teachers list') }}</h6></div>
        <div class="datatable">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->id }}</td>
                            <td>{{ $teacher->user->name }}</td>
                            <td>{{ $teacher->user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
