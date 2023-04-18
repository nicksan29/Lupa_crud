<?php

namespace App\Http\Controllers;

use App\Models\Cad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $registros = Cad::all();
        return view('cad.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cad.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "id" => "string|required",
        //     "name" => "string|required",
        //     "email" => "string|required",
        //     "cpf" => "string|required",
        //     "age" => "string|required",
        //     "telefone" => "string|required",
        // ]);

        $registros= Cad::create([
            "name" => $request->name,
            "email" => $request->email,
            "cpf" => $request->cpf,
            "age" => $request->age,
            "telefone" => $request->telefone,
        ]);
        return redirect(route("cadastro.index"))->withSuccess("série salva");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $registro = Cad::find($id);

        return view('cad.edit', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            "id" => "string|required",
            "name" => "string|required",
            "email" => "string|required",
            "cpf" => "string|required",
            "age" => "string|required",
            "telefone" => "string|required",
        ]);
        $registro = Cad::where("id", $request->id)->first();
        $registro->update([
            "name" => $request->name,
            "email" => $request->email,
            "cpf" => $request->cpf,
            "age" => $request->age,
            "telefone" => $request->telefone,
        ]);
       
        return redirect()->route('cadastro.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $registro = Cad::find($id);
        $registro->delete();
        return back();
    }
}
