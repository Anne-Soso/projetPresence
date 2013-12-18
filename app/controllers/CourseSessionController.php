<?php
use Carbon\Carbon as Carbon;
class CourseSessionController extends BaseController {


    public function afficher($sessionId){

      $seance=CourseSession::find($sessionId);
      $students=$seance->students;
      $attendances=Attendance::all();
      return View::make('session')->with(array('seance'=>$seance,'etudiants'=>$students,'attendances'=>$attendances,'titre'=>'La séance'));


    }

}