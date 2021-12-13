@extends('user::layouts.auth')
@section('content')
    <!-- Forgot Password v1 -->
    <div class="card mb-0">
        <div class="card-body">
            <a href="javascript:void(0);" class="brand-logo">
                <h2 class="brand-text text-primary ml-1">{{ config('app.name') }}</h2>
            </a>

            <h4 class="card-title mb-1">Forgot Password? 🔒</h4>
            <p class="card-text mb-2">Enter your email and we'll send you instructions to reset your password</p>

            <form class="auth-forgot-password-form mt-2" action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="forgot-password-email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="forgot-password-email" name="email" placeholder="john@example.com" aria-describedby="forgot-password-email" tabindex="1" autofocus />
                </div>
                <button type="submit" class="btn btn-primary btn-block" tabindex="2">Send reset link</button>
            </form>

            <p class="text-center mt-2">
                <a href="{{ route('login') }}"> <i data-feather="chevron-left"></i> Back to login </a>
            </p>
        </div>
    </div>
    <!-- /Forgot Password v1 -->
@endsection
