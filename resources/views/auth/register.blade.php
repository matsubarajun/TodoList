@extends('layouts.master')

@section('title', '登録画面')

@section('css')

<link href="{{ asset('css/signin.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-box card ">
                    <div class="login-body card-body">
                        <h1 class="h3 mb-3 font-weight-normal ">{{ __('messages.singin') }}</h1>
                        
                        <form method="POST" class="form-signin" action="{{ route('register') }}">
                            @csrf
                           
                        <div class="form-group">
                            <label for="name">{{ __('messages.name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('messages.name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="email">{{ __('messages.email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('messages.email') }}" required autocomplete="email">
                    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="password">{{ __('messages.password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('messages.password') }}" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('messages.confirmPassword') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('messages.password') }}" required autocomplete="new-password">
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-lg btn-primary btn-block" type="submit">
                                    {{ __('登録') }}
                                </button>
                            </div>
                        </div>
                        
                            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection