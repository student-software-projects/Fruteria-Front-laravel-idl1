<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function index ()
    {
        return view('index');
        }

    public function AcercaDe ()
    {
        return view('AcercaDe');
    }
    public function Domicilios ()
    {
        return view('Domicilios');
    }
}
