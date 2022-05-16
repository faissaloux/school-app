<x-app-layout>
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i>{{ __('Buses list') }}</h6></div>
        <div class="datatable">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('Teacher name') }}</th>
                        <th>{{ __('Teacher email') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buses as $bus)
                        <tr>
                            <td>{{ $bus->id }}</td>
                            <td>{{ $bus->teacher->user->name }}</td>
                            <td>{{ $bus->teacher->user->email }}</td>
                            <td><a href="{{ route('buses.edit', $bus->id) }}"><i class="icon-pen"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
