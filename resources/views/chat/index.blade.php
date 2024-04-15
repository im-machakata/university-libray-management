@extends('layouts.base')
@section('title','Chat')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container mt-5">
            <h1 class="fs-1">Chat with us</h1>
            <p class="lead">Talk to your subject librarian for free.</p>
        </div>
        <div class="container my-2">
            <div class="border rounded-3 py-2"></div>
        </div>
        <div class="container mt-3">
            <form action="/chat-with-a-librarian" method="post">
                <div class="input-group mb-3">
                    <div class="form-floating flex-fill">
                        <input type="text" placeholder="Your message goes here..." name="message" id="message" class="form-control">
                        <label for="message">Your message goes here...</label>
                    </div>
                    <button class="input-group-text text-uppercase">Send</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endSection()