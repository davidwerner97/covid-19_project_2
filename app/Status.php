<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = false;
    protected $fillable = ['status_titel','status_beschrijving','datum'];
    public function path(){
        return route('status.index');
    }
}
