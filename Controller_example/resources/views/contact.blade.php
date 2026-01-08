@extends('layout.master')


@section('content')
    @isset($data)
        @foreach ($data as $d)
            <p>Name: {{ $d['name'] }}</p>
            <p>Email: {{ $d['email'] }}</p>
            <p>Message: {{ $d['message'] }}</p>
        @endforeach
    @endisset



    @empty($data)
        <p>No data found</p>
    @endempty

@endsection

@section('This To Display Data')
    @if (session()->has('data'))
        <p>{{ session('data.name') }}</p>
        <p>{{ session('data.email') }}</p>
        <p>{{ session('data.message') }}</p>
    @else
        <p>No data found</p>
    @endif
@endsection
