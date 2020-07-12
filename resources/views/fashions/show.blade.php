@extends('header')

@section('content')
  <div class="fashionShowHeader">
    <div class="fashionShowHeaderLeft">
      <img src="{{ asset('/storage/image/'.Auth::user()->path)}}" class="fashionShowHeaderLeftImage">
      <div class="fashionShowHeaderLeftProfile">
        <sapan class="fashionShowHeaderLeftProfileName">{{ Auth::user()->name }}</span>
      </div>
    </div>
    <div class="fashionShowHeaderRight"></div>
  </div>
  <img src="{{ asset('/storage/image/'.$fashions->path)}}" width="100%" height="100%">
@endsection