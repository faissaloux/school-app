<x-app-layout>
	<div class="block">
		<h6 class="heading-hr"><i class="icon-tab"></i>{{ __('Bus') }} {{ $bus->id }}</h6>
        <div class="datatable">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('Student name') }}</th>
                        <th>{{ __('Parent name') }}</th>
                        <th>{{ __('Bus teacher name') }}</th>
                        <th>{{ __('Trip status') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->parent->name }}</td>
                            <td>{{ $student->bus->teacher->name }}</td>
                            <td>
                                <span class="label label-{{ $student->tripsStatuses->first()->onTrip() ? 'success' : 'danger' }}">
                                    {{ $student->tripsStatuses->first()->status }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
	</div>
</x-app-layout>
