@extends('layouts.app')

@section('content')

<div class="vertical-align-wrap">
    <div class="vertical-align-middle">
        <div class="auth-box ">
            <div class="left">
                <div class="content">
                    <div class="header">
                        <div class="logo text-center"><img src="/assets/img/logo-dark.png" alt="Klorofil Logo"></div>
                        <p class="lead">Login to your account</p>
                    </div>
                    <form class="form-auth-small" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="signin-email" value="{{ old('email') }}" placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="signin-password" placeholder="Password" value="{{ old('password') }}"
                                name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <input type="checkbox">
                                <span>Remember me</span>
                            </label>
                        </div>
                        <div class="form-group clearfix">
                            <span>I Don't Have Account? <a href="{{ route('register') }}">Register</a></span>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                        <div class="bottom">
                            <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="overlay"></div>
                <div class="content text">
                    <h1 class="heading">Website Toko Buku Novel</h1>
                    <p>by The Helna Kurniawati</p>
                    <a href="/" class="btn btn-primary">Back Home</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection