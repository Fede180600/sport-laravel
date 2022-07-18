@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h2>Lista atleti</h2>
        <div class="row row-cols-3">
            @foreach ($atleti as $atleta)
            <div class="col">
                <div class="card my-3" style="width: 18rem;">
                    {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
    
                    <div class="card-body">
                        <h5 class="card-title">{{ $atleta->name }}</h5>
                        <p class="card-text">{{ $atleta->genere }}</p>
                        <a href="#" class="btn btn-primary">Vedi atleta</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
