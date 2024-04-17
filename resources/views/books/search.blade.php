@extends('layouts.base')
@section('title','Search books')
@section('content')

<main>
    <div class="container-fluid py-4">
        <div class="container">
            <h1 class="fs-2">{{$page['title']}}</h1>
            <p class="lead">{{$page['description']}}</p>
        </div>
        @if($type == 'book')
        <div class="container">
            <div class="row mb-4">
                @foreach($results as $result)
                <div class="col-lg-3">
                    <div class="border rounded-3 p-2">
                        <h2 class="fs-4">{{ $result->title }}</h2>
                        <div class="details">
                            author: {{ $result->authors[0]->name }}
                        </div>
                        <a href="read-it-here">Read book</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @elseif($type == 'author')
        <div class="container">
            @foreach($results as $result)
            <h2 class="fs-3 mb-2">Author: {{$result->name}}</h2>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div class="row mb-4">
                @foreach($result->books as $book)
                <div class="col-lg-3">
                    <div class="border rounded-3 p-2">
                        <h3 class="fs-5">{{ $book->title }}</h3>
                        <div class="details">

                        </div>
                        <a href="read-it-here">Read book</a>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
        @endif
    </div>
</main>
@endSection()