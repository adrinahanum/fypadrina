<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store_services extends Model
{
    //
    // protected $guarded = [];

    // public function path()
    // {
    //     return route('pcname.show, $this');
    // }

    //public function user()
    public function author()
    {
        return $this->belongsTo(Store_services::class, 'stores_id'); //FK user_id (nak tahu siapa user_id)
    }

    public function author2()
    {
        return $this->belongsTo(Services::class, 'services_id'); //FK user_id (nak tahu siapa user_id)
    }
}
