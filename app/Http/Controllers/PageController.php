<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('NIM : 244107020033 <br> Nama : Fazel Priyono');
    }

    public function article($id)
    {
        return view('Halaman artikel dengan ID', ['id' => $id]);
    }
}
