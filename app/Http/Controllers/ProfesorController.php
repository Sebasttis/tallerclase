<?php

namespace App\Http\Controllers;
use App\Models\profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function show(profesor $profe){

        return view('show',compact('profe'));


    }

    public function edit(profesor $profesor){//Encuentro el Curso
       
        return view('edit',compact('profesor'));
 
      }
    public function update(Request $request, profesor $profe){
           
        $profe->cedula = $request->cedula;
        $profe->nombre = $request->nombre;
        $profe->direccion = $request->direccion;
        $profe->telefono = $request->telefono;
        $profe->save();
     
        return redirect()->route('profesor.index');
     
      }
     //Destroy
     public function destroy (profesor $profesor){
           
        $profesor->delete();
        return redirect()->route('profesor.index');
    }
    public function index(){

        $profe = profesor::orderBy('id', 'desc')->get();
        return view('listar', compact('profe'));
                            
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){
       
        $profe= new profesor();
        $profe->cedula=$request->cedula;
        $profe->nombre=$request->nombre;
        $profe->direccion=$request->direccion;
        $profe->telefono=$request->telefono;
         $profe->save();
}
}