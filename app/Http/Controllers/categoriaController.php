<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoriaRequest;
<<<<<<< HEAD
use App\Http\Requests\UpdateCategoriaRequest;
use DB;
use App\Models\Caracteristica;
use App\Models\Categoria;
use Exception;
=======
use DB;
use App\Models\Caracteristica;
>>>>>>> f3276e4e0b05889e00cf43765ba30cd6ff0cd19f

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $categorias = Categoria::with('caracteristica')->get();
        /* dd($categorias); */
        return view('categoria.index', ['categorias' => $categorias]);
    }
    
=======
        return view('categoria.index');
    }

>>>>>>> f3276e4e0b05889e00cf43765ba30cd6ff0cd19f
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaRequest $request)
    {
        try{
            DB::beginTransaction();
            $caracteristica = Caracteristica::create($request->validated());
            $caracteristica->categoria()->create([
                'caracteristica_id' => $caracteristica->id
            ]);
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
        }

        return redirect()->route('categorias.index')->with('sucess','Categoría registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(Categoria $categoria)
    {
        /* dd($categoria); */
        return view('categoria.edit',['categoria' => $categoria]);
=======
    public function edit(string $id)
    {
        //
>>>>>>> f3276e4e0b05889e00cf43765ba30cd6ff0cd19f
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        Caracteristica::where('id',$categoria->caracteristica->id)
        ->update(($request->validated()));

        return redirect()->route('categorias.index')->with('success','Categoría editada');
=======
    public function update(Request $request, string $id)
    {
        //
>>>>>>> f3276e4e0b05889e00cf43765ba30cd6ff0cd19f
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
