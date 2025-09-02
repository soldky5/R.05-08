<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_shared',
    ];

    /**
     * @return HasMany<Manga, $this>
     */
    public function mangas(): HasMany
    {
        return $this->hasMany(Manga::class);
    }
}
