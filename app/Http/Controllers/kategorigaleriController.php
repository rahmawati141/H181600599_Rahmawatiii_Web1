<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategorigaleri;

class kategorigaleriController extends Controller
{
    public function index(){
        $listKategorigaleri=Kategorigaleri::all();

        return view ('kategori_galeri.index', compact ('listKategorigaleri'));  
}
}
