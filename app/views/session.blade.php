@extends('layouts.master')

@section('content')

  <div id="cours">
    <h1 class="titreCours">{{ $seance->description }}, <a href="/course/{{ $seance->course->slug }}">{{ $seance->course->name }}</a></h1>
    <h2><time>{{ 'Le '.date('d/m/Y \d\e H:i',strtotime($seance->date_start)).' à '.date('H:i',strtotime($seance->date_end)) }}</time></h2>
  <ul class="presences">
    @foreach($etudiants as $etudiant)
      <li>
        <a href="/student/{{ $etudiant->slug }}">
          <img src="{{ $etudiant->photo }}">
          {{ $etudiant->first_name.' '.$etudiant->name }}
        </a> : {{ Attendance::find($etudiant->pivot->attendance_id)->status }}
        <a href="">
          <span class="glyphicon glyphicon-cog"></span>
        </a>
      </li>
    @endforeach
  </ul>
  </div>

@stop