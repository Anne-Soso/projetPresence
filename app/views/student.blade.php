@extends('layouts.master')

@section('content')

  <div id="eleve">
    <h1 class="nomEleve">{{ $student->first_name.' '.$student->name }}</h1>
    <h2>{{ $student->level->name }}</h2>
    <img src="{{ $student->photo }}">
    <ul>    
        @foreach($sessions as $session)
          <li>
            <a href="#">{{ $session->description }} : {{ Attendance::find($session->pivot->attendance_id)->status }}<a href=""><span class="glyphicon glyphicon-cog"></span></a>
          </li>
        @endforeach
    </ul>
    <h2>Inscrit(e) aux cours</h2>
    <ul>
      @foreach($courses as $course)
      <li><a href="/course/{{ $course->slug }}">{{ $course->name }}</a></li>
      @endforeach
    </ul>
  </div>

@stop