<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{

    public function outfit()
    {

        return $this->belongsTo(Outfits::class);
    }
}
