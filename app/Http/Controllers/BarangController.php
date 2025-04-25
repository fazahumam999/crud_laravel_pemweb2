<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barang(): View
    {
        $barangs = Barang::all();
        return view('barang', compact('barangs'));
    }

    public function create(): View
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Barang::create([
            'kode' =>$request->kode,
            'nama' =>$request->nama,
            'harga' =>$request->harga,
            'stok' =>$request->stok,
        ]);

        return redirect('/barang')->with('success', 'Barang Berhasil ditambhakan');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kode' => 'required|max:255',
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update([
            'kode' => $validated['kode'],
            'nama' => $validated['nama'],
            'harga' => $validated['harga'],
            'stok' => $validated['stok'],
        ]);

        return redirect('/barang')->with('success', 'Barang berhasil ditambahkan');
    }
    
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect('/barang')->with('success', 'Barang berhasil dihapus');
    }
}
