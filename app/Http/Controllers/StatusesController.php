<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusesController extends Controller
{
    public function index(){
        $status = Status::all();

        return view('status.index', ['status'=>$status]);
    }

    public function show($id){
        $status = Status::find($id);
        return view('status.show',["status" => $status]);
    }

    public function create(){
        return view('status.create');
    }

    public function store(Status $status){

        Status::create(request()->validate([
            'titel' => 'required',
            'beschrijving' => 'required',
            'datum' => 'required'
        ]));

        return redirect($status->path());
    }

    public function edit(Status $status){

        return view('status.changeStatus', ['status'=>$status]);
    }

    public function update(Status $status){

        $status->update(request()->validate([
            'titel' => 'required',
            'beschrijving' => 'required',
            'datum' => 'required'
        ]));

        return redirect($status->path());
    }

    public function destroy(Status $status){
        $status->delete();
        $status = Status::latest()->get();
        return view('status.index', ['status' => $status]);
    }
}
