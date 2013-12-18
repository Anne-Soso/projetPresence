<?php
use Carbon\Carbon as Carbon;
class StudentController extends BaseController {


    public function afficher($student){
        $sessions=$student->sessions;
        $courses=$student->courses;
        return View::make('student')->with(array('student'=>$student,'sessions'=>$sessions,'courses'=>$courses,'titre'=>'L\' étudiant'));


    }

}