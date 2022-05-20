<x-guest-layout>
    <div class="login-wrapper">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="popup-header">
                <span class="text-semibold">{{ __('Login') }}</span>
            </div>
            <div class="well">
                <div class="form-group has-feedback">
                    <label for="email">{{ __('Email') }}</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="{{ __('Email') }}"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        autofocus
                    >
                    <i class="fa-solid fa-user-group form-control-feedback"></i>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <label for="password">{{ __('Password') }}</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="{{ __('Password') }}"
                        required
                        autocomplete="current-password"
                    >
                    <i class="fa-solid fa-lock form-control-feedback"></i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group text-right">
                    <a href="{{ route('password.request') }}">{{ __('Forgot password?') }}</a>
                </div>

                <div class="row form-actions">
                    <div class="col-xs-6">
                        <div class="checkbox checkbox-success">
                        <label for="remember">
                            <input class="form-check-input styled" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('Remember me') }}
                        </label>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-warning pull-right">{{ __('Sign in') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
