@extends('layouts.master')

@section('title', 'Folder create')

@section('content')

<main>
    <div class="container mt-3">
      <div class="row">
        <div class="col col-md-offset-3 col-md-6">
          <nav class="panel panel-default">
            <h1>フォルダを追加</h1>
            <div class="panel-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              <form action="{{ route('folders.create') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="title">フォルダ名</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">追加</button>
                </div>
              </form>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </main>
</body>

@endsection