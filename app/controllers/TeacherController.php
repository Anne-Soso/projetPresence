<?php
use Carbon\Carbon as Carbon;
class TeacherController extends UserController {


    public function afficher($teacher){
      $courses=$teacher->courses;
        
      return View::make('teacher')->with(array('teacher'=>$teacher,'courses'=>$courses,'titre'=>'Professeur'));

    }

}