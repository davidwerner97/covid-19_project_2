<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusesController extends Controller
{
    public function index(){
        $status = Status::all();

        return view('welcome', ['status'=>$status]);
    }

    public function create(){
        return view('create');
    }

    public function store(Status $status){

        Status::create(request()->validate([
            'status_titel' => 'required',
            'status_beschrijving' => 'required',
            'datum' => 'required'
        ]));

        return redirect($status->path());
    }

    public function edit(Status $status){

        return view('editAnimal', ['status'=>$status]);
    }

    public function update(Status $status){

        $status->update(request()->validate([
            'status_titel' => 'required',
            'status_beschrijving' => 'required',
            'datum' => 'required'
        ]));

        return redirect($status->path());
    }

    public function destroy(){

    }
}
