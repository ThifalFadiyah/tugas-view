
@extends('layout/main')

@section('title', 'Books List')

@section('container')
<div class="container">
    <div class="row">
    <div class="col-8">
    <!-- <a class="mt-3 btn btn-dark" href="{{ url('/books')}}">previous page</a> -->
        <h1 class="mt-3">Find Your Book</h1>
        @foreach( $books as $book )
        <div class="mt-3 card">
        <div class="card-body">
        <p class="card-text">serial number : {{$book->serial_number}}</p>
            <h5 class="card-title">{{$book->book_name}}</h5>
                <h6 class="card-subtitle mb-2">Author : {{$book->author}}</h6>
                <h6 class="mt-3 card-subtitle">About this book:</h6>
                <p class="card-text">{{$book->detail}}</p>
        </div>
        </div>
        @endforeach   
    </div>
    </div>
</div>
@endsection
    
   
   