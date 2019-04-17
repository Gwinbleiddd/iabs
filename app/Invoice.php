<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $timestamps = false;

    public function client() {
        return $this->belongsTo(Client::class);
    }
}
