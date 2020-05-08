<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = false;
    protected $fillable = ['titel','beschrijving','datum'];
    public function path(){
        return route('status.show', $this);
    }
    public function deletepath(){
        return route('status.delete', $this);
    }
    public function editpath(){
        return route('status.edit', $this);
    }
}
