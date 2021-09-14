<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function word($word)
    {
        return view('word', ['word' => $word]);
    }
}
