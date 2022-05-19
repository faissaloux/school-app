<x-app-layout>
    <form method="POST" action="{{ route('students.store') }}">
        @csrf

        <div class="panel panel-default">
            <div class="panel-heading"><h6 class="panel-title"><i class="icon-pencil3"></i>{{ __('Add new student') }}</h6></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ __('Name') }}:</label>
                            <input type="text" name="name" placeholder="{{ __('Name') }}" class="form-control" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ __('Parent') }}:</label>
                            <select data-placeholder="{{ __('Choose a parent') }}" class="required select-full" name="parent_id" tabindex="2">
                                @foreach ($parents as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ __('Bus') }}:</label>
                            <select data-placeholder="{{ __('Choose a bus') }}" class="required select-full" name="bus_id" tabindex="2">
                                @foreach ($buses as $bus)
                                    <option value="{{ $bus->id }}">{{ $bus->teacher->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-actions text-right">
                    <input type="reset" value="Cancel" class="btn btn-danger">
                    <input type="submit" value="Submit form" class="btn btn-primary">
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
