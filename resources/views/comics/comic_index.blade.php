@extends('layout.default')

@section('page_title', 'Comic Index')


@section('content')


<table class="table table-hover">
    
    <thead>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Series</th>
        <th>Type</th>
        <th>Sale date</th>
    </thead>

    <tbody>
        @foreach($comics as $comic)
            <tr>
                <td>{{ $comic['id'] }}</td>
                <td>{{ $comic['title'] }}</td>
                <td>{{ $comic['description'] }}</td>
                <td>{{ $comic['price'] }}</td>
                <td>{{ $comic['series'] }}</td>
                <td>{{ $comic['type'] }}</td>
                <td>{{ $comic['sale_date'] }}</td>
                <td>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-light m-1">Modifica</a>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-light m-1">Dettagli</a>

                    <form action="{{ route('comics.destroy', $comic->id) }}" method="post" class="delete-form">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="ELIMINA" class="btn btn-danger m-2 btn-sm">
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
    

</table>
    
@endsection