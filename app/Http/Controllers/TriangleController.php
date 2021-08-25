<?php

namespace App\Http\Controllers;

use App\Models\Triangle;
use Illuminate\Http\Request;

class TriangleController extends Controller
{
    public function index($a, $b, $c){
        Triangle::create([
            'type' => "triangle",
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'surface' => ($a*$b)/2,
            'circumference' => $a+$b+$c,
        ]);

        $triangle = Triangle::latest()->first();


        return $triangle->toJson(JSON_PRETTY_PRINT);
    }
}
