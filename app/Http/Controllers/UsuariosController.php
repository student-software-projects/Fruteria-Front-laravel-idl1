<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['Usuarios']= usuarios::paginate(5);
        return view('Usuarios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
         

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datosUsuario=request()->all();
        

        $datosUsuario=request()->except('_token');

        usuarios::insert($datosUsuario);
        //return response()->json($datosUsuario);  
        return redirect('usuarios')->with('Mensaje','Usuario Agregado Con Exito');
      }

    /**  
     * Display the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //$datosUsuario=request()->except(['_token','_method']);
    

        $usuario= usuarios::findOrFail($id);
        return view('usuarios.edit',compact('usuario'));
       
        return redirect('usuarios')->with('Mensaje','Usuario Editado Con Exito');
        //return redirect('usuarios')->with('Mensaje','Usuario Modificado Con Exito');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuario=request()->except(['_token','_method']);
        usuarios::where('id','=',$id)->update($datosUsuario);

        //$usuario= Usuarios::findOrFail($id);
        return redirect('usuarios')->with('Mensaje','Usuario editado con exito');
       // return view('usuarios.edit',compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario= Usuarios::findOrFail($id);

        Usuarios::destroy($id);
        //return redirect('usuarios');
        return redirect('usuarios')->with('Mensaje','Usuario Eliminado Con Exito');
    } 
}
