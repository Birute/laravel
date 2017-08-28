@extends('layout')

@section('content')

<a href="{{ route('friends.create') }}">Sukurti naują</a></br></br>

@foreach ($friends as $friend)

<div class="block friend">
    <a href="{{ route('friends.edit', $friend ->id) }}">{{ $friend->name }}</a>
    <form method="post" action="{{ route('friends.destroy', $friend ->id) }}">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit">Ištrinti</button>
    </form>
</div>

@endforeach

@endsection('content')
