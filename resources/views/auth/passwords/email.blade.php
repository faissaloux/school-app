<x-guest-layout>
    <div class="login-wrapper">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="popup-header">
                <span class="text-semibold">{{ __('Reset Password') }}</span>
            </div>
            <div class="well">
                <div class="form-group">
                    <label for="email">{{ __('Email') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row form-actions">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
