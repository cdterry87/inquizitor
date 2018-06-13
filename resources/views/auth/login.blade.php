@extends('auth.layout')

@section('content')
    <div id="auth-form">
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <h5>{{ __('Sign In') }}</h5>

                <br/>

                @include('layouts.errors')

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-field">
                        <input type="email" id="email" name="email" maxlength="250" value="{{ old('email') }}" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field">
                        <input type="password" id="password" name="password" required>
                        <label for="password">Password</label>
                    </div>

                    <br/>

                    <div>
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span>{{ __('Remember Me') }}</span>
                        </label>
                    </div>

                    <br/>

                    <div>
                        <button type="submit" class="btn teal accent-3">
                            {{ __('Login') }}
                        </button>

                        <a class="btn teal accent-3" href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection