<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    use HasFactory;

    
    public function pornstar()
    {
        return $this->belongsTo('App\Models\Pornstar', 'biography_id');
    }
    
}
