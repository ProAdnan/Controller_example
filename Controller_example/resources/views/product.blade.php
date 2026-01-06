@extends('layout.master')





@section('content')

    @foreach ($products as $product)

        <p>{{ $product['name'] }} : {{ $product['price'] }}</p>

    @endforeach


@endsection