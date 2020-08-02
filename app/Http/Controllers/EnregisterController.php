<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tuteur;
use App\Apprenant;
 use App\cycles;
use App\filieres;
 use App\nationalites;


class EnregistrerController extends Controller
     {
        function index(){ 
        $apprenant=apprenant::all();


     return view('ListeApprenant',['apprenantrep'=>$apprenant]);
    }
    
    function create(){
       return view('Formulaire');
    }
    function strore(Request $request)
    {
       $tuteurs=Tuteurs::create([  
      "nomtuteur"=>$request->nomtuteur,
      "prenomtuteur"=>$request->prenomtuteur,
       "telephonetuteur"=>$request->telephonetuteur
       ]);
      
      $filieres=Filieres::create([
        "filieres"=>$request->filieres
        ]);

      $cycles=Cycles::create([
     "cycle"=> $request->cycle
          ]);

     
          $nationalites=Nationalites::create([
            
             "nationalites"=> $request->nationalite
             ]);

       $apprenant=new apprenant();
       $apprenant->matricule=$request->matricule;
       $apprenant->nom=$request->nom;
       $apprenant->tuteur_id=$tuteur->id;
       $apprenant->cycle_id=$cycles->id;
       $apprenant->filiere_id=$filieres->id;
             $apprenant->nationalite_id=$nationalites->id;

      $apprenant->prenom=$request->prenom;
       $apprenant->sexe=$request->sexe;
       $apprenant->datedenaissance=$request->datedenaissance;
       $apprenant->photo=$request->photo->store('ev_images','public');
             $apprenant->telephone=$request->telephone;
       $apprenant->email=$request->email;
       $apprenant->anneeaccademiques=$request->anneeaccademiques;
    



 
      $tuteur->save();
      $apprenant->save();
         return redirect('Formulaire');
}
function detail($matricule)
{
   $apprenant=apprenant::where("matricule", "=", $matricule)->get();
   return view("detail", ["apprenant"=> $apprenant[0]]);

   }
}
