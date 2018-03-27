@extends('layouts.layout')
@section('top-nav')
    @include('elements.top-nav')
@endsection
@section('logo-search-cart')
    @include('elements.logo-search-cart')
@endsection
@section('menu')
    @include('elements.menu')
@endsection
@section('login')
<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="commerce commerce-account">
                <div id="customer_login">
                    <div class="col-md-6">
                        <h2>Login</h2>
                        <form class="login" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-row form-row-wide">
                                <label for="username">
                                    Username or email address 
                                    <span class="required">*</span>
                                </label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-row form-row-wide">
                                <label for="password">
                                    Password 
                                    <span class="required">*</span>
                                </label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-row">
                                <input type="submit" class="button" name="login" value="Login" />
                            </div>
                            <div class="lost_password">
                                <a href="#">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h2>Register</h2>
                        <form class="register" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-row form-row-wide">
                                <label for="reg_name">
                                    Name
                                    <span class="required">*</span>
                                </label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-row form-row-wide">
                                <label for="reg_email">
                                    Email address 
                                    <span class="required">*</span>
                                </label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-row form-row-wide">
                                <label for="reg_password">
                                    Password 
                                    <span class="required">*</span>
                                </label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-row form-row-wide">
                                <label for="reg_password-confirm">
                                    Password 
                                    <span class="required">*</span>
                                </label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="form-row">
                                <input type="submit" class="button" name="register" value="Register" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('footer')
    @include('elements.footer')
@endsection
