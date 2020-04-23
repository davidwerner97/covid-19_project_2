<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Werknemer;

class WerknemersController extends Controller
{
    public function index(){
        //geef een lijst van werknemers
        $werknemers = Werknemer::latest()->get();
        return view('werknemer.index',["werknemers" => $werknemers]);
    }

    public function show($id){
        //laat informatie van 1 werknemer zien
        $werknemer = Werknemer::find($id);
        return view('werknemer.show',["werknemer" => $werknemer]);
    }

    public function create(){
        //laat view zien om een werknemer aan te maken
        return view('werknemer.create');
    }
    public function store(){
        //sla hem op
        Werknemer::create($this->validateWerknemer());
        return redirect(route('werknemer.store'));
    }
    public function edit(Werknemer $werknemer){
        //laat view zien om werknemer te bewerken
        return view('werknemer.edit', ['werknemer' =>$werknemer]);
    }
    public function update(Werknemer $werknemer){
        //update de werknemer
        $werknemer->update($this->validateWerknemer());
        return redirect($werknemer->path());

    }
    public function destroy(Werknemer $werknemer){
        //verwijder  en werknemer
        $werknemer->delete();
        $werknemers = Werknemer::latest()->get();
        return view('werknemer.index', ['werknemers' => $werknemers]);
    }

    public function validateWerknemer() : array
    {
        return request()->validate([
            'vnaam' => ['required'],
            'anaam' => ['required'],
            'plaats' => ['required'],
            'postcode' => ['required'],
            'hnummer' => ['required'],
            'straat' => ['required'],
            'telnummer' => ['required'],
            'functie' => ['required'],
            'bedrijf_id' => ['required'], //we moeten hier meer validatie doen om te kijken of het bedrijf bestaat en mishcen ook dat de bedrijf die het aanmaakt ook het bedrijf van de werknemer is
        ]);

    }


    //
}
