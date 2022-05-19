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
                        <th>{{ __('Students count') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buses as $bus)
                        <tr>
                            <td>{{ $bus->id }}</td>
                            <td>{{ $bus->teacher->name ?? '-' }}</td>
                            <td>{{ $bus->teacher->email ?? '-' }}</td>
                            <td>{{ $bus->students->count() }}</td>
                            <td>
                                <a href="{{ route('buses.edit', $bus->id) }}" class="col-md-2" style="line-height:30px;">
                                    <i class="icon-pen"></i>
                                </a>
                                <a class="col-md-2 delete" style="line-height:30px;">
                                    <i class="icon-remove text-danger"></i>
                                </a>
                                <form action="{{ route('buses.delete', $bus->id) }}" method="POST" class="confirmDeletion">
                                    @csrf

                                    <button class="col-md-4 btn btn-danger">
                                        {{ __('Confirm') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
