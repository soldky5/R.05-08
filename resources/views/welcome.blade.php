<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Mangathèque</title>
    </head>
    <body>
        <div class="container mx-auto px-6 p-10">
            <h1 class="text-center text-5xl font-extrabold mb-2">Mangathèque</h1>

            @if(session('success'))
                <div class="w-full bg-green-600 text-white text-center p-3 shadow-md">
                    <p class="text-sm font-medium">
                    {{ session('success') }}
                    </p>
                </div>
            @endif
            @if ($errors->any())
                <div class="w-full bg-red-600 text-white text-center p-3 shadow-md">
                    <p class="text-sm font-medium">
                        {{$errors->first('name')}}
                    </p>
                    <p class="text-sm font-medium">
                        {{$errors->first('year_of_birth')}}
                    </p>
                </div>
            @endif

            <div class="max-w-2xl mx-auto mt-8 space-y-6">
            <form class="bg-white shadow-md rounded-2xl p-6 space-y-4" method="POST" action="{{ route('authors.store') }}">
                @csrf
                <h2 class="text-lg font-semibold text-gray-700">Ajouter un auteur</h2>
                
                <div>
                <label class="block text-sm font-medium text-gray-600">Nom</label>
                <input type="text" name="name" class="p-2 not-only:mt-1 w-full rounded-xl border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div>
                <label class="block text-sm font-medium text-gray-600">Année de naissance</label>
                <input type="number" name="year_of_birth" class="p-2 mt-1 w-full rounded-xl border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div>
                <label class="block text-sm font-medium text-gray-600">Biographie</label>
                <textarea name="biography" rows="3" class="p-2 mt-1 w-full rounded-xl border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-xl shadow hover:bg-blue-700 transition">Créer</button>
            </form>

            <div class="bg-white shadow-md rounded-2xl p-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Liste des entrées</h2>
                @if(count($authors) > 0)
                    <ul class="divide-y divide-gray-200">
                        @foreach($authors as $author)
                        <li class="py-3">
                            <p class="font-semibold">{{ $author->name }} <span class="text-sm text-gray-500">({{ $author->year_of_birth }})</span></p>
                            <p class="text-gray-600 text-sm">{{ $author->biography }}</p>
                        </li>
                        @endforeach
                    </ul>
                @else
                    <p>Aucun auteur trouvé</p>
                @endif
            </div>
        </div>
    </body>
</html>
