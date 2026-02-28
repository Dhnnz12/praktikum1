<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class BiodataController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel profiles
        $data = DB::table('profiles')->first();
        return view('about', compact('data'));
    }
}
