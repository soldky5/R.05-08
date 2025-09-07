<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorRessource;
use App\Models\Author;
use Illuminate\Http\JsonResponse;

final class AuthorController
{
    public function index($request): JsonResponse
    {
        $authors = Author::select()->get();
        // TODO 2 : Ajouter un filtre sur le nom de l’auteur (utiliser la méthode "where" sur la query)
        // TODO 6 : Ajouter un tri par nom sur les auteurs (utiliser la méthode "orderBy" sur la query)

        return response()->json(AuthorRessource::collection($authors), 200);
    }
}
