<?php

namespace App\Http\Controllers;

use App\Models\contactos;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
        $contactos['contactos'] = contactos::all();
        return view('dashboard', $contactos);
    }
}
