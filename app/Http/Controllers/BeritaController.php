<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index () {
        return view('berita.index');
        }
        public function olahraga () {
        return view('berita.olahraga');
        }
        public function politik () {
        return view('berita.politik');
        }
}
