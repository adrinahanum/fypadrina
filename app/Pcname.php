<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pcname extends Model
{
    //

    protected $guarded = [];

    public function path()
    {
        return route('pcname.show, $this');
    }

    //public function user()
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id'); //FK user_id (nak tahu siapa user_id)
    }
}
