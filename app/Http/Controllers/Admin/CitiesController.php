<?php

namespace App\Http\Controllers\Admin;

use App\models\Cities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CitiesController extends Controller
{
    
    public function index(){
        $cities = Cities::all();            
        return view('admin.cities.index',compact('cities'));
    }

   
    public function create(){
         return view('admin.cities.create');
    }

   
    public function store(Request $request){
        request()->validate([
            'name' => 'required'
        ]);

        $user = new UsersGroup();
        $user->name        = $request->name;
        $user->save();
        
        return redirect()->route('cities.index')
                        ->with('success','Grupo de usuário cadastrado com sucesso');
    }

   
    public function show($id){
        $userGroup = UsersGroup::find($id); 
        return view('admin.cities.show',compact('userGroup'));
    }

   
    public function edit($id){
        $userGroup = UsersGroup::find($id); 
        return view('admin.cities.edit',compact('userGroup'));
    }

    
    public function update(Request $request, $id){
        request()->validate([
            'name' => 'required'            
        ]);
       
        $user = UsersGroup::find($id);
        $user->name        = $request->name;
        $user->save();
       
        return redirect()->route('usuarios-grupo.index')
                        ->with('success','Grupo de usuário editado com sucesso');
    }

   
    public function destroy($id){
        UsersGroup::find($id)->delete();
        return redirect()->route('usuarios-grupo.index')
                        ->with('success','Grupo de usuário deletado com sucesso');
    }
}
