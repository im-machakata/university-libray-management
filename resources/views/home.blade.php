@extends('layouts.base')
@section('title','Home')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container my-5">
            <h1 class="fs-2">Great Zimbabwe University Online Library</h1>
            <p class="lead">Search and read text books from the comfort of your home with our online library.</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-4 col-lg-3">
                    <div class="card rounded-3 mb-3">
                        <div class="card-body">
                            <h2 class="fs-4 card-title">Chat with us</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="/talk-to-a-librarian" class="btn btn-outline-success d-block text-uppercase">Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card rounded-3 mb-3">
                        <div class="card-body">
                            <h2 class="fs-4 card-title">Read Books</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="/chat-with-a-librarian" class="btn btn-outline-success d-block text-uppercase">Read books</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card rounded-3 mb-3">
                        <div class="card-body">
                            <h2 class="fs-4 card-title">System Tutorials</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="/chat-with-a-librarian" class="btn btn-outline-success d-block text-uppercase">View tutorials</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card rounded-3 mb-3">
                        <div class="card-body">
                            <h2 class="fs-4 card-title">Create Account</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="/register" class="btn btn-outline-success d-block text-uppercase">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endSection()