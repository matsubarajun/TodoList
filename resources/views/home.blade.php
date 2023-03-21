@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                <div class="card-header">{{ __('messages.Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('messages.You are logged in!') }}
                </div>
                <div class="col-lg-4">
                    <a class="btn btn-secondary" href="{{ route('user') }}" role="button">ユーザーページへ &raquo;</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
