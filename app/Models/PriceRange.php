<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Destination;

class PriceRange extends Model
{
    use HasFactory;

    protected $fillable = ['min_quantity', 'max_quantity', 'price' ];

    /**
     * Get the destination associated with the PriceRange
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function destination(): HasOne
    {
        return $this->hasOne(Destination::class);
    }
}
