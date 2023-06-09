<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
  <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        
    <title>My Portfolio @yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    @yield('css')
    
  </head>
  
  <body>
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
      <div class="container">
        <span class="skiplink-text">Skip to main content</span>
      </div>
    </a>
  
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand text-success" href="{{ route('top') }}">
          <img src="/images/nature036.png" width="30" height="30" alt="">
          ToDo List
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('user') }}">My page <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('reminds.index') }}">reminds</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('tasks.home') }}">task</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('calendar') }}">calendar</a>
            </li>        
          </ul>
          <div class="navbar-nav mt-2 mt-md-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('guide') }}">使い方ガイド</a>
            </li>
          </div>
            
           <div class="my-navbar-control mt-2 mt-md-0 ">
              @if(Auth::check())
                <span class="my-navbar-item active">{{ Auth::user()->name }}さん</span>
        ｜
                <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              @else
                <a class="my-navbar-item " href="{{ route('login') }}">ログイン</a>
        ｜
                <a class="my-navbar-item " href="{{ route('register') }}">会員登録</a>
              @endif
            </div>
        </div>
      </nav>
    </header>
 
    @yield('content')
  
<script src="{{ asset('js/holder.min.js') }}"></script>
@if(Auth::check())
  <script>
    document.getElementById('logout').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
    });
  </script>
@endif

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/bs-custom-file-input.min.js') }}"></script>
<script src="{{ asset('js/anchor.min.js') }}"></script>
<script src="{{ asset('js/clipboard.min.js') }}"></script>
<script src="{{ asset('js/application.js') }}"></script>
<script src="{{ asset('js/search.js') }}"></script>
<script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>
  </body>
</html>