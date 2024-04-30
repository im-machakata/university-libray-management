@extends('layouts.base')
@section('title', $tutorial->title)
@section('content')
<main>
    <div class="container-fluid">
        <div class="container my-5">
            <h1 class="fs-2">{{ $tutorial->title }}</h1>
            <div class="content mt-4">{!! $tutorial->content !!}</div>
        </div>
    </div>
    </div>
</main>
@endSection()