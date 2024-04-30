<?php

use Illuminate\Http\Request;

$query = null;
$request = Request::capture();

// add query to form
if ($request->is("search-books") && $request->query('q')) {
    $query = $request->query('q');
} ?>
<nav class="py-2 border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item">
                <a href="/" class="nav-link link-body-emphasis px-2">Home</a>
            </li>
            <li class="nav-item">
                <a href="/read-books" class="nav-link link-body-emphasis px-2">Read Books</a>
            </li>
            <li class="nav-item">
                <a href="/talk-to-a-librarian" class="nav-link link-body-emphasis px-2">Chat with us</a>
            </li>
            <li class="nav-item">
                <a href="/system-tutorials" class="nav-link link-body-emphasis px-2">System Tutorials</a>
            </li>
        </ul>
        <ul class="nav">
            @if(auth()->user()->role == 'Admin')
            <li class="nav-item">
                <a href="/books/new" class="nav-link link-body-emphasis px-2">
                    Add Books
                </a>
            </li>
            <li class="nav-item">
                <a href="/authors/new" class="nav-link link-body-emphasis px-2">
                    Add Authors
                </a>
            </li>
            <li class="nav-item">
                <a href="/tutorials/new" class="nav-link link-body-emphasis px-2">
                    Add Tutorials
                </a>
            </li>
            @endif
            @guest
            <li class="nav-item">
                <a href="/login" class="nav-link link-body-emphasis px-2">Login</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link link-body-emphasis px-2">Sign up</a>
            </li>
            @else
            <li class="nav-item">
                <a href="/logout" class="nav-link link-body-emphasis px-2">
                    Logout
                </a>
            </li>
            @endif
        </ul>
    </div>
</nav>
<header class="py-3 mb-4 border-bottom">
    <div class="container d-md-flex flex-wrap justify-content-center">
        <a href="/search-books" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
            <img src="/static/images/bookshelf.svg" alt="Bookshelf icon" height="40">
            <span class="fs-4 ms-lg-2">Find Books</span>
        </a>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 d-flex gap-2" role="search" action="/search-books">
            <input name="q" type="search" class="form-control" placeholder="ISBN, Title or Keywords..." value="{{ $query }}" aria-label="Search" required>
            <button class="btn btn-outline-light border text-dark text-uppercase d-inline-block" type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
        </form>
    </div>
</header>