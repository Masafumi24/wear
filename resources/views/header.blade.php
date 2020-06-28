<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WEAR</title>
  <link rel="stylesheet" href="{{ asset('css/template.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fashion/index.css') }}">
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
        <a href="#" class="loginBtn">ログイン</a>
        |
        <a href="#" class="signupBtn">新規会員登録</a>
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
</body>
</html>
