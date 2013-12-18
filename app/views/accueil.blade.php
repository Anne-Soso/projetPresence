@extends('layouts.master')

@section('content')
  <div class="notes">
    <div><p>Demander des nouvelles de John Smith</p></div>
    <div><p>Réclamer le certificat de Cerise Abricot</p></div>
    <div><span class="t">T<sup>+</sup></span></div>
  </div>

  <h1 class="titreTable">Décembre</h1>
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

  <h1 class="titreAbsence">Élèves absents récemment</h1>
  <ul class="absences">
      <li>
        <a href="ceriseAbricot"><img src="cerise.jpg"> Cerise Abricot</a>
      </li>      
      <li>
        <a href="#"><img src="pomme.jpg"> John Smith</a>
      </li>
      <li>
        <a href="#"><img src="pomme.jpg"> Pomme d'Api</a>
      </li>
  </ul>

@stop