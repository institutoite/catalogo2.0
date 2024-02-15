<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\StoreProductoRequest1;
use App\Http\Requests\EliminarRequest;
use App\Http\Requests\UpdateProductoRequest;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $productos = Producto::orderBy("stock","desc")->get();
        $categorias=Categoria::all();
        return view("producto.index",compact("productos",'categorias'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function crear()
    {
        
        $categorias=Categoria::all();
        return view("producto.create",compact("categorias"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductoRequest1 $request)
    {
        dd($request->all());
        //dd($request->file('file-data'));
        $producto=new Producto();
        $producto->nombre= $request->nombre;
        $producto->stock= $request->stock;
        $producto->precio=$request->precio;
        $producto->fvencimiento=$request->fvencimiento;
        
        // $producto->video=$request->video;
        
        $objetoImagen = app(ImagenController::class);
        
        $producto->foto=$this->GuardarImagenDesdeInput($request);
        $producto->video = $this->GuardarVideo($request);
        $producto->save();

        foreach ($request->file('file-data') as $imagen) {
            $objetoImagen->guardarBaseDatos($imagen,$producto->id);
            $this->GuardarImagenFisico($imagen);
        }

        return "guardado";
    }
    public function GuardarImagenDesdeInput(StoreProductoRequest1 $request){
        if ($request->hasFile('foto')){
            $fileArchivo=$request->file('foto');
            $nombreArchivo=Str::random(2)."fotos".'.'.$request->file('foto')->getClientOriginalExtension();
            //Storage::disk('public')->put('fotos\\',$fileArchivo); 
            $fileArchivo->storeAs('fotos',$nombreArchivo,'public');
        }else{
            dd("no enviaron video");
        }
        //dd($nombreArchivo);
        return $nombreArchivo;
    }
//     public function GuardarImagenDesdeInput(StoreProductoRequest1 $request)
// {
//     if ($request->hasFile('foto')) {
//         $fileArchivo = $request->file('foto');

//         // Generar un nombre único para el archivo
//         $nombreArchivo = $fileArchivo->getClientOriginalName();

//         // Almacenar el archivo con el nombre personalizado
//         Storage::disk('public')->put('fotos', $fileArchivo, $nombreArchivo);

//         // Resto de la lógica del controlador
//     } else {
//         dd("No se envió ninguna imagen");
//     }

//     return $nombreArchivo;
// }
    public function GuardarImagenFisico($imagen){
            $nombreArchivo=Str::random(5)."fotos".'.'.$imagen->getClientOriginalExtension();
            dd($imagen);
            Storage::disk('public')->put('fotos\\',$imagen);    
    }

    public function GuardarVideo(StoreProductoRequest1 $request){
        if ($request->hasFile('video')){
            //dd("Me enviaron un video");
            $fileArchivo=$request->file('video');
            $nombreArchivo=Str::random(5)."Video".'.'.$request->file('video')->getClientOriginalExtension();
            Storage::disk('public')->put('videos\\',$fileArchivo);    

        }else{
            dd("no enviaron video");
        }
        return $nombreArchivo;
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        
        return view("producto.mostrar",compact('producto'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $categorias=Categoria::all();
        return view("producto.editx",compact("producto","categorias"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizar(UpdateProductoRequest $request, Producto $producto)
    {

        $producto->nombre= $request->nombre;
        $producto->stock= $request->stock;
        $producto->precio=$request->precio;
        $producto->fvencimiento=$request->fvencimiento;
        $producto->foto=$request->foto;
        $producto->video=$request->video;
        $producto->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EliminarRequest $request)
    {
        $id_producto=$request->id_producto;
        return response()->json(["respuesta"=>"eliminado correctamente","id"=>$id_producto]);
    }

    
}
