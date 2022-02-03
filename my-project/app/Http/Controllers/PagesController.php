<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //Nos devuelve los chollos
    public function chollos() 
    {
        $chollos = Chollo::all();
        $chollos = Chollo::paginate(5);
        return view('chollos', compact('chollos'));
    }
    

    
    public function detalle($id) {
        $chollo = Chollo::findOrFail($id);

        return view('chollos.detalle', compact('chollo'));
    }

    public function crearChollo(Request $request) {
        $request -> validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required',
            'categoria' => 'required',
            'puntuacion' => 'required',
            'precio' => 'required',
            'precio_descuento' => 'required',
            'disponible' => 'required'
        ]);
        
        $cholloNuevo = new Chollo;
        $cholloNuevo -> titulo = $request -> titulo;
        $cholloNuevo -> descripcion = $request -> descripcion;
        $cholloNuevo -> url = $request -> url;
        $cholloNuevo -> categoria = $request -> categoria;
        $cholloNuevo -> puntuacion = $request -> puntuacion;
        $cholloNuevo -> precio = $request -> precio;
        $cholloNuevo -> precio_descuento = $request -> precio_descuento;
        $cholloNuevo -> disponible = $request -> disponible;

        $cholloNuevo -> save();
        return auth()->user();
        return back() -> with('mensaje', 'Chollo agregado exitósamente');
    }

    public function actualizar(Request $request, $id) {
        $request -> validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required',
            'categoria' => 'required',
            'puntuacion' => 'required',
            'precio' => 'required',
            'precio_descuento' => 'required',
            'disponible' => 'required'
        ]);
      
        $cholloActualizar = Chollo::findOrFail($id);
      
        $cholloActualizar -> titulo = $request -> titulo;
        $cholloActualizar -> descripcion = $request -> descripcion;
        $cholloActualizar -> url = $request -> url;
        $cholloActualizar -> categoria = $request -> categoria;
        $cholloActualizar -> puntuacion = $request -> puntuacion;
        $cholloActualizar -> precio = $request -> precio;
        $cholloActualizar -> precio_descuento = $request -> precio_descuento;
        $cholloActualizar -> disponible = $request -> disponible;

        $cholloActualizar -> save();
      
        return back() -> with('mensaje', 'Nota actualizada');
      }

    public function eliminar($id) {
        $cholloEliminar = Chollo::findOrFail($id);
        $cholloEliminar -> delete();
      
        return back() -> with('mensaje', 'Chollo Eliminado');
      }


      public function editar($id) {
        $chollo = Chollo::findOrFail($id);
      
        return view('chollos.editar', compact('chollo'));
      }
      
      
      function destacados() {
        //$chollos = Chollo::all();
        $chollos = DB::table('chollos')->orderByDesc('puntuacion')->limit(4)->get();
    
        return view('destacados', compact('chollos'));
    }
    
    function nuevos() {
        $chollos = DB::table('chollos') ->orderByDesc('id')->limit(4)->get();
        return view('nuevos', compact('chollos'));
    }

    function autenticacion(){
        return view('auth/login');
    }

    public function datosUsuario() {
        return auth()->user();
        // return auth()->user() -> name;
        // return auth()->user() -> email;
        // ...
      }

}
