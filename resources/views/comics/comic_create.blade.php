@extends('layout.default')

@section('page_title', 'Aggiungi un fumetto')

@section('content')

    <form action="{{ route('comics.store') }}" method='post'>
    @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title"> <br>

        <label for="description">Descrizione</label>
        <textarea type="text" name="description" id="description" rows="10" cols="50"> </textarea><br>

        <label for="price">Price</label>
        <input type="text" name="price" id="price"> <br>

        <label for="series">Series</label>
        <input type="text" name="series" id="series"> <br>

        <label for="type">Type</label>
        <input type="text" name="type" id="type"> <br>

        <label for="sale_date">Sale Date</label>
        <input type="text" name="sale_date" id="sale_date"> <br>

        <input type="submit" value="Invia">
    
    </form>
    
@endsection