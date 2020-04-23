<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Werknemer extends Model
{
    protected $fillable = ['vnaam','anaam','plaats','postcode','hnummer','straat','telnummer','functie','bedrijf_id'];
    //
    public function path(){
        return route('werknemer.show', $this);
    }
    //
}
