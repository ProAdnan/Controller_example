@extends('layout.master')





@section('content')

    @foreach ($products as $product)

        <p>{{ $product['name'] }} : {{ $product['price'] }}</p>
        <a href="/products/{{ $product['name'] }}">View</a>

    @endforeach


@endsection