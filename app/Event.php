<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    protected $fillable = [];

    protected $hidden = [];

    protected $dates = [
        'created_at',
        'updated_at',
        'starts_at',
        'ends_at',
    ];

    public function users() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'userevents')
            ->withTimestamps()
            ->withPivot(['is_owner', 'starred_at', 'hidden_at']);
    }
}
