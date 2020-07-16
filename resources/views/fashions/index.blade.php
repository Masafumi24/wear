@section('styles')
  <link rel="stylesheet" href="{{ asset('css/fashion/index.css') }}">
@endsection

@extends('header')

@section('content')
  <div class="fashionIndexTopBtn">
    <div class="likeBtn">おすすめ</div>
    <div class="timelineBtn">タイムライン</div>
  </div>
  <div class="fashionIndexMain">
    <div class="side">
      <div class="sideOneContent">
        <p class="sideOneContentTitle">探す</p>
        <a href="#" class="sideBtn">コーディネートを探す</a>
        <a href="#" class="sideBtn">ユーザーを探す</a>
        <a href="#" class="sideBtn">アイテムを探す</a>
        <a href="#" class="sideBtn">ショップを探す</a>
        <a href="#" class="sideBtn">ブランドを探す</a>
      </div>
      <div class="sideOneContent">
        <p class="sideOneContentTitle">ユーザー</p>
        <a href="#" class="sideBtn">テスト</a>
        <a href="#" class="sideBtn">テスト</a>
        <a href="#" class="sideBtn">テスト</a>
        <a href="#" class="sideBtn">テスト</a>
        <a href="#" class="sideBtn">テスト</a>
      </div>
      <div class="sideOneContent">
        <p class="sideOneContentTitle">ブランド</p>
        <a href="#" class="sideBtn">テストブランド</a>
        <a href="#" class="sideBtn">テストブランド</a>
        <a href="#" class="sideBtn">テストブランド</a>
        <a href="#" class="sideBtn">テストブランド</a>
        <a href="#" class="sideBtn">テストブランド</a>
      </div>
      <div class="sideOneContent">
        <p class="sideOneContentTitle">急上昇ワード</p>
        <a href="#" class="sideBtn">テストワード</a>
        <a href="#" class="sideBtn">テストワード</a>
        <a href="#" class="sideBtn">テストワード</a>
        <a href="#" class="sideBtn">テストワード</a>
        <a href="#" class="sideBtn">テストワード</a>
      </div>
      <div class="sideOneContent">
        <p class="sideOneContentTitle">人気のカテゴリー</p>
        <a href="#" class="sideBtn">テストカテゴリー</a>
        <a href="#" class="sideBtn">テストカテゴリー</a>
        <a href="#" class="sideBtn">テストカテゴリー</a>
        <a href="#" class="sideBtn">テストカテゴリー</a>
        <a href="#" class="sideBtn">テストカテゴリー</a>
      </div>
    </div>
    <div class="main">
      <div class="mainContent">
        <div class="mainContentBox">
          @foreach($fashions as $fashion)
            <a href=" {{ url('fashions/show/'.$fashion->id)}}" class="mainContentBoxList">
              <div class="mainContentBoxListImage">
                <img src="{{ asset('/storage/image/'.$fashion->path)}}" width="100%" height="100%">
              </div>
              <div class="mainContentBoxListProfile">
                <div class="mainContentBoxListProfileIcon"></div>
                <div class="mainContentBoxListProfileStatus">
                  <div class="mainContentBoxListProfileStatusName"></div>
                  <div class="mainContentBoxListProfileStatusHeight"></div>
                </div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection