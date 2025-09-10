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
        'year_of_birth',
        'year_of_death',
        'biography',
    ];

    /**
     * @return HasMany<Manga, $this>
     */
    public function mangas(): HasMany
    {
        return $this->hasMany(Manga::class);
    }

    public function addManga(int $manga): void
    {
        $manga['author_id'] = $this->id;
        Manga::insert($manga);
    }
}
