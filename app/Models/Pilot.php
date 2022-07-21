<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    use HasFactory;

    protected $table = 'pilots';

    public function pilotdet(){

        return $this->hasOne(PilotDetail::class,'pilot_id');
    } 
    public function pilotdoc(){

        return $this->hasOne(PilotDocument::class,'pilot_id');
    } 
}
