<?php

namespace App\Http\Controllers;

use App\Models\Documental;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentalController extends Controller
{
    public function index()
    {
        $documentales = Documental::with('director')->get();
        return view('documentales.index', compact('documentales'));
    }

    public function create()
    {
        $directores = Director::all();
        return view('documentales.create', compact('directores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'duracion' => 'required|integer|min:1',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'director_id' => 'required|exists:directores,id',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('poster')) {
            $path = $request->file('poster')->store('posters', 'public');
            $data['poster'] = $path;
        }

        Documental::create($data);
        return redirect()->route('documentales.index')->with('success', 'Documental creado exitosamente');
    }

    public function edit(Documental $documental)
    {
        $directores = Director::all();
        return view('documentales.edit', compact('documental', 'directores'));
    }

    public function update(Request $request, Documental $documental)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'duracion' => 'required|integer|min:1',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'director_id' => 'required|exists:directores,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('poster')) {
            // Eliminar poster anterior
            if ($documental->poster) {
                Storage::disk('public')->delete($documental->poster);
            }
            $path = $request->file('poster')->store('posters', 'public');
            $data['poster'] = $path;
        }

        $documental->update($data);
        return redirect()->route('documentales.index')->with('success', 'Documental actualizado exitosamente');
    }

    public function destroy(Documental $documental)
    {
        if ($documental->poster) {
            Storage::disk('public')->delete($documental->poster);
        }
        $documental->delete();
        return redirect()->route('documentales.index')->with('success', 'Documental eliminado exitosamente');
    }
}