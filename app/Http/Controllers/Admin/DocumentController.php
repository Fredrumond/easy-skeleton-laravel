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

    public function create(){
        return view('admin.documents.create');
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

        $documento = new Document();
        $documento->name        = $request->nome;       
        $documento->path    = $fileName;
        $documento->save();
        
        return redirect()->route('documentos.index')
                        ->with('success','Documento cadastrado com sucesso');
    }

    public function show($id){    	
         $documento = Document::find($id); 
         return view('admin.documents.show',compact('documento'));
    }

    public function edit($id){      
         $documento = Document::find($id); 
         return view('admin.documents.edit',compact('documento'));
    }

    public function update(Request $request, $id){

         request()->validate([
            'nome' => 'required'                   
         ]);

         Document::find($id)->update(array(
                'name' => $request->nome,
            ));
         $documento = Document::find($id);
         $documento->name =  $request->nome;
         $documento->save();  

         return redirect()->route('documentos.index')
                        ->with('success','Documento atualizado com sucesso');
    }

    public function destroy($id){
         
         $retornaDocumento = Document::find($id);
         File::delete('documentos/'.$retornaDocumento->path);
         Document::find($id)->delete();
         return redirect()->route('documentos.index')
                        ->with('success','Documento excluido com sucesso');
    }
}
