<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use File;
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

    public function store(Request $request){
    	request()->validate([
            'nome' => 'required',
            'arquivo' => 'required'            
        ]);

        $nomeDocumento = md5($request->file('arquivo')->getClientOriginalName());        
        $path = base_path() . '/public/documentos';
        $fileName = $nomeDocumento.'.'.$request->file('arquivo')->getClientOriginalExtension();        
        $file = $request->file('arquivo')->move($path,$fileName);     

        $arquivo = new Document();
        $arquivo->name        = $request->nome;       
        $arquivo->path    = $fileName;
        $arquivo->save();
        
        return redirect()->route('admin.documento')
                        ->with('success','Documento cadastrado com sucesso');
    }

    public function show($id){    	
         $documento = Document::find($id); 
         return view('admin.documents.show',compact('documento'));
    }
}
