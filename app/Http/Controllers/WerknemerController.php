<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Werknemer;

class WerknemerController extends Controller
{
    public function index(){
        //geef een lijst van werknemers
        $werknemers = Werknemer::latest()->get();
        return view('werknemers.index',["werknemers" => $werknemers]);
    }

    public function show($id){
        //laat informatie van 1 werknemer zien
        $werknemer = Werknemer::find($id);
        return view('werknemers.show',["werknemer" => $werknemer]);
    }

    public function create(){
        //laat view zien om een werknemer aan te maken
    }
    public function store(){
        //sla hem op
    }
    public function edit(){
        //laat view zien om werknemer te bewerken
    }
    public function update(){
        //update de werknemer
    }
    public function destroy(){
        //verwijder  en werknemer
    }


    //
}
