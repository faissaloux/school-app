<x-app-layout>
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i>{{ __('Students list') }}</h6></div>
        <div class="datatable">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Parent name') }}</th>
                        <th>{{ __('Bus teacher name') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->parent->user->name }}</td>
                            <td>{{ $student->bus->teacher->user->name }}</td>
                            <td><a href="{{ route('students.edit', $student->id) }}"><i class="icon-pen"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
