<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexAuthorRequest;
use App\Http\Resources\AuthorRessource;
use App\Models\Author;
use Illuminate\Http\JsonResponse;

final class AuthorController
{
    public function index(IndexAuthorRequest $request): JsonResponse
    {
        $authors = Author::when($request->has('name'), function ($query) use ($request) {
            $query->where('name', $request->string('name'));
        })
            ->get();

        return response()->json(AuthorRessource::collection($authors), 200);
    }
}
