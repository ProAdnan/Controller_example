@extends('layout.master')



@section('content')

<form action="{{ route('user.store')}}" method="post">
    @csrf
    name: <input type="text" name="name"> <br>
    email: <input type="email" name="email"><br>
    password: <input type="number" name="password"><br>

   

    <input type="submit" name="submit" value="submit">

</form>

@endsection