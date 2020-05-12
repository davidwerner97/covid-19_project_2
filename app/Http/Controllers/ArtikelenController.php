<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class ArtikelenController extends Controller
{
    public function index(){
        // Aanroepen view en lijst meegeven van de objecten

        $artikelen = Artikel::all();

        return view('artikelen', ['artikelen' => $artikelen]);
    }

    public function show(Artikel $artikel){
        // Aanroepen view (bijv. show.blade.php) om object te tonen

        return view('artikelen.single', ['artikel' => $artikel]);
    }

    public function create(){
        // Aanroepen view (bijv. create.blade.php) om een nieuw object te maken

        return view('artikelen.create');
    }

    public function store(){
        // Opslaan nieuw object in de database.

        Artikel::create($this->validateArtikelen());

        return redirect('/artikelen');
    }

    public function edit(Artikel $artikel){
        // Aanroepen view (bijv. edit.blade.php) om object te wijzigen

        return view('artikelen.edit', ['artikel' => $artikel]);
    }

    public function update(Artikel $artikel){
        // Opslaan wijzigingen aan object in de database (vanuit edit)

        $artikel->update($this->validateArtikelen());

        return redirect($artikel->path());
    }

    public function destroy(Artikel $artikel){
        // Verwijderen object uit database

        $artikel->delete();

        return redirect('/artikelen');

    }

    protected function validateArtikelen()
    {
        return \request()->validate([
            'titel' => 'required',
            'inhoud' => 'required',
            'datum' => 'required'
        ]);
    }
}
