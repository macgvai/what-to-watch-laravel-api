<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Film extends Model
{
    // Разрешенные для массового заполнения поля
    protected $fillable = [
        'name',
        'preview_image',
        'background_image',
        'background_color',
        'video_link',
        'preview_video_link',
        'rating',
        'scores_count',
        'director',
        'starring',
        'run_time',
        'genre',
        'released',
        'is_favorite',
    ];

    protected $casts = [
        'starring' => 'json',       // автоматически преобразует массив ⇄ JSON
        'is_favorite' => 'boolean',
        'released' => 'integer',
        'run_time' => 'integer',
        'rating' => 'float',
        'scores_count' => 'integer',
    ];

    public function genres(): BelongsToMany {
        return $this->belongsToMany(Genre::class);
    }
}
