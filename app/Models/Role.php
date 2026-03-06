<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
        'description'
    ];

    /**
     * Связь с пользователями (многие ко многим)
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

}
