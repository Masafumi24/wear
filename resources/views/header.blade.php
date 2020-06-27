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
  <div class="wrapper">
    @yield('content')
  </div>
</body>
</html>
