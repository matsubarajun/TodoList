@extends('layouts.master')

@section('title', 'ログイン画面')

@section('css')

<link href="{{ asset('css/signin.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-box card ">
                    <div class="login-body card-body">
                        
                        <h1 class="h3 mb-3 font-weight-normal ">{{ __('messages.login') }}</h1>
                        
                        <form class="form-signin" method="POST" action="{{ route('login') }}">
                            
                            @csrf
                            
                        <div class="form-group">
                            <label for="email" class="sr-only">{{ __('messages.email') }}</label>
                            <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>  
                        
                        <div class="form-group">
                            <label for="password" class="sr-only">{{ __('messages.password') }}</label>
                            <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                            @if($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>  
                        
                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" name="remember"{{ old('remember') ? 'checked' : '' }}> {{ __('messages.remember_me') }}
                                </label>
                            </div>
                            
                            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('messages.login') }}</button>
                            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection