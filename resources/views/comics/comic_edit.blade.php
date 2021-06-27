@extends('layout.default')

@section('page_title', 'Modifica un fumetto esistente')

@section('content')

    <form action="{{ route('comics.update', $comic->id) }}" method='post'>
    @csrf

        @method('PATCH')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $comic->title }}"> <br>

        <label for="description">Descrizione</label>
        <textarea type="text" name="description" id="description" rows="10" cols="50"> {{ $comic->description }} </textarea><br>

        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="{{ $comic->price }}"> <br>

        <label for="series">Series</label>
        <input type="text" name="series" id="series" value="{{ $comic->series }}"> <br>

        <label for="type">Type</label>
        <input type="text" name="type" id="type" value="{{ $comic->type }}"> <br>

        <label for="sale_date">Sale Date</label>
        <input type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}"> <br>

        <input type="submit" value="Salva">
    
    </form>
    
@endsection