<?php
use Carbon\Carbon as Carbon;
class CourseController extends BaseController {



    public function lister()
    {
        $coursProf=Teacher::whereName('Vilain')->first()->courses;   
        $allCourse=Course::all(); 
        //return $allCourse->first();
        return View::make('listeCours')->with(array('coursProf'=>$coursProf,'allCourse'=>$allCourse,'titre'=>'Les Cours'));
    }
    public function afficher($course){

       $sessions=$course->sessions; //retourne un objet eloquent ou une collection eloquent
       $students=$course->students()->orderBy('name', 'ASC')->get(); //students() renvoie un objet querybuilder plutot qu'une collection eloquent pour qu'on puisse order
       $id=[];
       foreach($students as $student){
        array_push($id,$student->id);
       }
       $pasInscrits=DB::table('students')->whereNotIn('id',$id)->orderBy('name', 'ASC')->get();
       $groups=Group::all();
        return View::make('cours')->with(array('cours'=>$course,'seances'=>$sessions,'etudiants'=>$students,'groupes'=>$groups,'pasInscrits'=>$pasInscrits,'titre'=>'Le Cours'));
    }

}