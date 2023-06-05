<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    function Animal(){
        echo "I am Animal";
        return view('animal');
    }
}
