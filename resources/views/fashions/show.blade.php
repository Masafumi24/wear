@section('styles')
  <link rel="stylesheet" href="{{ asset('css/fashion/show.css') }}">
@endsection

@extends('header')

@section('content')
  <div class="fashionShowHeader">
    <div class="fashionShowHeaderLeft">
      <img src="{{ asset('/storage/image/'.Auth::user()->path)}}" class="fashionShowHeaderLeftImage">
      <div class="fashionShowHeaderLeftProfile">
        <span class="fashionShowHeaderLeftProfileName">{{ Auth::user()->name }}</span>
        <div class="fashionShowHeaderLeftProfileLIst">
          <span class="fashionShowHeaderLeftProfileName">{{ Auth::user()->height }}</span>
          <span class="fashionShowHeaderLeftProfileName">{{ Auth::user()->sex }}</span>
          <span class="fashionShowHeaderLeftProfileName">{{ Auth::user()->hairstyle }}</span>
        </div>
      </div>
    </div>
    <div class="fashionShowHeaderRight"></div>
  </div>
  <img src="{{ asset('/storage/image/'.$fashions->path)}}" width="100%" height="100%">
@endsection