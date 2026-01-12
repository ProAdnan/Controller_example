@extends('layout.master')


@section('content')


<h1>name: {{ $user->name }}</h1>
<h1>email: {{ $user->email }}</h1>

<h1>password: {{ $user->password }}</h1>



@endsection