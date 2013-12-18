@extends('layouts.master')

@section('content')

  <div id="cours">
    <h1 class="titreCours">{{$cours->name.' '.$cours->year->name}}</h1>
    <h2>{{ $cours->level->name }}</h2>
    <h2>Séance en cours</h2>
    <ul>

    </ul>    
    <h2>Séances futures</h2>
    <ul>
      @foreach($seances as $seance)
        <li>
          <a href="/session/{{ $seance->id }}"><time>{{ 'Le '.date('d/m/Y \d\e H:i',strtotime($seance->date_start)).' à '.date('H:i',strtotime($seance->date_end)) }}</time>
          {{ $seance->description }}</a>
        </li>
      @endforeach
    </ul>
    <h2>Séances passées</h2>
    <ul>

    </ul>
    <h2>Elèves inscrits</h2>
    <ul class="inscrits">
      @foreach($etudiants as $etudiant)
        <li>
          <a href="/student/{{ $etudiant->slug }}"><img src="{{ $etudiant->photo }}"> {{ $etudiant->first_name.' '.$etudiant->name }}</a>
        </li>
      @endforeach
     </ul>
    <h2>Elèves non-inscrits</h2>
    <div class="lettres">
      <a href="#" class="lettre">A</a>
      <a href="#" class="lettre">B</a>
      <a href="#" class="lettre">C</a>
      <a href="#" class="lettre">D</a>
      <a href="#" class="lettre">E</a>
      <a href="#" class="lettre">F</a>
      <a href="#" class="lettre">G</a>
      <a href="#" class="lettre">H</a>
      <a href="#" class="lettre">I</a>
      <a href="#" class="lettre">J</a>
      <a href="#" class="lettre">K</a>
      <a href="#" class="lettre">L</a>
      <a href="#" class="lettre">M</a>
      <a href="#" class="lettre">N</a>
      <a href="#" class="lettre">O</a>
      <a href="#" class="lettre">P</a>
      <a href="#" class="lettre">Q</a>
      <a href="#" class="lettre">R</a>
      <a href="#" class="lettre">S</a>
      <a href="#" class="lettre">T</a>
      <a href="#" class="lettre">U</a>
      <a href="#" class="lettre">V</a>
      <a href="#" class="lettre">W</a>
      <a href="#" class="lettre">X</a>
      <a href="#" class="lettre">Y</a>
      <a href="#" class="lettre">Z</a>
    </div>
    <ul class="nonInscrits">
      @foreach($pasInscrits as $pasInscrit)
        <li>
          <a href="/student/{{ $pasInscrit->slug }}"><img src="{{ $pasInscrit->photo }}">{{ $pasInscrit->first_name.' '.$pasInscrit->name }}</a> 
        </li>
      @endforeach      
     </ul>
    <h2>Inscrire un groupe d'élèves</h2>
      <ul class="nonInscrits groupe">
        @foreach($groupes as $groupe)
        <li>
          <a href="#">{{ $groupe->name }}</a> 
        </li>   
        @endforeach
     </ul>
  </div>

@stop