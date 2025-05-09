<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return response()->json([
            'halaman' => 'Tentang Kami',
            'deskripsi' => 'Ini adalah halaman tentang kami.'
        ]);
    }
}
    

