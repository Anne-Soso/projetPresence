@extends('layouts.master')

@section('content')
  <div class="planning">

    <h1 class="titreTable"><span class="glyphicon glyphicon-chevron-left"></span>Semaine du 9 au 15 décembre<span class="glyphicon glyphicon-chevron-right"></span></h1>
    <ul id="choixCalendrier">
      <li><a href="planning">Mois</a></li>
      <li><a href="planningSemaine">Semaine</a></li>
      <li><a href="planningJour">Jour</a></li>
    </ul>
    <table id="calendar" class="semaine">

      <tr>
        <th></th>
        <th>Lun 9</th>
        <th>Mar 10</th>
        <th>Mer 11</th>
        <th>Jeu 12 </th>
        <th>Ven 13</th>
        <th>Sam 14</th>
        <th>Dim 15</th>
      </tr>
      <tr>
        <th class="heure">8:20</th>
        <td><a href="#" class="plus">[+]</a></td>
        <td rowspan="4"><a href="#" class="delete">[x]</a><h1>Projet Web</h1> Travail sur Wordpress</td>
        <td><a href="#" class="plus">[+]</a></td>
        <td rowspan="2"><a href="#" class="delete">[x]</a><h1>Design Web Labo</h1> Travail sur le Responsive design</td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
      </tr>
      <tr>
        <th class="heure">10:30</th>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
      </tr>      
      <tr>
        <th class="heure">13:30</th>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
      </tr>      
      <tr>
        <th class="heure">15:30</th>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
        <td><a href="#" class="plus">[+]</a></td>
      </tr>


    </table>
  </div>


@stop