@extends('layout.default')

@section('page_title', 'Dettagli fumetto')


@section('content')


<ul>
    <li>ID: {{ $comic->id }}</li>
    <li>Created at: {{ $comic->title }}</li>
    <li>Description: {{ $comic->description }}</li>
    {{-- <li> <img src=" {{ $comic->thumb }}" alt=""> </li> --}}
    <li>Price: {{ $comic->series }}</li>
    <li>Price: {{ $comic->price }}</li>
    <li>Type: {{ $comic->type }}</li>

</ul>

    
@endsection