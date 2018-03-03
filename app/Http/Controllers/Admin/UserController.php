<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    
    public function index(){
        $users = User::select('id','name','group_id')->get();            
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
        //
    }

   
    public function show(User $user){
        //
    }

    
    public function edit(User $user){
        //
    }

   
    public function update(Request $request, User $user){
        //
    }
   
    public function destroy(User $user)
    {
        //
    }
}
