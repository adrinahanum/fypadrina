<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    //
    public function stores()
    {
        return $this->hasMany(Stores::class);
    }
}
