<?php

namespace App\Http\Controllers;

use App\Models\Lagu;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    public function index()
    {
        $lagu = Lagu::all();
        return view('lagu.index', compact('lagu'));
    }

    public function create()
    {
        return view('lagu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penyanyi' => 'required',
            'tahun' => 'required',
        ]);

        Lagu::create($request->all());

        return redirect()->route('lagu.index')->with('success', 'Data lagu berhasil ditambahkan');
    }

    public function edit(Lagu $lagu)
    {
        return view('lagu.edit', compact('lagu'));
    }

    public function update(Request $request, Lagu $lagu)
    {
        $request->validate([
            'judul' => 'required',
            'penyanyi' => 'required',
            'tahun' => 'required',
        ]);

        $lagu->update($request->all());

        return redirect()->route('lagu.index')->with('success', 'Data lagu berhasil diupdate');
    }

    public function destroy(Lagu $lagu)
    {
        $lagu->delete();
        return redirect()->route('lagu.index')->with('success', 'Data lagu berhasil dihapus');
    }
}
