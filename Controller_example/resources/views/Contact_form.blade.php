@extends('layout.master')



@section('content')


    <form method="post" action="{{ route('contact.store') }}">
        @csrf

        name: <input type="text" name="name" id="name">
        email:<input type="email" name="email" id="email">
        Message:   <textarea name="message"></textarea>


        <input type="submit" name="submit" value="submit">


    </form>

@endsection