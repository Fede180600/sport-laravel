@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h2>Crea nuovo atleta</h2>
        <form action="{{ route('admin.athletes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="name">Nome atleta</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="genre">Genere</label>
                <select class="form-control" id="genre" name="genere">
                    <option value=""></option>
                    <option value="Uomo">Uomo</option>
                    <option value="Donna">Donna</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nation">Nazionalità</label>
                <select class="form-control" id="nation" name="nation_id">
                    <option value=""></option>
                    @foreach ($nationalities as $nationality)
                        <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nation">Discipline</label>
                @foreach ($categories as $category)
                    <div class="form-check">
                        <input id="category-{{ $category->id }}" type="checkbox" value="{{ $category->id }}" name="categories[]">
                        <label for="category-{{ $category->id }}" class="form-check-label">{{ $category->name }}</label>
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
