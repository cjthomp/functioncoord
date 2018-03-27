<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function events() : BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'userevents');
    }
}
