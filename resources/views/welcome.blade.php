<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        @if(session('success'))
            <div style="color: green; padding: 10px; border: 1px solid green; margin: 10px 0;">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('authors.store') }}">
            @csrf
            <input type="text" name="name" placeholder="Nom auteur" />
            <input type="number" name="year_of_birth" placeholder="Année de naissance" />
            <textarea name="biography" placeholder="Biographie"></textarea>
            <button type="submit">Créer</button>
        </form>
        
        @if(count($authors) > 0)
            <ul>
                @foreach($authors as $author)
                    <li>{{ $author->name }}</li>
                @endforeach
            </ul>
        @else
            <p>Aucun auteur trouvé</p>
        @endif
    </body>
</html>
