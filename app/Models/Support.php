<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
   // use HasFactory;

   protected $primaryKey = 'ticket_id';


   public function tickets(){

      return $this->hasMany(TicketResponse::class,'ticket_id');
  }
}
