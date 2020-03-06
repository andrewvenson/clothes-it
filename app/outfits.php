<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class outfits extends Model
{
    protected $guarded = [];
    public function items()
    {
        return $this->hasMany(Items::class);
    }
}
