@extends('layout.master')



@section('content')

<h1>edit product</h1>

    <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')
        name: <input type="text" name="name" value="{{ $product->name }}"> <br>
        price: <input type="number" name="price" value="{{ $product->price }}"><br>
        quantity: <input type="number" name="quantity" value="{{ $product->quantity }}"><br>

        description:
        <textarea name="description" id="" >{{ $product->description }}</textarea><br>

       


        <input type="submit" name="submit" value="update">

    </form>


@endsection
