@extends('user::layouts.auth')
@section('content')

    <!-- Reset Password v1 -->
    <div class="card mb-0">
        <div class="card-body">
            <a href="javascript:void(0);" class="brand-logo">
                <h2 class="brand-text text-primary ml-1">{{ config('app.name') }}</h2>
            </a>

            <h4 class="card-title mb-1">Reset Password 🔒</h4>
            <p class="card-text mb-2">Your new password must be different from previously used passwords</p>

            <form class="auth-reset-password-form mt-2" action="{{ route('password.reset') }}" method="POST">
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="reset-password-new">New Password</label>
                    </div>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input type="password" class="form-control form-control-merge" id="reset-password-new" name="reset-password-new" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="reset-password-new" tabindex="1" autofocus />
                        <div class="input-group-append">
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="reset-password-confirm">Confirm Password</label>
                    </div>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input type="password" class="form-control form-control-merge" id="reset-password-confirm" name="reset-password-confirm" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="reset-password-confirm" tabindex="2" />
                        <div class="input-group-append">
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" tabindex="3">Set New Password</button>
            </form>

            <p class="text-center mt-2">
                <a href="{{ route('login') }}"> <i data-feather="chevron-left"></i> Back to login </a>
            </p>
        </div>
    </div>
    <!-- /Reset Password v1 -->
@endsection
