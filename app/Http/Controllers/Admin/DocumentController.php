<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index(){
    	$documentos = Document::select('id','name','path')->get();     	      
    	return view('admin.documents.index',compact('documentos'));
    }

    public function insert(){
    	return view('admin.documents.insert');
    }
}
