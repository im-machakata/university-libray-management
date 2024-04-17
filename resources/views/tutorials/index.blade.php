@extends('layouts.base')
@section('title','Tutorials')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container my-5">
            <h1 class="fs-2">System Tutorials</h1>
            <p class="lead">Learn how to use the system like a pro.</p>
            <div class="row mt-2">
                @for($i=0;$i<=5;$i++) 
                <x-articles.tutorials title="Tutorial #{{$i+1}}" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dolorum cupiditate nam?" slug="hie" />
                @endfor
            </div>
        </div>
    </div>
    </div>
</main>
@endSection()