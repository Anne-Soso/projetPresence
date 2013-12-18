@extends('layouts.master')

@section('content')
  <div class="planning">

    <h1 class="titreTable"><span class="glyphicon glyphicon-chevron-left"></span>Mardi 10 décembre<span class="glyphicon glyphicon-chevron-right"></span></h1>
    <ul id="choixCalendrier">
      <li><a href="planning">Mois</a></li>
      <li><a href="planningSemaine">Semaine</a></li>
      <li><a href="planningJour">Jour</a></li>
    </ul>
    <table id="calendar" class="jour">
      <tr>
          <th class="heure">8:20</th>
          <td><a href="#" class="plus">[+]</a></td>
      </tr>
      <tr>
        <th class="heure">10:30</th>
        <td><a href="#" class="plus">[+]</a></td>

      </tr>      
      <tr>
        <th class="heure">13:30</th>
        <td><a href="#" class="delete">[x]</a><h1>Projet Web</h1> Travail sur Laravel</td>

      </tr>      
      <tr>
        <th class="heure">15:30</th>
        <td><a href="#" class="plus">[+]</a></td>
      </tr>


    </table>
  </div>


@stop