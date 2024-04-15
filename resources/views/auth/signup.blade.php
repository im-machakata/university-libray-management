@extends('layouts.base')
@section('title','Register')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="fs-1">Create an account</h1>
                    <p class="lead">Create an account and get access to our online library</p>
                    <form action="/register" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="surname">Surname</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="school-id">School ID</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning w-100">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="/static/images/library-books.jpg" class="img-fluid rounded-3 mt-3" alt="Empty classroom image">
                </div>
            </div>
        </div>
    </div>
</main>
@endSection()