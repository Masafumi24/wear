@extends('header')

@section('content')
  <div class="fashionIndex">
    @foreach($fashions as $fashion)
      <tr>
        <td>{{ $fashion->title }}</td>
        <td>
          <span class="label">{{ $fashion->introduction }}</span>
        </td>
      </tr>
    @endforeach
  </div>
@endsection