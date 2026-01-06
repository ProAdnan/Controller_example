@extends('layout.master')





@section('content')

    <h2>Feedback Result</h2>

    @if(session()->has('feedback'))
        <p><strong>Name:</strong> {{ session('feedback.name') }}</p>
        <p><strong>Message:</strong> {{ session('feedback.message') }}</p>
    @else
        <p>No feedback submitted</p>
    @endif

    
@endsection