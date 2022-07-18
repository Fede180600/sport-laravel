@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h2>Dettagli atleta</h2>
        <h4>Nome: {{ $athlete->name }}</h4>
        <p>Genere {{ $athlete->genere }}</p>
        @if ($athlete_nation)
            <p>Nazionalità: {{ $athlete_nation->name }}</p>
        @endif
        <p>Categorie:</p>
        <ul>
            @foreach ($athlete_categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
