@extends('layout/main')

@section('title', 'Welcome to Bibliotheca')

@section('container')
<div class="container">
    <div class="row">
    <div class="col-10">
        <h1 class="mt-5 ">Welcome to Bibliotheca!</h1>
        <h5 class="mt-3 ">You can find your favorite books detail in here</h5>
        <a class="mt-5 btn btn-dark" href="{{ url('/books')}}">let's Find the book</a>
    </div>
    </div>
</div>
@endsection