<?php

namespace App\Http\Controllers;

use App\Models\contactos;
use App\Models\proyectos;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home (){
        $proyectos['proyectos']=proyectos::where('idioma','es')->get();
        return view('home', $proyectos);
    }
    public function homeEn (){
        $proyectos['proyectos']=proyectos::where('idioma','en')->get();
        return view('homeEn', $proyectos);
    }
    public function contacto (){
        $datos = request()->except('_token', 'idioma');
        contactos::insert($datos);
        echo request('idioma');
        if(request('idioma') == 'es'){
            return back()->withErrors(['mensaje'=>'Hemos recibido tu solicitud con éxito']);
        }if(request('idioma')== 'en'){
            return back()->withErrors(['mensaje'=>'We have received your message successfully']);
        }
    }
}
