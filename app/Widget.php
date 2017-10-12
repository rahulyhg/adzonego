<?php

namespace App;

use App\Traits\HasModelTrait;

class Widget extends SuperModel
{
    protected $fillable = ['name',
                           'slug',
                           'user_id'];

    /**
     * Get the user that owns the widget.
     */
    public function user()
    {

        return $this->belongsTo('App\User');
    }
}