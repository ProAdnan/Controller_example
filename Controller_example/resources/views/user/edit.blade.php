@extends('layout.master')



@section('content')
    <h1>edit user</h1>

    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')

        name: <input type="text" name="name" value="{{ $user->name }}"> <br>
        email: <input type="email" name="email"  value="{{ $user->email }}"><br>
        password: <input type="number" name="password"  value="{{ $user->password }}"><br>



        <input type="submit" name="submit" value="submit">

    </form>
@endsection
