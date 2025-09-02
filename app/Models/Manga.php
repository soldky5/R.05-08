<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use PharIo\Manifest\Author;

final class Manga extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_shared',
    ];

    /**
     * @return HasOne<Author, $this>
     */
    public function author(): HasOne
    {
        return $this->hasOne(Author::class);
    }
}
