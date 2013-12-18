@extends('layouts.master')

@section('content')

  <div id="cours">
    <h1 class="titreCours">Mes Cours</h1>
    <h2>2013-2014</h2>
    <ul>
      @foreach($coursProf as $cours)
      <li><a href="course/{{$cours->slug}}">{{$cours->name}}</a></li>
      @endforeach
    </ul>
    <h1 class="titreCours">Les autres cours</h1>
    <h2>2013-2014</h2>
    <ul>
      @foreach($allCourse as $cours)
        @if($cours->teachers->first()->name!="Vilain")
          <li>  
            <a href="course/{{$cours->slug}}">
              {{$cours->name}}
            </a>
            @foreach($cours->teachers as $teacher)
              <span>
                <a href="teacher/{{$teacher->slug}}">
                  <?php echo($teacher->first_name.' '.$teacher->name); ?>
                </a>
              </span>
            @endforeach
          </li>
        @endif
      @endforeach
    </ul>
    <a href="#" class="creerCours">Créer un nouveau cours</a>
  </div>

@stop