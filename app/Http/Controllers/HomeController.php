<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index() {
        $num1 = mt_rand(1, 9);
        $num2 = mt_rand(1, 9);
        $supportedLocales = config("app.supported_locales"); 
        $currentLocale = app()->getLocale();
        return view("home", [
"num1" => $num1,
"supportedLocales" => $supportedLocales,
"currentLocale" => $currentLocale,
"num2" => $num2,
        ] );
    }
}
