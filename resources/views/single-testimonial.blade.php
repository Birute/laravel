@extends('layout')
@section('content')
<h1>{{ $title }}</h1>


<div class="block">
  <div class="name">{{ $testimonial->name }}</div>
  <div class="time">{{ $testimonial->time }}</div>
  <div class="text">{{ $testimonial->content }}</div>
</div>


@endsection('content')
