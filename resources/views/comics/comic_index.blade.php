@extends('layout.default')

@section('page_title', 'Comic Index')


@section('content')


<table>
    
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
                    <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                </td>

            </tr>
        @endforeach
    </tbody>
    

</table>
    
@endsection