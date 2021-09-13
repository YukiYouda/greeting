<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function greet ($time) {
        $array = ['おはようございます', 'こんにちは', 'こんばんは', 'おやすみ'];
        if ($time === 'morning') {
            $title = '朝のあいさつ';
            $greet = 'おはようございます';
        } elseif ($time === 'afternoon') {
            $title = '昼のあいさつ';
            $greet = 'こんにちは';
        } elseif ($time === 'evening') {
            $title = '夕方のあいさつ';
            $greet = 'こんばんは';
        } elseif ($time === 'night') {
            $title = '夜のあいさつ';
            $greet = 'おやすみ';
        } elseif ($time === 'random') {
            $title = 'ランダムなメッセージ';
            $greet = $array[ array_rand( $array ) ];
        }

        return view('greet', [
            'greet' => $greet, 
            'title' => $title]);
    }
}
