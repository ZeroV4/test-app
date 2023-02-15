<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function test() {
        $grupe = array("W-1942", "W-1941", "P-1941", "P-1942", "P-1943");
        $specialitati = array("Administrarea Aplicatiilor Web", "Programarea");

        return view("test", ['grupe' => $grupe, 'specialitati' => $specialitati]);
    }
}
