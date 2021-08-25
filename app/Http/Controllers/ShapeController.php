<?php

namespace App\Http\Controllers;

use App\Models\Circle;
use App\Models\Triangle;

class ShapeController extends Controller
{
    public function sumArea($radius, $a, $b, $c){

        $circleSurface = $this->circleSurface($radius);
        $triangleSurface = $this->triangleSurface($a, $b, $c);

        return $circleSurface + $triangleSurface;
        
        
    }

    public function sumDiameters($radius, $a, $b, $c){

        $circleCircumference = $this->circleCircumference($radius);
        $triangleCircumference = $this->triangleCircumference($a, $b, $c);

        return $circleCircumference + $triangleCircumference;
        
        
    }

    public function circle($radius){

        Circle::create([
          'type' => "circle",
          'radius' => $radius*$radius,
          'surface' => $this->circleSurface($radius),
          'circumference' => $this->circleCircumference($radius)
        ]);

        $circle = Circle::latest()->first();


        return $circle->toJson(JSON_PRETTY_PRINT);
    }

    public function triangle($a, $b, $c){
        Triangle::create([
            'type' => "triangle",
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'surface' => $this->triangleSurface($a, $b),
            'circumference' => $this->triangleCircumference($a, $b, $c),
        ]);

        $triangle = Triangle::latest()->first();


        return $triangle->toJson(JSON_PRETTY_PRINT);
    }

    private function triangleSurface($a, $b){

    return ($a*$b)/2;

    }
    private function triangleCircumference($a, $b, $c){
        return $a+$b+$c;
    }

    private function circleSurface($radius){
        return $radius*$radius*3.14;
    }
    private function circleCircumference($radius){
        return 2*$radius*3.14;
    }
}
