@extends('user::layouts.auth')
@section('content')
    <!-- Login v1 -->
    <div class="card mb-0">
        <div class="card-body">
            <a href="javascript:void(0);" class="brand-logo">
                <h2 class="brand-text text-primary ml-1">{{ config('app.name') }}</h2>
            </a>

            <p class="card-text mb-2">Please sign-in to your account</p>

            <form class="auth-login-form mt-2" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="login-email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="login-email" name="email" placeholder="john@example.com" aria-describedby="login-email" tabindex="1" autofocus />
                </div>

                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="login-password">Password</label>
                        <a href="{{ route('password.request') }}">
                            <small>Forgot Password?</small>
                        </a>
                    </div>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input type="password" class="form-control form-control-merge" id="login-password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                        <div class="input-group-append">
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="remember-me" tabindex="3" />
                        <label class="custom-control-label" for="remember-me"> Remember Me </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" tabindex="4">Sign in</button>
            </form>
        </div>
    </div>
    <!-- /Login v1 -->
@endsection
