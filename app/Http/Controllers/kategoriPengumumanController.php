<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class kategoriPengumumanController extends Controller
{
    public function index(){
        $listKategoriPengumuman=KategoriPengumuman::all();

        return view ('kategori_pengumuman.index', compact ('listKategoriPengumuman'));  
    }
}
