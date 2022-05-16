<x-app-layout>
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i>{{ __('Parents list') }}</h6></div>
        <div class="datatable">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($parents as $parent)
                        <tr>
                            <td>{{ $parent->id }}</td>
                            <td>{{ $parent->user->name }}</td>
                            <td>{{ $parent->user->email }}</td>
                            <td><a href="{{ route('parents.edit', $parent->id) }}"><i class="icon-pen"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
