@extends('layout.default')

@section('page_title', 'Comic Index')


@section('content')

@dump($comics)

<table>
    {{-- manca il titolo ma ho litigato con le migrations abastanza per oggi --}}
    <thead>
        <th>Id</th>
        <th>Description</th>
        <th>Price</th>
        <th>Series</th>
        <th>Type</th>
    </thead>

    {{--
    <tbody>
        @foreach($comics as $comic)
            <tr>
                <td>{{ $comic['id'] }}</td>
                <td>{{ $comic['description'] }}</td>
                <td>{{ $comic['price'] }}</td>
                <td>{{ $comic['series'] }}</td>
                <td>{{ $comic['type'] }}</td>
            </tr>
        @endforeach
    </tbody>
    --}}

</table>
    
@endsection