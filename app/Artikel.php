<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['titel', 'inhoud', 'datum'];

    public function path(){
        return route('artikelen.single', $this);
    }
}
