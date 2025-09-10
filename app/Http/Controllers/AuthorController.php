<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexAuthorRequest;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Resources\AuthorRessource;
use App\Models\Author;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

final class AuthorController
{
    public function index(IndexAuthorRequest $request): JsonResponse
    {
        $authors = Author::select()
            ->when($request->has('name'), function ($query) use ($request) {
                $query->where('name', $request->string('name'));
            })
            ->orderBy('name', 'asc')
            ->get();

        return response()->json(AuthorRessource::collection($authors), 200);
    }
    public function store(StoreAuthorRequest $request): RedirectResponse
    {
        Author::create([
            'name' => $request->name,
            'year_of_birth' => $request->year_of_birth,
            'biography' => $request->biography
        ]);
        
        return redirect()->route('home')->with('success', 'Auteur créé avec succès !');
    }

    public function destroy()
    {
        // TODO 3 : Étape GREEN du TDD
    }
}
