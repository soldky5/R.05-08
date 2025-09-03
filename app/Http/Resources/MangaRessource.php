<?php

namespace App\Http\Resources;

use App\Models\Manga;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Manga
 */
final class MangaRessource extends JsonResource
{
    /**
     * @return array<mixed|null>
     */
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'title' => (string) $this->title,
            'start_year' => (int) $this->start_year,
            'end_year' => (int) $this->end_year,
            'volume_number' => (int) $this->volume_number,
        ];
    }
}
