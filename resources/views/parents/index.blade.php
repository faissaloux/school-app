<x-app-layout>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h6 class="panel-title">
                <i class="fa-solid fa-table-cells"></i>
                {{ __('Parents list') }}
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
                    @foreach ($parents as $parent)
                        <tr>
                            <td>{{ $parent->id }}</td>
                            <td>{{ $parent->name }}</td>
                            <td>{{ $parent->email }}</td>
                            <td>
                                <a href="{{ route('parents.edit', $parent->id) }}" class="col-md-2" style="line-height:30px;">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a class="col-md-2 delete" style="line-height:30px;">
                                    <i class="fa-solid fa-trash-can text-danger"></i>
                                </a>
                                <form action="{{ route('parents.delete', $parent->id) }}" method="POST" class="confirmDeletion">
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
