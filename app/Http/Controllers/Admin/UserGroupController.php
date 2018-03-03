<?php

namespace App\Http\Controllers\Admin;

use App\models\UsersGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserGroupController extends Controller
{
    
    public function index(){
        $usersGroup = UsersGroup::select('id','name')->get();            
        return view('admin.usersGroup.index',compact('usersGroup'));
    }

   
    public function create(){
        //
    }

   
    public function store(Request $request){
        //
    }

   
    public function show(UsersGroup $usersGroup){
        //
    }

   
    public function edit(UsersGroup $usersGroup){
        //
    }

    
    public function update(Request $request, UsersGroup $usersGroup){
        //
    }

   
    public function destroy(UsersGroup $usersGroup){
        //
    }
}
