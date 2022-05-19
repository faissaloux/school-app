<x-app-layout>
    <form method="POST" action="{{ route('buses.update', $bus->id) }}">
        @csrf

        <div class="panel panel-default">
            <div class="panel-heading"><h6 class="panel-title"><i class="icon-pencil3"></i>{{ __('Update bus') }}</h6></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>{{ __('Teachers') }}:</label>
                            <select data-placeholder="{{ __('Choose a teacher') }}" class="required select-full" name="teacher_id" tabindex="2">
                                @foreach ($teachers as $teacher)
                                    <option
                                        value="{{ $teacher->id }}"
                                        {{ $bus->teacher_id == $teacher->id ? 'selected' : '' }}
                                    >
                                        {{ $teacher->name }}
                                    </option>
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
