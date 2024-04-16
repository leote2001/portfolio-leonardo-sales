<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadCv() {
        $archivoRuta = storage_path("app/public/cvLeonardoSalesFull-Stack.pdf"); 
        return response()->download($archivoRuta);
    }
}
