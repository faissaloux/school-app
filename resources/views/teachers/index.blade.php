<x-app-layout>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h6 class="panel-title">
                <i class="fa-solid fa-table-cells"></i>
                {{ __('Teachers list') }}
            </h6>
        </div>
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
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->id }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td class="col-md-2 align-items-center">
                                <a href="{{ route('teachers.edit', $teacher->id) }}" class="col-md-2" style="line-height:30px;">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a class="col-md-2 delete" style="line-height:30px;">
                                    <i class="fa-solid fa-trash-can text-danger"></i>
                                </a>
                                <form action="{{ route('teachers.delete', $teacher->id) }}" method="POST" class="confirmDeletion">
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
