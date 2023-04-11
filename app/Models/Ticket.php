<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Destination;
use App\Models\Price;

class Ticket extends Model
{
    use HasFactory;

   /**
    * Get the destination associated with the Ticket
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
   public function destination(): HasOne
   {
       return $this->hasOne(Destination::class);
   } 

   /**
    * Get the price associated with the Ticket
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
   public function price(): HasOne
   {
       return $this->hasOne(Price::class);
   }
}
