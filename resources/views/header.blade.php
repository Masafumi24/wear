<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WEAR</title>
  <link rel="stylesheet" href="{{ asset('css/template.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fashion/index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fashion/createForm.css') }}">
</head>
<body>
  <header>
    <div class="headerBox">
      <div class="headerSerch">
        検索フォーム
      </div>
      <div class="headerTitle">
        <h1>WEAR</h1>
      </div>
      <div class="headerUserMenu">
        @if(Auth::check())
          <img src="{{ asset('/storage/image/'.Auth::user()->path)}}" class="headerUserMenuImage">
          ｜
          <a href="#" id="logout" class="signupBtn">ログアウト</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        @else
          <a href=" {{ url('login') }}" class="loginBtn">ログイン</a>
          |
          <a href="{{ url('register') }}" class="signupBtn">新規会員登録</a>
        @endif
    </div>
  </header>
  @if(Request::is('/'))
    <div class="fashionIndexBottomHeader">
      <div class="fashionIndexBottomHeaderBox">
        <a href="#">ALL</a>
        <a href="#">MEN</a>
        <a href="#">WOMEN</a>
        <a href="#">KIDS</a>
        <a href="#">WORLD</a>
      </div>
    </div>
  @endif
  <div class="wrapper">
    <div class="wrapperContent">
      @yield('content')
    </div>
  </div>
  @if(Auth::check())
    <script>
      document.getElementById('logout').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('logout-form').submit();
      });
    </script>
  @endif
</body>
</html>
