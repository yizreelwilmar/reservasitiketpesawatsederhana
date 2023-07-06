<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $nama = "Budi Susadi";
$mataKuliah = ["Algoritma dan Pemrograman 1", "Algoritma dan Pemrograman 2", "Pemro
graman Web 1", "Pemrograman Web 2"];
return view('infoMahasiswa',['nama' => $nama, 'mataKuliah' => $mataKuliah]);

    }
}
