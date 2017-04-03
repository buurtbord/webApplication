<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $fillable = ['body', 'comment', 'user_id'];

    public function plan()
    {
        return $this->belongsTo('App\Plan');

    }

    public function user() {

        return $this->belongsTo('App\User');
    }
}
