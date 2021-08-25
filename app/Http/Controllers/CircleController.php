<?php

namespace App\Http\Controllers;

use App\Models\Circle;
use Illuminate\Http\Request;

class CircleController extends Controller
{
    public function index($radius){

        Circle::create([
          'type' => "circle",
          'radius' => $radius*$radius,
          'surface' => $radius*$radius*3.14,
          'circumference' => 2*$radius*3.14
        ]);

        $circle = Circle::latest()->first();


        return $circle->toJson(JSON_PRETTY_PRINT);
    }
}
