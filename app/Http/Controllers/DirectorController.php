<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index()
    {
        $directores = Director::all();
        return view('directores.index', compact('directores'));
    }

    public function create()
    {
        return view('directores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'nacionalidad' => 'required|string|max:255',
        ]);

        Director::create($request->all());
        return redirect()->route('directores.index')->with('success', 'Director creado exitosamente');
    }

    public function edit(Director $director)
    {
        return view('directores.edit', compact('director'));
    }

    public function update(Request $request, Director $director)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'nacionalidad' => 'required|string|max:255',
        ]);

        $director->update($request->all());
        return redirect()->route('directores.index')->with('success', 'Director actualizado exitosamente');
    }

    public function destroy(Director $director)
    {
        $director->delete();
        return redirect()->route('directores.index')->with('success', 'Director eliminado exitosamente');
    }
}