@extends('layout')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <form method="post" action="{{ route('friends.store') }}">
    {{ csrf_field() }}
    Vardas:</br> <input type="text" name="name"></br>
    Gimimo data:</br> <input type="text" name="birthday"></br>
    Tel. Nr.:</br> <input type="text" name="phone"></br>
    Photo:</br> <input type="text" name="photo"></br>
    <input type="submit" value="Išsaugoti">
  </form>

@endsection('content')
