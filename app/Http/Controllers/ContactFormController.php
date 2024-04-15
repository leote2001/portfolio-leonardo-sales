<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request) {
        $request->validate([
"nombre" => "required|max:50",
"email" => "required|email",
"asunto" => "required|max:180",
"mensaje" => "required|max:500",
"suma" => "required|max:2"
        ]);
        $sumaUser = $request->input("suma");
        $num1 = (int) $request->input("num1"); 
        $num2 = (int) $request->input("num2"); 
        $result = $num1 + $num2; 
        if ($sumaUser != $result) {
            return redirect()->back()->withErrors(["suma" => "La suma no es correcta"])->withInput();
        }
        $datos = $request->all();
        User::create(["nombre" => $datos["nombre"], "email" => $datos["email"]]);
        Mail::to("tifloleo@gmail.com")->send(new ContactFormMail($datos));
        return redirect()->back()->with("success", __("Mensaje enviado!")); 
    }
}
