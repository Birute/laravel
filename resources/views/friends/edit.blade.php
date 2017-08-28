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
  <form method="post" action="{{ route('friends.update', ['id'=>$friend ->id]) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    Vardas:</br> <input type="text" name="name" value="{{ $friend->name }}"></br>
    Gimimo data:</br> <input type="text" name="birthday" value="{{ $friend->birthday }}"></br>
    Tel. Nr.:</br> <input type="text" name="phone" value="{{ $friend->phone }}"></br>
    Photo:</br> <input type="text" name="photo" value="{{ $friend->photo }}"></br>
    <input type="submit" value="Išsaugoti">
  </form>

@endsection('content')
