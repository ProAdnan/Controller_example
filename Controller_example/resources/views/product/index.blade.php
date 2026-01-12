@extends('layout.master')



@section('content')

<form action="{{ route('product.store')}}" method="post">
    @csrf
    name: <input type="text" name="name"> <br>
    price: <input type="number" name="price"><br>
    quantity: <input type="number" name="quantity"><br>

    description: <textarea name="description" id=""></textarea><br>

    category: <select name="category" id="">

        <option selected disabled>Select</option>
        <option value="1">cat 1</option>
        <option value="2">cat 2</option>
        <option value="3">cat 3</option>

    </select>


    <input type="submit" name="submit" value="submit">

</form>

@endsection