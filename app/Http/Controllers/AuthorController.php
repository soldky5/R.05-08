<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorRessource;
use App\Models\Author;
use Illuminate\Http\JsonResponse;

final class AuthorController
{
    public function index(): JsonResponse
    {
        $authors = Author::select()->get();

        return response()->json(AuthorRessource::collection($authors), 200);
    }
}
