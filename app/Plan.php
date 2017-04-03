<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }
}
