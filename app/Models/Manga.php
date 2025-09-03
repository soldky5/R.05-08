<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

final class Manga extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'start_year',
        'end_year',
        'volume_number',
        'author_id',
    ];


    /**
     * @return HasOne<Author, $this>
     */
    public function author(): HasOne
    {
        return $this->hasOne(Author::class);
    }
}
