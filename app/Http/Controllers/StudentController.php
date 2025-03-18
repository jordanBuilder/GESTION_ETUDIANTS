<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //fonction pour afficher la vue du formulaire
    public function create(){
        return view('students.create');
    }

    //function qui va stocker le student
    public function store(Request $request){
        Student::create($request->all());
        return redirect('students')->with('success','Student created successfully');
        //dd($request->all());
    }

    public function index(){
        $personnes = [
            "noms"=>["ABALO","IDOH"],
            "prenoms" =>["Justin", "Aincet"],
            "age"=>[19,45],
            "sexe" => ["Masculin","Féminin"]
        ];
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function show(Request $request){
        dd($request->ip());

        //return view('students.show');
    }
}
