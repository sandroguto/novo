<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;

class EventController extends Controller{
    public function index(){
        $nome           = "Sandro";
        $idade          = '42';
        $profissao      = "Laravel";
        
        return view('welcome',
                    [
                        'nome'           => $nome,
                        'idade'          => $idade,
                        'profissao'      => $profissao
                    ]
                    );
    }

    public function criarUsuario(){
        return view('usuarios.criar_usuario');
    }

    public function listarUsuario(){
        $usuarios = Usuario::all();
        return view('usuarios.listar_usuario', ['usuarios' => $usuarios]);
    }

    public function store(Request $request){

        $usuario = new Usuario;
        	
        $usuario->nome      = $request->nome;
        $usuario->data_nasc = $request->data_nasc;
        $usuario->foto      = $request->foto;

        if ($request->hasFile('foto') && $request->file('foto')->isValid() ) {
           $requestImage = $request->foto;
           $extension    = $requestImage->extension();
           $imageName    = time() . "." . $extension;

           $request->foto->move(public_path('images/fotos'), $imageName);
           $usuario->foto      = $imageName;
        }

        $usuario->save();
        return redirect('/');

    }

    public function show($id){
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', ['usuario' => $usuario]);
    }

    public function edit($id){
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.editar_usuario', ['usuario' => $usuario]);
    }

    public function destroy($id){
        Usuario::findOrFail($id)->delete();
        return redirect('/');
    }

    public function update(Request $request){

        $data = $request->all();

        if ($request->hasFile('foto') && $request->file('foto')->isValid() ) {
            $requestImage = $request->foto;
            $extension    = $requestImage->extension();
            $imageName    = time() . "." . $extension;
 
            $request->foto->move(public_path('images/fotos'), $imageName);
            $data['foto']      = $imageName;
         }

        Usuario::findOrFail($request->id)->update($data);
        return redirect('/');

    }

}




