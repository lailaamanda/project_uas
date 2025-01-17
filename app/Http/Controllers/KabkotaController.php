<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kabkota;

class KabkotaController extends Controller
{
    public function index()
    {
        $kabkotas = Kabkota::all();
        return view('kabkota', ['kabkotas' => $kabkotas]);
    }
    public function penduduk(){
        $kabkotas = Kabkota:: all();
        return view('penduduk', ['kabkotas' =>$kabkotas]);
    }
}
