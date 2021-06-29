@extends('layout.default')

@section('page_title', 'Modifica un fumetto esistente')

@section('content')

    <form action="{{ route('comics.update', $comic->id) }}" method='post'>
    @csrf

        @method('PATCH')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $comic->title }}"> <br>
        </div>
      
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" name="description" id="description" rows="10" cols="50" class="form-control"> {{ $comic->description }} </textarea><br>
        </div>

        <div class="row">
            <div class="col">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ $comic->price }}"> <br>
            </div>

            <div class="col">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" value="{{ $comic->series }}"> <br>
            </div>
        </div>
     

        <div class="row">
            <div class="col">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" value="{{ $comic->type }}"> <br>
            </div>

            <div class="col">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control" value="{{ $comic->sale_date }}"> <br>
            </div>
        </div>
     

        <input type="submit" value="Salva" class="btn btn-primary">
    
    </form>
    
@endsection