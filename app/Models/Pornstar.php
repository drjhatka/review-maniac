<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Alias;
use App\Models\Country;

class Pornstar extends Model
{
    use HasFactory;

    // A pornstar can have many aliases therefore one to many relation
    /**
     * Get all of the aliases for the Pornstar
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aliases(): HasMany
    {
        return $this->hasMany(Alias::class, 'pornstar_id');
    }

    
    public function country()
    {
        return $this->hasOne(Country::class,);
    }
    
}
