@extends('layout.master')



@section('content')

    @isset($products)
        @foreach ($products as $p)
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>price</th>
                        <th>quantity</th>
                        <th>description</th>
                        <th>category_id</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>

                        <td> {{ $p['name'] }}</td>
                        <td>{{ $p['price'] }}</td>
                        <td>{{ $p['quantity'] }}</td>
                        <td>{{ $p['description'] }}</td>
                        <td>{{ $p['category_id'] }}</td>
                        <td><a href="{{ route('product.view', $p['id']) }}">view</a></td>
                        <td><a href="{{ route('product.edit', $p['id']) }}">edit</a></td>


                        <form action="{{ route('product.delete', $p['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </tr>

                </tbody>

            </table>
        @endforeach
    @endisset



    @empty($products)
        <p>No data found</p>
    @endempty


@endsection
