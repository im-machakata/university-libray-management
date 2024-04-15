@extends('layouts.base')
@section('title','Search books')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container my-5">
            <h1 class="fs-1">{{$page['title']}}</h1>
            <p class="lead">{{$page['description']}}</p>
        </div>
    </div>
</main>
@endSection()