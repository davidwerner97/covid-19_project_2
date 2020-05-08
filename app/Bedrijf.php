<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bedrijf extends Model
{
    protected $fillable = ['naam', 'plaats', 'postcode', 'hnummer', 'straat', 'telnummer'];

    public function path()
    {
        return route('bedrijven.single', $this);
    }
}
