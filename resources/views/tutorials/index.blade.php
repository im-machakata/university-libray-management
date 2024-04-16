@extends('layouts.base')
@section('title','Tutorials')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="fs-1">System Tutorials</h1>
                    <p class="lead">Learn how to use the system like a pro.</p>

                    <div class="card my-3">
                        <div class="card-body">
                            <h2 class="fs-4 card-title">Dummy Tutorial #1</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sit accusamus soluta natus necessitatibus.</p>
                        </div>
                    </div>

                    <div class="card my-3">
                        <div class="card-body">
                            <h2 class="fs-4 card-title">Dummy Tutorial #2</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sit accusamus soluta natus necessitatibus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/static/images/library-books.jpg" class="img-fluid rounded-3 mt-3" alt="Empty classroom image">
                </div>
            </div>
        </div>
    </div>
</main>
@endSection()