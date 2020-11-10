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
                    <form class="form-auth-small" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="control-label sr-only">{{ __('Name') }}</label>


                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required placeholder="name" autocomplete="name"
                                autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label sr-only">{{ __('E-Mail Address') }}</label>


                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="email" required
                                autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="password" class="control-label sr-only">{{ __('Password') }}</label>


                            <input id="password" type="password" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="password-confirm"
                                class="control-label sr-only">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" placeholder="Confirm Password"
                                class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                        <div class="form-group clearfix">
                            <span>Your Have Account? <a href="{{ route('login') }}">Login</a></span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">
                                {{ __('Register') }}
                            </button>
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