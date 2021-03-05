@extends('layout/main')

@section('title', 'About Bibliotheca')

@section('container')
<div class="container">
    <div class="row">
    <div class="col-10">
        <h1 class="mt-5 mb-5">What is Bibliotheca?</h1>
        <h5 class="mt-3">Bibliotheca is website where you can find more information about your favorite book</h5>
        <!-- <h5>185150700111018</h5> -->
        <a class="mt-5 btn btn-dark" href="{{ url('/books')}}">let's Find the book</a>
    </div>
    </div>
</div>
@endsection