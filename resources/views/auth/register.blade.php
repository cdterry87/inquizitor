@extends('auth.layout')

@section('content')
    <div id="auth-form">
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <h5>{{ __('Register') }}</h5>

                <br/>

                @include('layouts.errors')

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="input-field">
                        <input type="text" id="name" name="name" maxlength="50" value="{{ old('name') }}" required autofocus>
                        <label for="name">Name</label>
                    </div>

                    <div class="input-field">
                        <input type="email" id="email" name="email" maxlength="250" value="{{ old('email') }}" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field">
                        <input type="password" id="password" name="password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="input-field">
                        <input type="password" id="password-confirm" name="password_confirmation" required>
                        <label for="password-confirm">Confirm Password</label>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary teal accent-3">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
