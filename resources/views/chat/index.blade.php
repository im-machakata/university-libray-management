@extends('layouts.base')
@section('title','Chat')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container mt-5">
            <h1 class="fs-2">Chat with us</h1>
            <p class="lead">Talk to your subject librarian and get help with your academic needs</p>
        </div>
        <div class="container py-2">
            <div class="d-flex flex-column gap-2">
                <!-- <div class="mx-auto mb-3">
                    <div class="p-1 border rounded-3 text-muted user-select-none small px-3">Today</div>
                </div> -->
                <x-chat.from message="Hello there! How can we help you?" sent-at="12:48 am" />
                <x-chat.to message="Hi, I can't seem to find Linguistics books" sent-at="12:49 am" />
            </div>
        </div>
        <div class="container pb-2">
            <form action="/talk-to-a-librarian" method="post">
                <div class="input-group mb-3">
                    <div class="form-floating flex-fill">
                        <textarea type="text" placeholder="Your message goes here..." name="message" id="message" class="form-control" required></textarea>
                        <label for="message">Your message goes here...</label>
                    </div>
                    <button class="input-group-text text-uppercase" type="submit">
                        <i class="fa-solid fa-send"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endSection()