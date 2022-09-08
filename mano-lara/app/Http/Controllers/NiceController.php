<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function fun(Request $request, $kiek, $abc = 'tralala')
    {
        $mas = ['Jautis', 'Gaidys', 'Tarakonas', 'Asilas'];


        return view('kitkas.fun', ['abc' => $abc, 'mas' => $mas]);
    }
}
