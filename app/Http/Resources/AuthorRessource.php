<?php

namespace App\Http\Resources;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @mixin Author
 */
final class AuthorRessource extends JsonResource
{
    /**
     * @return array<mixed|null>
     */
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'name' => (string) $this->name,
            'year_of_birth' => (int) $this->year_of_birth,
            'year_of_death' => (int) $this->year_of_death,
            'biography' => (string) $this->biography,
            // TODO
        ];
    }
}
