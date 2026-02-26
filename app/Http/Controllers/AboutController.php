<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke(Request $request)
    {
        return 'NIM : 244107020033 <br> Nama : Fazel Priyono <br> Kelas : TI-2H';
    }
}
