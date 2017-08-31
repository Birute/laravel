@extends('layout')

@section('content')

<h2>Pridėti draugą</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- store - naujiems įrašams SAUGOTI, create - atvaizduoja naujo įrašo kūrimo formą -->
  <form enctype="multipart/form-data" method="post" action="{{ route('friends.update', ['id'=>$friend ->id]) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    @include('friends.form')

    <img src="{{ Storage::url($friend->photo) }}">

    <input type="submit" value="Išsaugoti">
  </form>

@endsection('content')
