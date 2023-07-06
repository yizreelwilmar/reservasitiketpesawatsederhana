<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index() {
        $penggunas = DB::table('penggunas')->get();
        return view('pengguna', ['penggunas' => $penggunas]);
        }
            
}
