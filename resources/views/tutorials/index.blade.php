@extends('layouts.base')
@section('title','Tutorials')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container my-5">
            <h1 class="fs-2">System Tutorials</h1>
            <p class="lead">Learn how to use the system like a pro.</p>
            <div class="row mt-2">
                @foreach($tutorials as $tutorial)
                <x-articles.tutorials title="{{$tutorial->title}}" content="{{ Str::limit($tutorial->content) }}" slug="{{ $tutorial->slug }}" />
                @endforeach
                @if(count($tutorials) == 0)
                <div class="alert alert-warning">
                    No tutorials found.
                </div>
                @endif
            </div>
        </div>
    </div>
    </div>
</main>
@endSection()