@extends('layouts.master')

@section('content')
  <div class="planning">
    <ul id="choixCalendrier">
      <li><a href="planning">Mois</a></li>
      <li><a href="planningSemaine">Semaine</a></li>
      <li><a href="planningJour">Jour</a></li>
    </ul>
    <h1 class="titreTable"><span class="glyphicon glyphicon-chevron-left"></span>Décembre<span class="glyphicon glyphicon-chevron-right"></span></h1>
    <table id="calendar">

      <tr>
        <th>Lun</th>
        <th>Mar</th>
        <th>Mer</th>
        <th>Jeu</th>
        <th>Ven</th>
        <th>Sam</th>
        <th>Dim</th>
      </tr>
      <tr>
        <td class="other"><span class="number">25</span><a href="#" class="plus">[+]</a><ul><li>Projets Web</li><li>Design Web Th</li></ul></td>
        <td class="other"><span class="number">26</span><a href="#" class="plus">[+]</a></td>
        <td class="other"><span class="number">27</span><a href="#" class="plus">[+]</a></td>
        <td class="other"><span class="number">28</span><a href="#" class="plus">[+]</a></td>
        <td class="other"><span class="number">29</span><a href="#" class="plus">[+]</a></td>
        <td class="other"><span class="number">30</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">1</span><a href="#" class="plus">[+]</a></td>
      </tr>
      <tr>
        <td><span class="number">2</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">3</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">4</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">5</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">6</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">7</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">8</span><a href="#" class="plus">[+]</a></td>
      </tr>    
      <tr>
        <td><span class="number">9</span><a href="#" class="plus">[+]</a></td>
        <td id="actuel"><span class="number">10</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">11</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">12</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">13</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">14</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">15</span><a href="#" class="plus">[+]</a></td>
      </tr>    
      <tr>
        <td><span class="number">16</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">17</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">18</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">19</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">20</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">21</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">22</span><a href="#" class="plus">[+]</a></td>
      </tr>    
      <tr>
        <td><span class="number">23</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">24</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">25</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">26</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">27</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">28</span><a href="#" class="plus">[+]</a></td>
        <td><span class="number">29</span><a href="#" class="plus">[+]</a></td>
      </tr>
      <tr>
        <td><span class="number">30</span><a href="#" class="plus">[+]</a></td>
        <td class="other"><span class="number">1</span><a href="#" class="plus">[+]</a></td>
        <td class="other"><span class="number">2</span><a href="#" class="plus">[+]</a></td>
        <td class="other"><span class="number">3</span><a href="#" class="plus">[+]</a></td>
        <td class="other"><span class="number">4</span><a href="#" class="plus">[+]</a></td>
        <td class="other"><span class="number">5</span><a href="#" class="plus">[+]</a></td>
        <td class="other"><span class="number">6</span><a href="#" class="plus">[+]</a></td>
      </tr>

    </table>
  </div>


@stop