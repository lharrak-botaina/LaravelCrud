<?php

namespace App\Http\Controllers;

use App\Models\crudLaravel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudLaravelController extends Controller
{
public function afficher(){
    $person = DB::table("crud_laravels")->select("*")->get();
    return view("pages.tableau",compact('person'));
}

        public function ajouter(Request $request){

            
             $name=$request->input('name');
             $email=$request->input('email');
             $message=$request->input('message');
           
            $query = DB::insert("insert into crud_laravels(name,email,message) value(?,?,?)",[$name,$email,$message]);
            // if ($query){
            //     return back()->with('success','data have been successfuly inserted');
            // }else{
            //     return back()->with('fail','problems');
            // }
            //  $person = new crudLaravel();
            //  $person->name=$request->input('name');
            //  $person->email=$request->input('email');
            //  $person->message=$request->input('message');
            //  $insert=$person->save();

             if($query){
                return redirect('/tableau');
         }
    }

    public function suprimer($id){

    DB::table("crud_laravels")->where("id",$id)->delete();
       return redirect('/tableau');


    }

    public function modifier_afficher($id){
      
        $person = DB::table("crud_laravels")->where("id",$id)->get();
  
        return view('pages.modifier', compact('person'));
    }

    public function modifier(Request $request) {
        
        DB::table('crud_laravels')
         ->where('id',$request->input('id'))
         ->update([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'message'=>$request->input('message')

         ]);
       return redirect('/tableau');
        
    }
}
