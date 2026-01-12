@extends('layout.master')


@section('content')


<h1>product: {{ $product->name }}</h1>
<h1>des: {{ $product->description }}</h1>

<h1>price: {{ $product->price }}</h1>



@endsection