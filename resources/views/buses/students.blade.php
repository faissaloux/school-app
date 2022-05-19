<x-app-layout>
	<div class="block">
		<h6 class="heading-hr"><i class="icon-file"></i>{{ __('Bus') }} {{ $bus->id }}</h6>
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
                            <td>{{ $student->parent->name }}</td>
                            <td>{{ $student->bus->teacher->name }}</td>
                            <td><a href="{{ route('students.edit', $student->id) }}"><i class="icon-pen"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
	</div>
</x-app-layout>
