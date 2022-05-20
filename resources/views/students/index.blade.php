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
                            <td>{{ $student->parent->name }}</td>
                            <td>{{ $student->bus->teacher->name }}</td>
                            <td>
                                <a href="{{ route('students.edit', $student->id) }}" class="col-md-2" style="line-height:30px;">
                                    <i class="icon-pen"></i>
                                </a>
                                <a class="col-md-2 delete" style="line-height:30px;">
                                    <i class="icon-remove text-danger"></i>
                                </a>
                                <form action="{{ route('students.delete', $student->id) }}" method="POST" class="confirmDeletion">
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
