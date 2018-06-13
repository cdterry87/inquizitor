@extends('auth.layout')

@section('content')
    <div id="auth-form">
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <h5>{{ __('Reset Password') }}</h5>

                <br/>

                @if (session('status'))
                    <div class="card-panel light-green darken-1 white-text">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="input-field">
                        <input type="email" id="email" name="email" maxlength="250" value="{{ old('email') }}" required>
                        <label for="email">Email</label>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary teal accent-3">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
