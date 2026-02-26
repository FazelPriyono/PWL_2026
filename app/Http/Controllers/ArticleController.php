<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function __invoke(Request $request)
    {
        $id = $request->route('id');
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
