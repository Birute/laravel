@extends('layout')

@section('content')

<h2>Naujas draugas</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <form enctype="multipart/form-data" method="post" action="{{ route('friends.store') }}">
    {{ csrf_field() }}

    @include('friends.form')

    <input type="submit" value="Išsaugoti">
  </form>
@endsection('content')
