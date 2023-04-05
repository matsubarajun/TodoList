@extends('layouts.master')

@section('title', 'Remindar')

@section('css')

<link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

@endsection


@section('content')

<body>
    <div class="container mt-3">
        <h1>Remindリスト</h1>
    </div>
    <div class="container mt-3">
        <div class="container mb-4">
            {!! Form::open(['route' => 'reminds.store', 'method' => 'POST']) !!}
            {{ csrf_field() }}
                <div class="row">
                    {{ Form::text('newRemind', null, ['class' => 'form-control col-8 mr-5']) }}
                    {{ Form::date('newDeadline', null, ['class' => 'mr-5']) }}
                    {{ Form::submit('新規追加', ['class' => 'btn btn-primary']) }}
                </div>
            {!! Form::close() !!}
        </div>
        {{-- エラー表示 ここから --}}
        @if ($errors->has('newRemind'))
            <p class="alert alert-danger">{{ $errors->first('newRemind') }}</p>
        @endif
        @if ($errors->has('newDeadline'))
            <p class="alert alert-danger">{{ $errors->first('newDeadline') }}</p>
        @endif
        {{-- エラー表示 ここまで --}}

        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="width: 60%">Remind</th>
                    <th scope="col">期限</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reminds as $remind)
                    <tr>
                        <th scope="row" class="remind">{{ $remind->remind }}</th>
                        <td>{{ $remind->deadline }}</td>
                        <td><a href="{{ route('reminds.edit', $remind->id) }}" class="btn btn-primary">編集</a></td>
                        {!! Form::open(['route' => ['reminds.destroy', $remind->id], 'method' => 'POST']) !!}
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                                <td>{{ Form::submit('削除', ['class' => 'btn btn-danger']) }}</td>
                            {!! Form::close() !!}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
    
</body>
@endsection