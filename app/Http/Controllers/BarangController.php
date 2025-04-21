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
}
