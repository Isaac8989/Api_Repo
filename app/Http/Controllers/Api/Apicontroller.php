<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Apicontroller extends Controller
{
    public function sum($num1, $num2){

        $resul = $num1 + $num2;
        return response()->json(['resultado' => $resul]);

    }
    public function mult($num1, $num2){

        $resul = $num1 * $num2;
        return response()->json(['resultado' => $resul]);

    }
}
