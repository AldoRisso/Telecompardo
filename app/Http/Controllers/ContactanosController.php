<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\mail;



class ContactanosController extends Controller
{
    public function __invoke()
    {
        return view('contactanos');
    }
    public function index(){
        return view("contactanos.index");
    }

    public Function store(Request $request){

        $request->validate([
            "name" => "required",
            "apellido" => "required",
            "telefono" => "required|min:9|integer",
            "correo" => "required|email",
            "mensaje" => "required",
        ]);

        $correo = new ContactanosMailable($request->all());
        mail::to("aldorisso1@gmail.com")->send($correo);
        return redirect()->route("inicio")->with("info", "Mensaje Enviado");

    }
}
