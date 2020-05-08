<?php

namespace App\Http\Controllers;

use App\Bedrijf;
use Illuminate\Http\Request;

class BedrijvenController extends Controller
{
    public function index()
    {
        //geef een lijst van bedrijven
        $bedrijf = Bedrijf::latest()->get();
        return view('bedrijven.index', ["bedrijven" => $bedrijf]);
    }

    public function show($id)
    {
        //laat informatie van 1 bedrijf zien
        $bedrijf = Werknemer::find($id);
        return view('bedrijven.show', ["bedrijven" => $bedrijf]);
    }

    public function create()
    {
        //laat view zien om een bedrijf aan te maken
        return view('bedrijven.create');

    }

    public function store()
    {
        Bedrijf::create($this->validateBedrijf());

        return redirect(route('bedrijven.index'));
    }

    public function edit(Bedrijf $bedrijf)
    {
        //laat view zien om bedrijf te bewerken
        return view('bedrijven.edit', compact('bedrijf'));
    }

    public function update(Bedrijf $bedrijf)
    {
        //update de werknemer
        $bedrijf->update($this->validateBedrijf());

        return redirect(route('bedrijven.show', $bedrijf));
    }

    public function destroy()
    {
        //verwijder  en werknemer
    }

    public function validateBedrijf(): array
    {
        return request()->validate([
            'naam' => 'required',
            'plaats' => 'required',
            'postcode' => 'required',
            'hnummer' => 'required',
            'straat' => 'required',
            'telnummer' => 'required'
        ]);
    }
}
