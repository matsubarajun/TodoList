@extends('layouts.master')

@section('title', 'Remindar')

@section('css')

<link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

@endsection

@section('content')

<body>
    <div class="container mt-3">
        <h1>Todoリスト</h1>
    </div>
    <div class="container mt-3">
        <div class="container mb-4">
            {!! Form::open(['route' => ['reminds.update', $remind->id], 'method' => 'POST']) !!}
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="row">
                    {{ Form::text('updateRemind', $remind->remind, ['class' => 'form-control col-8 mr-4']) }}
                    {{ Form::date('updateDeadline', $remind->deadline, ['class' => 'mr-4']) }}
                    {{ Form::submit('リマインドを更新', ['class' => 'btn btn-primary mr-3']) }}
                    <a href="{{ route('reminds.index') }}" class="btn btn-danger">戻る</a>
                </div>
            {!! Form::close() !!}
        </div>
        {{-- エラー表示 ここから --}}
        @if ($errors->has('updateRemind'))
            <p class="alert alert-danger">{{ $errors->first('updateRemind') }}</p>
        @endif
        @if ($errors->has('updateDeadline'))
            <p class="alert alert-danger">{{ $errors->first('updateDeadline') }}</p>
        @endif
    </div>
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
</body>
@endsection