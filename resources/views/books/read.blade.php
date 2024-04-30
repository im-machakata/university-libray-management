@extends('layouts.base')
@section('title','Read books')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container my-5">
            <h1 class="fs-2">Read books</h1>
            <p class="lead">Select a book from the following categories and read</p>

            <div class="row mt-4">
                @foreach($books as $book)
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="fs-4">{{ Str::limit($book->title, 25) }}</h2>
                            <a href="{{$book->source}}">Read book</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endSection()