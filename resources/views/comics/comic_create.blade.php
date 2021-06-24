@extends('layout.default')

@section('page_title', 'Aggiungi un fumetto')

@section('content')

    <form action="{{ route('comics.store') }}" method='post'>

        <label for="description">Descrizione</label>
        <input type="text" name="description" id="description">

        <label for="price">Price</label>
        <input type="text" name="price" id="price">

        <input type="submit" value="invia">
    
    </form>
    
@endsection