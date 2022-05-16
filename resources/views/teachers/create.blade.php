<x-app-layout>
    <form method="POST" action="{{ route('teachers.store') }}">
        @csrf

        <div class="panel panel-default">
            <div class="panel-heading"><h6 class="panel-title"><i class="icon-pencil3"></i>{{ __('Add new teacher') }}</h6></div>
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
                            <label>{{ __('Email') }}:</label>
                            <input type="email" name="email" placeholder="{{ __('Email') }}" class="form-control" value="{{ old('email') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ __('Password') }}:</label>
                            <input type="password" name="password" placeholder="{{ __('Password') }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ __('Password confirmation') }}:</label>
                            <input type="password" name="password_confirmation" placeholder="{{ __('Password confirmation') }}" class="form-control">
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
