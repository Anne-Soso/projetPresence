@extends('layouts.master')

@section('content')

  <div id="eleve">
    <h1 class="nomEleve">{{ $teacher->first_name.' '.$teacher->name }}</h1>
    <a href="mailto:{{$teacher->email}}"><h2>{{ $teacher->email }}</h2></a>
    <img src="">
    <h2>Donne les cours</h2>
    <ul>
      @foreach($courses as $course)
      <li><a href="/course/{{ $course->slug }}">{{ $course->name }}</a></li>
      @endforeach
    </ul>
  </div>

@stop