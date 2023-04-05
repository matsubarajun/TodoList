@extends('layouts.master')

@section('title', 'My page')

@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">My page</h1>
  <p class="lead mt-3">ここはあなたのマイページです！ここでは主にあなたが登録したリマインドやタスクを確認できる場所です。</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Remind</h4>
      </div>
    <div class="card-body">
      <u>リマインド一覧</u>
        <ul class="list-unstyled mt-3 mb-4">
                @foreach ($reminds as $remind)
                    <li>
                        <ul style="text-align: left"　scope="row" class="remind">{{ $remind->remind }}</ul>
                    </li>
                @endforeach
            
        </ul>
        <p><a class="btn btn-lg btn-primary" href="{{ route('reminds.index') }}" role="button">Remindへ</a></p>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Task</h4>
      </div>
      <div class="card-body">
        <u>タスクフォルダ一覧</u>
        <ul class="list-unstyled mt-3 mb-4">
          
          
        
        <p><a class="btn btn-lg btn-primary" href="{{ route('tasks.home') }}" role="button">Taskへ</a></p>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Calendar</h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mt-3 mb-4">
          
          
          <li>本日は</li>
          <u>{{ \Carbon\Carbon::now()->format('Y/m/d') }}</u>
          <li>です</li>

        </ul>
        <p><a class="btn btn-lg btn-primary" href="{{ route('calendar') }}" role="button">Calendarへ</a></p>
      </div>
    </div>
  </div>
</div>

@endsection