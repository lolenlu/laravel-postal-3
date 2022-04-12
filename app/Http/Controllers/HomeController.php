<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function calcNumber(Request $request)
    {
        $result = null;
        $attempts = null;
        $numberInput = is_numeric($request->input('number')) ? $request->input('number') : false;
        $minValue = 1;
        $maxValue = 10000000000;
        $attempts = 0;
        if ($numberInput && $numberInput >= $minValue && $numberInput <= $maxValue) {
            while (true) {
                $attempts++;
                $randomNumber = floor(($maxValue - $minValue) / 2) + $minValue;
                if ($randomNumber == $numberInput) {
                    $result = $randomNumber;
                    $attempts = $attempts;
                    break;
                } elseif ($randomNumber < $numberInput) {
                    $minValue = $randomNumber;
                } else {
                    $maxValue = $randomNumber;
                }
            }
        }

        return view('welcome', ['result' => $result, 'attempts' => $attempts]);
    }
}
