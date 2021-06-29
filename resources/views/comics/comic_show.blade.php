@extends('layout.default')

@section('page_title', 'Dettagli fumetto')


@section('content')


<ul>
    <li>ID: {{ $comic->id }}</li>
    <li>Created at: {{ $comic->title }}</li>
    <li>Description: {{ $comic->description }}</li>
    {{-- <li> <img src=" {{ $comic->thumb }}" alt=""> </li> --}}
    <li>Series: {{ $comic->series }}</li>
    <li>Price: {{ $comic->price }}</li>
    <li>Type: {{ $comic->type }}</li>
    <li>Sale date: {{ $comic->sale_date }}</li>
    <li>Created at: {{ $comic->ctreated_at }}</li>
    <li>Updated at: {{ $comic->updated_at }}</li>

</ul>

    
@endsection