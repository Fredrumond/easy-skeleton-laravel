<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    
    public function index(){
        $users = User::select('id','name','group_id','created_at')->get();            
        return view('admin.users.index',compact('users'));
    }

    
    public function create(){        
         $group = \App\Models\UsersGroup::all();             
         if($group->count() > 0){
            foreach ($group as $key => $value) {
                $groupOptions[$value->id] = $value->name;
            }
         }
         
        return view('admin.users.create',compact('groupOptions'));
    }

   
    public function store(Request $request){
        request()->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'group_id' => 'required'              
        ]);

        $user = new User();
        $user->name        = $request->name;       
        $user->username    = $request->username;
        $user->email       = $request->email;
        $user->password    = bcrypt($request->password);
        $user->group_id    = $request->group_id;
        $user->save();
        
        return redirect()->route('usuarios.index')
                        ->with('success','Usuário cadastrado com sucesso');
    }

   
    public function show($id){
        $user = User::find($id); 
        return view('admin.users.show',compact('user'));
    }

    
    public function edit($id){
        $group = \App\Models\UsersGroup::all();             
         if($group->count() > 0){
            foreach ($group as $key => $value) {
                $groupOptions[$value->id] = $value->name;
            }
         }
        $user = User::find($id); 
        return view('admin.users.edit',compact('user','groupOptions'));
    }

   
    public function update(Request $request, $id){ 

        request()->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required'
        ]);
       
        $user = User::find($id);
        $user->name        = $request->name;       
        $user->username    = $request->username;
        $user->email       = $request->email;       
        $user->save();
       
        return redirect()->route('usuarios.index')
                        ->with('success','Usuário editado com sucesso');
    }
   
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('usuarios.index')
                        ->with('success','Usuário deletado com sucesso');
    }
}
