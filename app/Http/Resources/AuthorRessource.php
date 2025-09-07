<?php

namespace App\Http\Resources;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
            // TODO 4 : Ajouter la liste des oeuvres de l’auteur dans le retour de l’API (n'hésitez pas à créer un nouvelle resource pour le retour des mangas et à l'utiliser ici)
        ];
    }
}
