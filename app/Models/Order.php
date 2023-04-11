<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ticket;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['quantity'];

    /**
     * Get the ticket associated with the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ticket(): HasOne
    {
        return $this->hasOne(Ticket::class);
    }
}
