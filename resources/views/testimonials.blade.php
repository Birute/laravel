@extends('layout')
@section('content')
<h1>{{ $title }}</h1>

@foreach ($testimonials as $testimonial)

<div class="block">
  <div class="name">{{ $testimonial->name }}</div>
  <div class="time">{{ $testimonial->time }}</div>
  <div class="text">{{ $testimonial->content }}</div>
</div>

@endforeach

<p>
Vardas:</br> <input type="text" name="" value=""></br>
Pavardė:</br> <input type="text" name="" value=""></br>
Atsiliepimas:</br>  <textarea name="comment" form="usrform"></textarea></br>
<button type="submit">Siųsti</button>
</p>
@endsection('content')
