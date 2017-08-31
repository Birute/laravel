@extends('layout')

@section('content')

<h1>Rodyti draugą</h1>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form method="post" action="{{ route('friends.show', ['id'=>$friend ->id]) }}">
  {{ csrf_field() }}
  {{ method_field('PUT') }}

  Vardas: {{ $friend->name }} <br>
  Gimimo data: {{ $friend->birthday }} <br>
  Tel. nr.: {{ $friend->phone }}<br>
  Nuotrauka:<br>
  <img src="{{ Storage::url($friend->photo) }}">
</form>

@endsection
