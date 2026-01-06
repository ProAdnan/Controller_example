@extends('layout.master')



@section('content')

    <h1>create a feedback</h1>




    <form action="{{ route('feedback.store') }}" method="post">
        @csrf
        name:

        <input type="text" name="name" id="name">

        feedback:
        <input type="text" name="feedback">

        <input type="submit" name="submit" value="submit">



    </form>

@endsection