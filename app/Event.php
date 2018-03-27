<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    protected $fillable = [];

    protected $hidden = [];

    public function users() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'userevents');
    }
}
