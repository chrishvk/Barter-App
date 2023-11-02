<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prenda;
use Illuminate\Support\Facades\Storage;

class PrendaController extends Controller
{
    //mostrar datos ya ingresados
    public function index() {
        $prendas = Prenda::all();
        return view('admin.prendas.index', ['prendas'=>$prendas]);
    }

    //crear registro
    public function create() {
        return view('admin.prendas.create');
    }

    //almacenar información del formulario
    public function store(Request $request) {
        //Validación
        $request->validate([
            'nombre' => 'required',
            'categoria' => 'required',
            'talla' => 'required',
            'color' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        //Registro de datos
        $prenda = new Prenda();
        $prenda->nombre = $request->nombre;
        $prenda->categoria = $request->categoria;
        $prenda->talla = $request->talla;
        $prenda->color = $request->color;
        $prenda->descripcion = $request->descripcion;
        $prenda->imagen = $request->file('imagen')->store('prendas upload', 'public');
        $prenda->save();

        return redirect()->route('prendas.index')->with('mensaje', 'Se registró correctamente');
    }

    //mostrar registro
    public function show($id) {
        $prenda = Prenda::findorFail($id);
        return view('admin.prendas.show', ['prenda'=>$prenda]);
    }

    //editar registro
    public function edit($id) {
        $prenda = Prenda::findorFail($id);
        return view('admin.prendas.edit', ['prenda'=>$prenda]);
    }

    //actualizar registro
    public function update(Request $request, $id) {
         //Validación
         $request->validate([
            'nombre' => 'required',
            'categoria' => 'required',
            'talla' => 'required',
            'color' => 'required',
            'descripcion' => 'required',
        ]);

        //Actualización de datos
        $prenda = Prenda::find($id);
        $prenda->nombre = $request->nombre;
        $prenda->categoria = $request->categoria;
        $prenda->talla = $request->talla;
        $prenda->color = $request->color;
        $prenda->descripcion = $request->descripcion;

        if($request->hasFile('imagen')) {
            Storage::delete('public/'.$prenda->imagen);
            $prenda->imagen = $request->file('imagen')->store('prendas upload', 'public');
        }

        $prenda->save();

        return redirect()->route('prendas.index')->with('mensaje', 'Se actualizó correctamente');
    }

    //eliminar registro
    public function destroy($id) {
        Prenda::destroy($id);
        return redirect()->route('prendas.index')->with('mensaje', 'Se eliminó registro correctamente');
    }

    public function cargar_prendas() {
        $prendas = Prenda::all();
        return view('index', ['prendas'=>$prendas]);
    }

    public function datos_prenda($id) {
        $prenda = Prenda::findorFail($id);
        return view('prenda', ['prenda'=>$prenda]);
    }

    public function buscar_prenda() {
        $texto = $_GET['texto'];
        $datos = Prenda::where('nombre','LIKE','%'.$texto.'%')->get();
        return view('buscar',['datos'=>$datos]);
    }
}
